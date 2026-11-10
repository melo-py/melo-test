<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Commande extends Model
{
    protected $table = 'commandes';
    protected $primaryKey = 'id_commande';
    public $timestamps = true;

    protected $fillable = [
        'date_commande',
        'user_id',
        'produit_id'
    ];
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id', 'id_user');
    }
}
