<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Snippet;
use Auth;

/**
 * Controller untuk menampilkan detil snippet
 *
 * @author Zamrony P. Juhara
 */
class MySnippetController extends Controller
{
    /**
     * Create a new my snippet controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    private function getSnippetListByUser(User $user) {
        return Snippet::join('user_snippets', 'snippets.id', '=', 'user_snippets.snippet_id')
                       ->where('user_snippets.user_id', $user->id)->get();        
    }
    
    public function index() {
        $mysnippets = $this->getSnippetListByUser(Auth::user());
        return view('list_snippet')
                ->with('snippets', $mysnippets);
    }    
}
