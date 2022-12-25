<?php

namespace App\Http\Controllers;

use App\Models\ElementModule;
use App\Models\Prof;
use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Seances.index',['Seances'=>Seance::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Seances.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $S = new Seance();
        $P=Prof::firstWhere('Nom','=',$request->prof);
        $E=ElementModule::firstWhere('designation','=',$request->element_module);
        $S->prof_id = $P->id;
        $S->prof = $P->nom;
        $S->element_module_id = $E->id;
        $S->element_module = $request->element_module;
        $S->type = $request->type;
        $S->misemestre = $request->misemestre;
        $S->jour = $request->jour;
        $S->temps = $request->temps;
        $S->salle = $request->salle;
        $S->save();
        return Redirect('Seance/'.$request->misemestre);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($misemestre)
    {
        return view('Seances.show',['Seances'=>Seance::all()->where('misemestre','=',$misemestre)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        //
    }
}
