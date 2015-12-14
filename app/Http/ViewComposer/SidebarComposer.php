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

    public function getSideBarMenu($id)
    {
        return array();

//        $menu = MenuWithAuthentication::instance(1)->getMenu();
//        return array();
    }

}