<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplyResource;
use App\Model\Reply;
use App\Model\Question;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReplyController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['index','show']]);
    }

    /**
     * Undocumented function
     *
     * @param Question $question
     * @return void
     */
    public function index(Question $question)
    {
        return ReplyResource::collection($question->replies);
    }



    /**
     * Undocumented function
     *
     * @param Question $question
     * @param Request $request
     * @return void
     */
    public function store(Question $question,Request $request)
    {
       $reply = $question->replies()->create($request->all());
        return response(['reply'=> new ReplyResource($reply)],Response::HTTP_CREATED);
    }

    /**
     * Undocumented function
     *
     * @param Question $question
     * @param Reply $reply
     * @return void
     */
    public function show(Question $question, Reply $reply)
    {
        return new ReplyResource($reply);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question, Reply $reply)
    {
        $reply->update($request->all());
        return response('Update', Response::HTTP_ACCEPTED);
    }

    /**
     * Undocumented function
     *
     * @param Question $question
     * @param Reply $reply
     * @return void
     */
    public function destroy(Question $question,Reply $reply)
    {
        $reply->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
