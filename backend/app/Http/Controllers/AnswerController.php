<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Result;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();
        return response()->json($answers);
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
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'answers' => 'required',
            'question_id' => 'required',
        ]);

        // Check if user exists , if not create user
        $user = User::where('email', '=', $request->email)->first();
        if ($user == null) {
            $user = User::create(array('name' => $request->name, 'email' => $request->email,
            'email_verified_at' => now(), 'password' => Hash::make('api_pass'), 'remember_token' => Str::random(10)));
        }
        
        for ($i=0; $i < count($request->answers); $i++) { 
            $answer = $request->answers[$i];
            Answer::create([
                "user_email" => $request->email,
                "user_name" => $request->name,
                "question_id" => intval(substr($answer[0], -1)),
                "answer" => $request->answer,
                "created_at" => now(),
                "updated_at" => now(),
                ]);
        }

        $result = Result::create([
            "user_email" => $request->email,
            "user_name" => $request->name,
            "question_id" => $request->question_id,
            "answer_id" => $request->answer_id,
            "result" => $request->result,
            "created_at" => now(),
            "updated_at" => now(),
            ]);

        return response()->json(['message'=> 'Answer Added', 'questionanswer' => "true"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Answer::findOrFail($id);
        return response()->json([
            'message'=> 'Answer found',
            'data' => $data
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
            Answer::where('id', $id)->delete();
            return response()->json('Answer deleted');
        }
        catch(Exception $e){
            return response()->json('Error - Answer not deleted');
        }
    }
}
