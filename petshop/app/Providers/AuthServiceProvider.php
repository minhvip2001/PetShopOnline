<?php

namespace App\Providers;
use App\Models\User;
use App\Policies\UserPolicy;
use App\Models\Role;
use App\Policies\RolePolicy;
use App\Models\Category;
use App\Policies\CategoryPolicy;
use App\Models\Product;
use App\Policies\ProductPolicy;
use App\Models\Brand;
use App\Policies\BrandPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // User
        $this->defineGateUser();
        // Role
        $this->defineGateRole();
        // Category
        $this->defineGateCategory();
        // Brand
        $this->defineGateBrand();
        // Product
        $this->defineGateProduct();
    }
    public function defineGateCategory(){
        Gate::define('category-list', [CategoryPolicy::class, 'view']);
        Gate::define('category-add', [CategoryPolicy::class, 'create']);
        Gate::define('category-edit', [CategoryPolicy::class, 'update']);
        Gate::define('category-delete', [CategoryPolicy::class, 'delete']);
    }
    public function defineGateProduct(){
        Gate::define('product-list', [ProductPolicy::class, 'view']);
        Gate::define('product-add', [ProductPolicy::class, 'create']);
        Gate::define('product-edit', [ProductPolicy::class, 'update']);
        Gate::define('product-delete', [ProductPolicy::class, 'delete']);
    }
    public function defineGateBrand(){
        Gate::define('brand-list', [BrandPolicy::class, 'view']);
        Gate::define('brand-add', [BrandPolicy::class, 'create']);
        Gate::define('brand-edit', [BrandPolicy::class, 'update']);
        Gate::define('brand-delete', [BrandPolicy::class, 'delete']);
    }
    public function defineGateUser(){
        Gate::define('user-list', [UserPolicy::class, 'view']);
        Gate::define('user-add', [UserPolicy::class, 'create']);
        Gate::define('user-edit', [UserPolicy::class, 'update']);
        Gate::define('user-delete', [UserPolicy::class, 'delete']);
    }
    public function defineGateRole(){
        Gate::define('role-list', [RolePolicy::class, 'view']);
        Gate::define('role-add', [RolePolicy::class, 'create']);
        Gate::define('role-edit', [RolePolicy::class, 'update']);
        Gate::define('role-delete', [RolePolicy::class, 'delete']);
    }
}
