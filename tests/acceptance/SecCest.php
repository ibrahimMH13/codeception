<?php 

class SecCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        //    $I->fillField('name','ibrahim');
        //    $I->fillField('password','123');
        //   $I->click('submit');

        //here can i fill form with css selector as on way in array attr
        $I->submitForm('#login', [
            'name' => 'ibrahim',
            'password' => '123'
        ]);
        //css selector
        // $I->click('.btn a');
        // $I->seeCurrentUrlEquals('/admin.php');
        $I->seeInCurrentUrl('/admin.php');//get and post
        $I->see('Welcome');
        $I->seeLink('logout');
    }
}
