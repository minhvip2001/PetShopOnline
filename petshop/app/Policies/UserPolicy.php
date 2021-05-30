<?php

namespace App\Policies;


use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    public function view(User $user)
    {
        return $user->checkPermissionAccess('user_list');
        
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Customer  $customer
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('user_add');
        
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('user_edit');
        
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function delete(Customer $customer, User $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function restore(Customer $customer, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\User  $model
     * @return mixed
     */
    public function forceDelete(Customer $customer, User $model)
    {
        //
    }
}
