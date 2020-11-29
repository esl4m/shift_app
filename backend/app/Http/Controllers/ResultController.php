<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Result::findOrFail($id);
            return response()->json([
                'message'=> 'Result found',
                'data' => $data]);
        }
        catch(Exception $e){
            return response()->json([
                'message'=> 'Error - Result not retrieved',
                'data' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function getUserResults($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
            $results = Result::where('user_id', '=', $user_id)->firstOrFail();
            return response()->json([
                'message'=> 'results found',
                'results' => $results]);
        }
        catch(Exception $e){
            $this->initResponse('User not found', $e->getMessage(), 400, 'error');
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
        Result::where('id', $id)->delete();
        return response()->json(['message' => 'Result deleted']);
    }
}
