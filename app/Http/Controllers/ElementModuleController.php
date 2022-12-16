<?php

namespace App\Http\Controllers;

use App\Models\ElementModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ElementModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('ElementsModules.index',['elemodules'=>ElementModule::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('ElementsModules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $em = new ElementModule();
        $em->code = $request->code;
        $em->designation = $request->designation;
        $em->VH = $request->VH;
        $em->poids = $request->poids;
        $em->module_code = $request->module;
        $em->save();
        return Redirect('/Elementmodule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ElementModule  $elementModule
     * @return \Illuminate\Http\Response
     */
    public function show(ElementModule $elementModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ElementModule  $elementModule
     * @return \Illuminate\Http\Response
     */
    public function edit(ElementModule $elementModule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ElementModule  $elementModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElementModule $elementModule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElementModule  $elementModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElementModule $elementModule)
    {
        //
    }
}
