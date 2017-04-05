<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syntax extends Model
{
    protected $table = "syntaxes";
    public $timestamps = false;
    
    public function snippets() {
        return $this->hasMany("App\Models\Snippet");
    }
    
}
