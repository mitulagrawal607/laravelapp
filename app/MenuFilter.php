<?php

namespace App;

use JeroenNoten\LaravelAdminLte\Menu\Builder;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Auth;

/**
 * MenuFilter used the FilterInterface from the AdminLTE to implement
 * custom check based on the role of the user.
 *
 */
class MenuFilter implements FilterInterface
{ 
	/**
     * custom menufilter to display item based on role specified.
     *
     * @param  $item
     * @return $item
     */
    public function transform($item, Builder $builder)
    {
        if (isset($item['role']) && Auth::check() && !Auth::user()->hasRole($item['role'])) {
            return false;
        }

        return $item;
    }
}
