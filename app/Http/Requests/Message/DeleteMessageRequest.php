<?php

namespace App\Http\Requests\Message;

use App\Models\Message;
use Illuminate\Foundation\Http\FormRequest;

class DeleteMessageRequest extends FormRequest
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
    public function delete(Message $message): bool
    {
        if ('type' == 'force'){
            return $message->forceDelete();
        }
        return $message->delete();
    }
}
