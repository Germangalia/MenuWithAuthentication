<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


class MenuWithAuthentication
{


    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct()
    {
    }


    public function menu()
    {

        $menu = new MenuItem();
        return $menu;

    }
}