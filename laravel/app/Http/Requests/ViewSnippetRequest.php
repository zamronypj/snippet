<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

/**
 * ViewSnippetRequest
 *
 * @author Administrator
 */
class ViewSnippetRequest extends Request
{
    /**
     * Kita butuh override all() karena isu
     * terkait validasi parameter route
     * Parameter route /s/{hash} tidak akan tersedia dalam
     * Request secara otomatis sehingga harus diisi manual 
     * @return type
     */
    public function all()
    {
        $request = Input::all();
        $request['hash'] = $this->route('hash');
        return $request;
    }

    /**
     * Tentukan apakah user boleh mengakses.
     * kita kembalikan nilai true karena ViewSnippetController 
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
            'hash' => 'required|string|alpha_num|size:6'
        ];
    }
}
