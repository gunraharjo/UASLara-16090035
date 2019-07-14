<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisiMisi extends Model

{
    //
    use SoftDeletes;    
    protected $table = 'visimisi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'visi',
        'misi'
        

    ];
}
