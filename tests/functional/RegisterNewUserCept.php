<?php
    $I = new FunctionalTester($scenario);
    $I->am('a guest');
    $I->wantTo('register a new account');

    $I->amOnPage('/');
    $I->see('Register');
    $I->click('Register');



