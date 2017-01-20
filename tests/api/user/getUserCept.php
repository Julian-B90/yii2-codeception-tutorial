<?php
$I = new ApiTester($scenario);
$I->wantTo('Get all Users');

$I->sendGet('/users');
$I->canSeeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->seeResponseIsJson();
$I->seeResponseContainsJson(['username' => 'test']);
