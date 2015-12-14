<?php

namespace MenuWithAuthentication\Http\ViewComposer;

use Illuminate\Contracts\View\View;
use MenuWithAuthentication\MenuWithAuthentication;

/**
 * Class SidebarComposer
 */
class SidebarComposer
{

    /**
     * @param View $view
     */
    public function compose(View $view){
        $view->with('menu', array());
    }

    public function getSideBarMenu()
    {
        $menu = MenuWithAuthentication::instance()->getMenu();
        return array();
    }

}