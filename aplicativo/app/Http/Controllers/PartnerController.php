<?php

namespace App\Http\Controllers;

use App\Club;
use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::orderBy('name')->get();
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::orderBy('name')->get();
        return view('partners.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validates
        // return back()->with('message', 'O sócio não foi salvo. Por favor, tente novamente')->withInput();

        if ($partner = Partner::create($request->all())) {

            if ($request->has('clubs')) {
                $partner->clubs()->attach($request->clubs);
            }

            return redirect()
                ->route('partners.index')
                ->with('message', 'O sócio foi salvo com sucesso.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clubs = Club::orderBy('name')->get();
        $partner = Partner::findOrFail($id);
        $associates = $partner->clubs()->get()->pluck('id')->all();
        return view('partners.edit', compact('partner', 'clubs', 'associates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        // validates
        // return back()->with('message', 'O sócio não foi salvo. Por favor, tente novamente')->withInput();

        if ($partner->update($request->all())) {

            if ($request->has('clubs')) {
                $partner->clubs()->sync($request->clubs);
            } else {
                $partner->clubs()->detach();
            }

            return redirect()
                ->route('partners.index')
                ->with('message', 'O sócio foi salvo com sucesso.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->clubs()->detach();
        if ($partner->delete()) {
            return back()->with('message', 'O sócio foi excluído com sucesso.');
        }
        return back()
            ->with('message', 'O sócio não foi excluído. Por favor, tente novamente.');
    }
}
