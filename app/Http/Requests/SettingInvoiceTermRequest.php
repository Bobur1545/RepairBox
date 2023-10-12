<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingInvoiceTermRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'repair_invoice_terms' => 'sometimes',
            'bill_invoice_terms' => 'sometimes',
            'sale_invoice_terms' => 'sometimes',
            'custom_buy_invoice_terms' => 'sometimes',
        ];
    }
}
