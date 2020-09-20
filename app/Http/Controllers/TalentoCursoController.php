<?php

namespace App\Http\Controllers;

use App\Talento;
use App\TalentoCurso;
use Illuminate\Http\Request;

class TalentoCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = Talento::all();
        return view('sistema.talento.index', compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TalentoCurso  $talentoCurso
     * @return \Illuminate\Http\Response
     */
    public function show(TalentoCurso $talentoCurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TalentoCurso  $talentoCurso
     * @return \Illuminate\Http\Response
     */
    public function edit(TalentoCurso $talentoCurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TalentoCurso  $talentoCurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TalentoCurso $talentoCurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TalentoCurso  $talentoCurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(TalentoCurso $talentoCurso)
    {
        //
    }
}
