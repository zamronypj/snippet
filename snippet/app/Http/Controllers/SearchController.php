<?php
namespace App\Http\Controllers;

use App\Models\Snippet;
use App\Http\Requests\SearchRequest;


/**
 * Controller utk search
 *
 * @author Zamrony P. Juhara
 */
class SearchController extends Controller
{
    /**
     * change keywords such as 'test, done, php pascal'
     * into array ['test', 'done', 'php','pascal']
     * @param type $keywords
     */
    private function keywordStringToArray($keywords) {
        $arr_keywords = explode(',', $keywords);
        
        return $arr_keywords;
    }
    
    private function searchSnippet($keywords) {
        $arr_keywords = $this->keywordStringToArray($keywords);
        $snippets = Snippet::select('snippets.*', 'users.name AS username')
                 ->leftJoin('user_snippets','snippets.id','=','user_snippets.snippet_id')
                 ->leftJoin('users','users.id','=','user_snippets.user_id')
                 ->where('exposure','public');
        foreach($arr_keywords as $akeyword) {
            $snippets->where('title','LIKE','%'.$akeyword.'%');
        }
        
        return $snippets->get();                
    }
    
    public function search(SearchRequest $request) {
        $snippets =  $this->searchSnippet($request->get('keywords'));   
        return view('search_snippet')
                ->with('snippets', $snippets);
         
    }
}