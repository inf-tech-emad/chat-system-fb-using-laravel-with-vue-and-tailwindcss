<?php

namespace App\Http\Controllers;

use App\Http\Requests\Chat\DeleteChatRequest;
use App\Http\Requests\Chat\StoreChatRequest;
use App\Http\Requests\Chat\UpdateChatRequest;
use App\Models\Chat;
use App\Models\User;
use Inertia\Inertia;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'chats'=>Chat::all(),
            'users' => User::all(),
        ];
        return Inertia::render('Chat' , $data);
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
    public function store(StoreChatRequest $request)
    {
        if ($request->store()){
            return back();
        }
        return back()->withErrors([''=>'']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chat $chat)
    {
        $data = [
            'chat'=>$chat,
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChatRequest $request, Chat $chat)
    {
        if ($request->update($chat)){
            return back();
        }
        return back()->withErrors([''=>'']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteChatRequest $request,Chat $chat)
    {
        if ($request->delete($chat)){
            return back();
        }
        return back()->withErrors([''=>'']);
    }
}
