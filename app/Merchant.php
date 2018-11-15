<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    //

    protected $table ='drp_ayar';
    protected $fillable = ['ayar_logo','ayar_siteurl'];
}
