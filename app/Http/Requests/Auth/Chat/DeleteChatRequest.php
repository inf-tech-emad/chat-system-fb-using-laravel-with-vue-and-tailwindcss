<?php

namespace App\Http\Requests\Auth\Chat;

use App\Models\Chat;
use Illuminate\Foundation\Http\FormRequest;

class DeleteChatRequest extends FormRequest
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
            'type'=>'required|in:force,delete',
        ];
    }

    public function delete(Chat $chat): bool
    {
        if ('type' == 'force'){
            return $chat->forceDelete();
        }
        return $chat->delete();
    }
}
