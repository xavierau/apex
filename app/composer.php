<?php

// Backend View Composer
View::composer('front.partials.blocks.MainMenu','Acme\Composers\front\MainMenuComposer');
View::composer('front.partials.blocks.sidebar-intro','Acme\Composers\front\AboutComposer');
View::composer('front.pages.immigration','Acme\Composers\front\ImmigrationComposer');
View::composer('front.pages.about','Acme\Composers\front\AboutComposer');
View::composer('front.pages.index-temp','Acme\Composers\front\IndexComposer');
View::composer('front.pages.index','Acme\Composers\front\IndexComposer');
View::composer('front.pages.index','Acme\Composers\front\IndexComposer');

View::composer('system.partials.blocks.top-navbar','Acme\Composers\system\SystemNavigationComposer');
