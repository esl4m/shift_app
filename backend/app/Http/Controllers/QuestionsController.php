<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Questions::all();
        return response()->json($questions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'q_num' => 'required',
                'text' => 'required',
            ]);
            $question = Questions::create($request->all());
            return response()->json([
                'message'=> 'question added',
                'data' => $question]);
        }
        catch(Exception $e){
            return response()->json([
                'message'=> 'Error - Question not created',
                'data' => $e->getMessage()
                ]);
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
        try {
            $data = Questions::findOrFail($id);
            return response()->json([
                'message'=> 'question found',
                'data' => $data]);
        }
        catch(Exception $e){
            return response()->json([
                'message'=> 'Error - Question not retrieved',
                'data' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $questions)
    {
        $request->validate([
            'q_num' => 'required',
            'text' => 'required',
        ]);
        $questions->q_num = $request->q_num();
        $questions->text = $request->text();
        $questions->save();
        
        return response()->json([
            'message' => 'Question updated!',
            'question' => $questions
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Questions::where('id', $id)->delete();
            return response()->json('Question deleted');
        }
        catch(Exception $e){
            return response()->json('Error - Question not deleted');
        }
    }
}
