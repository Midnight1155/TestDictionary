<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_data extends Model
{
    protected $table = 'dictionary_data';
    protected $fillable = [
        'Kadazan', 'Centre', 'Malay', 'English'
    ];
}
