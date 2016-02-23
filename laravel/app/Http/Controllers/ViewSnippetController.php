<?php

namespace App\Http\Controllers;

use App\Models\Snippet;
use App\Http\Requests\ViewSnippetRequest;

/**
 * Controller untuk menampilkan detil snippet
 *
 * @author Zamrony P. Juhara
 */
class ViewSnippetController extends Controller
{
    private function getSnippetByHash($hash) {
        return Snippet::select('snippets.*', 'users.name AS username')
                 ->where('hash',$hash)
                 ->leftJoin('user_snippets','snippets.id','=','user_snippets.snippet_id')
                 ->leftJoin('users','users.id','=','user_snippets.user_id')
                 ->first();        
    }
    
    public function index(ViewSnippetRequest $request, $hash) {
        $snippet = $this->getSnippetByHash($hash);
        if ($snippet != null) {
           return view('view_snippet')
                ->with('snippet', $this->getSnippetByHash($hash));
        } else {
            abort(404);
        }
    }    
}
