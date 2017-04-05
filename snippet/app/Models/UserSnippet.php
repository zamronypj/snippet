<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSnippet extends Model
{
    protected $table="user_snippets";
    public $timestamps = false;
    
    public function user() {
        return $this->belongTo("App\Models\User");
    }
    
    public function snippet() {
        return $this->hasOne("App\Models\Snippet");
    }
}
