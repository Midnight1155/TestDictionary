<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    //
    protected $table = 'dictionary_data';
    //protected $primaryKey = 'id';
    protected $fillable = ['name'];
}
