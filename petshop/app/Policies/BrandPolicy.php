<?php

namespace App\Policies;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Customer  $customer
     * @return mixed
     */
 

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Brand  $brand
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->checkPermissionAccess('brand_list');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Customer  $customer
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->checkPermissionAccess('brand_add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Brand  $brand
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('brand_edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Brand  $brand
     * @return mixed
     */
    public function delete(Customer $customer, Brand $brand)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Brand  $brand
     * @return mixed
     */
    public function restore(Customer $customer, Brand $brand)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Brand  $brand
     * @return mixed
     */
    public function forceDelete(Customer $customer, Brand $brand)
    {
        //
    }
}
