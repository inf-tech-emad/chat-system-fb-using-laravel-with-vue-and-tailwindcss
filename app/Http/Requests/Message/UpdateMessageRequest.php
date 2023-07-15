<?php

namespace App\Http\Requests\Message;

use App\Models\Message;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMessageRequest extends FormRequest
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
            'text'=>'required|string',
        ];
    }
    public function update(Message $message): bool
    {
        $message->text = $this->text;
        if ($message->isDirty()){
            return $message->save();
        }
        return false;
    }
}
