<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_instansi extends Model
{
    protected $table = 'jenis_instansis';
    protected $fillable = ['name','status'];
    public $timestamps = true;

    public function master()
    {
        return $this->hasMany('App\instansi','instansi_id');
    }
}
