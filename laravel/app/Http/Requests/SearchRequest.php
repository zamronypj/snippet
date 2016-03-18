<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Search request yang diinject ke 
 * controller SearcController
 *
 * @author Zamrony P. Juhara
 */
class SearchRequest extends Request
{
    /**
     * Tentukan apakah user boleh mengakses.
     * kita kembalikan nilai true karena ImageController 
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
            'keywords' => 'required|string'
        ];
    }
}