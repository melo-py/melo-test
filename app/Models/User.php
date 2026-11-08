<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    public $timestamps = true;

    protected $fillable = [
        'nom_user',
        'prenom_user',
        'phone_user',
        'email_user',
        'login_user',
        'password_user',
        'status_user'
    ];

    public function produits()
    {
        return $this->hasMany(Produit::class, 'user_id', 'id_user');
    }
}
