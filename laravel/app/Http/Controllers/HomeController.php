<?php

namespace App\Http\Controllers;

use App\Models\Snippet;
use App\Models\UserSnippet;
use App\Models\Syntax;
use App\Models\User;
use App\Http\Requests\SubmitSnippetRequest;
use Auth;
use DB;

/**
 * Controller for main page
 *
 * @author Zamrony P. Juhara
 */
class HomeController extends Controller
{
    public function index() {
        $latest_snippets = Snippet::where('exposure','public')
                                 ->orderBy('created_at', 'DESC')
                                 ->take(10)
                                 ->get();
        return view('home')
                ->with('syntaxes', Syntax::all())
                ->with('snippets', $latest_snippets);
    }
    
    public function addSnippet() {
        return view('add_snippet')
                ->with('syntaxes', Syntax::all());
    }
    
    private function saveSnippetToDb(SubmitSnippetRequest $request) {
        $snippet = new Snippet();
        $snippet->title = $request->get('snippet_title','untitled');
        $snippet->code = $request->get('snippet');
        $snippet->hash = $snippet->generateRandomString(6);
        $snippet->syntax_id = $request->get('syntax', 1);
        $snippet->save();
        return $snippet;
    }
    
    private function saveUserSnippetToDb(User $user, Snippet $snippet) {
        $usrsnippet = new UserSnippet();
        $usrsnippet->user_id = $user->id;
        $usrsnippet->snippet_id = $snippet->id;
        $usrsnippet->save();
        return $usrsnippet;
    }
    
    private function saveSnippetAuth(SubmitSnippetRequest $request, User $user) {
        return DB::transaction(function() use($request, $user) {
              $snippet = $this->saveSnippetToDb($request);
              $this->saveUserSnippetToDb($user, $snippet);
              return $snippet;                      
        });
    }
    
    private function saveSnippetNotAuth(SubmitSnippetRequest $request) {
        return $this->saveSnippetToDb($request);
    }
    
    public function saveSnippet(SubmitSnippetRequest $request) {
        if (Auth::check()) {
           $snippet = $this->saveSnippetAuth($request,Auth::user());            
        } else {
           $snippet = $this->saveSnippetNotAuth($request);
        }
        return view('snippet_created')
                ->with('snippet', $snippet);
    }
}
