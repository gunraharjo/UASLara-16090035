<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Sejarah extends Model
{
    //
    use SoftDeletes;    
    protected $table = 'sejarah';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'sejarah'
        

    ];
}
