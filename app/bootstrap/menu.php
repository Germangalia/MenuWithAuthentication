<?php

//Que tenen els menús?

//Name/tittle
//on apunta/url
//te icona?
//té submenus?


//Home
MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icona('fa-dashboard')
    ->role('home')
    ->permission('home')
    ->user('sergitur')
    ->url('/home');



//Another link
MenuWithAuthentication::menu('anolink')
    ->title('Another link')
    ->user(5);




//Multilevel
MenuWithAuthentication::menu('multi')->title('Multilevel')->icona('fa-credit-card');
    MenuWithAuthentication::menu('link2')->title('Link in level 2')->icona('fa-briefcase');
    MenuWithAuthentication::menu('link3')->title('Link in level 2')->icona('fa-user');


//Propi
MenuWithAuthentication::menu('link4')->title('Últim menú')->icona('fa-dashboard')->url('http://www.google.com');


//Afegir un menú a partir de la seva id, que en aquest cas es 'home'.
$menuHome = MenuWithAuthentication::menu('home');