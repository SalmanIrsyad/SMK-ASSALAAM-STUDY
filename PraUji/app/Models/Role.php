<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Role extends Model
// {
//     use HasFactory;
// }

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}

class UserRole extends Model
{
    protected $table = 'role_user';
}

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(403, 'Unauthorized action.');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}
