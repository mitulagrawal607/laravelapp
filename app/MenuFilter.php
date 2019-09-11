<?php

namespace App;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Auth;


class MenuFilter implements FilterInterface
{ 
	
    public function transform($item, Builder $builder)
    {
        if (isset($item['role']) && Auth::check() && !Auth::user()->hasRole($item['role'])) {
            return false;
        }

        return $item;
    }
}
