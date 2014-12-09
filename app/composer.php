<?php

// Backend View Composer
View::composer('front.partials.blocks.MainMenu','Acme\Composers\front\MainMenuComposer');


View::composer('hello', 'Acme\Composers\HelloComposer');
View::composer('front.partials.blocks.MainMenu','Acme\Composers\front\MainMenuComposer');
View::composer('front.pages.immigration','Acme\Composers\front\ImmigrationComposer');
