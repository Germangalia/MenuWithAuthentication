<?php

//Que tenen els menús?

//Name/tittle
//on apunta/url
//te icona?
//té submenus?


//Home
MenuWithAuthentication::menu()
    ->title('Home')
    ->icona('fa-dashboard')
    ->role('home')
    ->permission('home')
    ->user('sergitur')
    ->url('/home');



//Another link
MenuWithAuthentication::menu()
    ->title('Another link')
    ->user(5);




//Multilevel
MenuWithAuthentication::menu()->title('Multilevel')->icona('fa-credit-card');
    MenuWithAuthentication::menu()->title('Link in level 2')->icona('fa-briefcase');
    MenuWithAuthentication::menu()->title('Link in level 2')->icona('fa-user');


//Propi
MenuWithAuthentication::menu()->title('Últim menú')->icona('fa-dashboard')->url('http://www.google.com');