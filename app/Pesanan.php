<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'id_users',
    ];

    public function users(){
      return $this->belongsTo('App\User', 'id_users', 'id');
    }
}
