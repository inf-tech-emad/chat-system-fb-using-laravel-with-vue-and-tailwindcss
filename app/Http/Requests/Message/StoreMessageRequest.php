<?php

namespace App\Http\Requests\Message;

use http\Message;
use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
    public function store(): bool
    {
        $message = new Message();
        $message->text = $this->text;
        return $message->save();
    }
}
