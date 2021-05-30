<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        return $user->checkPermissionAccess('product_list');
    }

   
    public function create(User $user)
    {
        return $user->checkPermissionAccess('product_add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->checkPermissionAccess('product_edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function delete(Customer $customer, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function restore(Customer $customer, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Customer  $customer
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function forceDelete(Customer $customer, Product $product)
    {
        ///
    }
}
