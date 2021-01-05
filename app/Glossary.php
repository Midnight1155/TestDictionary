<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    protected $table = 'glossary';
    protected $fillable = [
        'Kadazan', 'Pronunciation'
    ];
}
