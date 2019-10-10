<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    public function assignRole(...$roles)
    {
        $roles = $this->getAllRoles(Arr::flatten($roles));

        if($roles == null) {
            return $this;
        }

        $this->roles()->saveMany($roles);

        return $this;

    }

    public function removeRole(... $roles)
    {
        $roles = $this->getAllRoles($roles);

        $this->roles()->detach($roles);

        return $this;
    }

    public function syncRoles(...$roles)
    {
        $this->roles()->detach();

        return $this->assignRole($roles);
    }

    protected function getAllRoles(array $roles)
    {
        return Role::whereIn('name', $roles)->get();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permission');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_permission');
    }

}
