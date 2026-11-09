<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{
    //
    protected $table = 'blocs';
    protected $primaryKey= 'id_bloc';
    public $timestamps = true;

    protected $fillable = [
        'id_bloc',
        'label_bloc'
    ];

    public function produits()
    {
        return $this->hasMany(Produit::class, 'bloc_id', 'id_bloc');
    }
}
