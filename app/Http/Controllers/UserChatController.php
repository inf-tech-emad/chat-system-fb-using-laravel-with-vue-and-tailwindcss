<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserChat\DeleteUserChatRequest;
use App\Http\Requests\UserChat\StoreUserChatRequest;
use App\Http\Requests\UserChat\UpdateUserChatRequest;
use App\Models\User;
use App\Models\UserChat;

class UserChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'userChats'=>UserChat::all(),
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
    public function store(StoreUserChatRequest $request)
    {
        if ($request->store()){
            return back();
        }
        return back()->withErrors([''=>'']);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserChat $userChat)
    {
        $data = [
            'userChat'=>$userChat,
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserChat $userChat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserChatRequest $request, UserChat $userChat)
    {
        if ($request->update($userChat)){
            return back();
        }
        return back()->withErrors([''=>'']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteUserChatRequest $request,UserChat $userChat)
    {
        if ($request->delete()){
            return back();
        }
        return back()->withErrors([''=>'']);
    }
}
