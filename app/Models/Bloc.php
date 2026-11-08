<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{
    //

    public function produits()
    {
        return $this->hasMany(Produit::class, 'bloc_id', 'id_bloc');
    }
}
