<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Vaccin extends Model
{
    //
    protected $table = 'vaccins';
    protected $primaryKey = 'id_vaccin';
    public $timestamps = true;
    protected $fillable = [
        'label_vaccin',
        'description_vaccin'
    ];
    public function blocs()
    {
        return $this->hasMany(Bloc::class, 'vaccin_id', 'id_vaccin');
    }
}
