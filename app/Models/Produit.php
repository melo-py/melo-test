<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    protected $table = 'produits';
    protected $primaryKey = 'id_produit';
    public $timestamps = true;
    
    protected $fillable = [
        'label_produit',
        'description_produit',
        'type_produit',
        'quantite_produit',
        'prix_produit',
        'user_id',
        'bloc_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }

    public function bloc()
    {
        return $this->belongsTo(Bloc::class, 'bloc_id', 'id_bloc');
    }
}

