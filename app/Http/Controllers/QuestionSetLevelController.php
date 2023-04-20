<?php

namespace App\Http\Controllers;

use App\Models\QuestionSetLevel;
use App\Http\Requests\StoreQuestionSetLevelRequest;
use App\Http\Requests\UpdateQuestionSetLevelRequest;

class QuestionSetLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreQuestionSetLevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionSetLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionSetLevel  $questionSetLevel
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionSetLevel $questionSetLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionSetLevel  $questionSetLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionSetLevel $questionSetLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionSetLevelRequest  $request
     * @param  \App\Models\QuestionSetLevel  $questionSetLevel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionSetLevelRequest $request, QuestionSetLevel $questionSetLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionSetLevel  $questionSetLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionSetLevel $questionSetLevel)
    {
        //
    }
}
