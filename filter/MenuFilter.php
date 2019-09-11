<?php

namespace Filter;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use App\User;


class MenuFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        if (isset($item['role']) && !User::hasRole($item['role'])) {
            return false;
        }

        return $item;
    }
}
