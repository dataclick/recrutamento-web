<?php

namespace App\Http\Controllers;

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
        $partners = Partner::orderBy('name', 'asc')->get();
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
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

        if (Partner::create($request->all())) {
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
        $partner = Partner::findOrFail($id);
        return view('partners.edit', compact('partner'));
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
        if ($partner->delete()) {
            return back()->with('message', 'O sócio foi excluído com sucesso.');
        }
        return back()
            ->with('message', 'O sócio não foi excluído. Por favor, tente novamente.');
    }
}
