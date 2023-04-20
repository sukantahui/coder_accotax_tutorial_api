<?php

namespace App\Http\Controllers;

use App\Models\QuestionSetDetail;
use App\Http\Requests\StoreQuestionSetDetailRequest;
use App\Http\Requests\UpdateQuestionSetDetailRequest;

class QuestionSetDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestionSetDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionSetDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionSetDetail  $questionSetDetail
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionSetDetail $questionSetDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionSetDetail  $questionSetDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionSetDetail $questionSetDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionSetDetailRequest  $request
     * @param  \App\Models\QuestionSetDetail  $questionSetDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionSetDetailRequest $request, QuestionSetDetail $questionSetDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionSetDetail  $questionSetDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionSetDetail $questionSetDetail)
    {
        //
    }
}
