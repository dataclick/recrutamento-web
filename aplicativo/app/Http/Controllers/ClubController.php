<?php

namespace App\Http\Controllers;

use App\Club;
use App\Http\Requests\ClubRequest;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::orderBy('name')->get();
        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClubRequest $request)
    {
        if (Club::create($request->all())) {
            return redirect()
                ->route('clubs.index')
                ->with('message', 'O clube foi salvo com sucesso.');
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
        $club = Club::findOrFail($id);
        return view('clubs.edit', compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ClubRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClubRequest $request, $id)
    {
        $club = Club::findOrFail($id);

        if ($club->update($request->all())) {
            return redirect()
                ->route('clubs.index')
                ->with('message', 'O clube foi salvo com sucesso.');
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
        $club = Club::findOrFail($id);
        if ($club->delete()) {
            return back()->with('message', 'O clube foi excluído com sucesso.');
        }
        return back()
            ->with('message', 'O clube não foi excluído. Por favor, tente novamente.');
    }
}
