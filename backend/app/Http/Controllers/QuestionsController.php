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
            $this->initResponse('Question created', true, 200, 'success');
        }
        catch(Exception $e){
            $this->initResponse('Question not created', $e->getMessage(), 400, 'error');
        }

        return response()->json($this->response, $this->code);
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
            $question = Questions::findOrFail($id);
            $this->initResponse('Question retrieved', true, 200, 'data');
        }
        catch(Exception $e){
            $this->initResponse('Question not retrieved', $e->getMessage(), 400, 'error');
        }
        return response()->json($this->response, $this->code);
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
            $this->initResponse('Question deleted', true, 200, 'success');
        }
        catch(Exception $e){
            $this->initResponse('Question not deleted', $e->getMessage(), 400, 'error');
        }
        return response()->json($this->response, $this->code);
    }
}
