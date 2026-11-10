<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id_role';
    public $timestamps = true;  
    protected $fillable = [
        'label_role',
        'description_role'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role', 'role_id');
    }
    public function permissions()
    {
        return $this->belongsToMany(Permissions::class, 'role_permission', 'role_id');
    }
}
