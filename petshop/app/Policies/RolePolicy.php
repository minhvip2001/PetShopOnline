<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        return $user->checkPermissionAccess('role_list');
    }

    public function create(User $user)
    {
        return $user->checkPermissionAccess('role_add');  
    }


    public function update(User $user)
    {
        return $user->checkPermissionAccess('role_edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function delete(Customer $customer, Role $role)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function restore(Customer $customer, Role $role)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function forceDelete(Customer $customer, Role $role)
    {
        //
    }
}
