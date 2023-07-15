<?php

namespace App\Http\Requests\UserChat;

use App\Models\UserChat;
use Illuminate\Foundation\Http\FormRequest;

class DeleteUserChatRequest extends FormRequest
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
            'type'=>'required|in:delete,force',
        ];
    }
    public function delete(UserChat $userChat): bool
    {
        if ('type' == 'force'){
            return $userChat->forceDelete();
        }
        return $userChat->delete();
    }
}
