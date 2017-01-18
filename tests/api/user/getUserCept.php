<?php
$I = new ApiTester($scenario);
$I->wantTo('check user endpoint');

$I->sendGET('/users');
$I->seeResponseIsJson();
