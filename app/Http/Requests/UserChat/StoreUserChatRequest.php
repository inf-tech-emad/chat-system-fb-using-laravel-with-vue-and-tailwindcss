<?php

namespace App\Http\Requests\UserChat;

use App\Models\UserChat;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserChatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user_id'=>'required|exists:users,id',
            'chat_id'=>'required|exists:chats,id',
        ];
    }

    public function store():bool {
        $userChat = new UserChat();
        $userChat->user_id = $this->user_id;
        $userChat->chat_id = $this->chat_id;
        return $userChat->save();
    }
}
