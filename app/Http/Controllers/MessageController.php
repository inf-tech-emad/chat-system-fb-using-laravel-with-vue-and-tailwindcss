<?php

namespace App\Http\Controllers;

use App\Http\Requests\Message\DeleteMessageRequest;
use App\Http\Requests\Message\StoreMessageRequest;
use App\Http\Requests\Message\UpdateMessageRequest;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'messages'=>Message::all(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        if ($request->store()){
            return back();
        }
        return back()->withErrors([''=>'']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        $data = [
            'message'=>$message
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        if ($request->updte($message)){
            return back();
        }
        return back()->withErrors([''=>'']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteMessageRequest $request,Message $message)
    {
        if ($request->delete($message)){
            return back();
        }
        return back()->withErrors([''=>'']);
    }
}
