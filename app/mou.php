<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mou extends Model
{
    protected $table = 'mous';
    protected $fillable = ['jenismou','moulvelel','pjk','nopjk','pji','nopji','pejabatpenandatangan','mulai','berakhir','manfaat','kerjasama'];
    public $timestamps = true;

}
