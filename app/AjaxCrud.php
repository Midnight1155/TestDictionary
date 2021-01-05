<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class AjaxCrud extends Model
{
    protected $table = 'dictionary_data';
    //protected $primaryKey = 'id';
    protected $fillable = ['Kadazan', 'Malay', 'English', 'Centre'];

    //use Searchable;


}
