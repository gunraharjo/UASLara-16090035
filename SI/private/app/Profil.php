<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{
    //
    use SoftDeletes;    
    protected $table = 'profil';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'kepala',
        'sejarah'
        

    ];

}
