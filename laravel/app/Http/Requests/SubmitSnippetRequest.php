<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * ViewSnippetRequest
 *
 * @author Administrator
 */
class SubmitSnippetRequest extends Request
{

    /**
     * Tentukan apakah user boleh mengakses.
     * kita kembalikan nilai true karena HomeController 
     * boleh diakses publik
     * 
     * @return bool
     */
    public function authorize()
    {        
        return true;
    }

    /**
     * Ambil aturan validasi
     *
     * @return array
     */
    public function rules()
    {
        return [
            'snippet' => 'required|string',
            'title' => 'string',
            'syntax' => 'integer',
        ];
    }
}
