<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Permissions extends Model
{
    protected $table = 'permissions';
    protected $primaryKey = 'id_permission';
    public $timestamps = true;
    protected $fillable = [
        'label_permission',
        'description_permission'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permission', 'permission_id');
    }
}
