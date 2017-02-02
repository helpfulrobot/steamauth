<?php
namespace Zanderwar\SteamAuth\Controllers;

use SilverStripe\Security\Member;
use Zanderwar\SteamAuth\SteamAuth;

class SteamAuthPage extends \Page
{

}

class SteamAuthPageController extends \PageController
{
    private static $allowed_actions = [
        'validate',
        'logout'
    ];

    public function validate()
    {
        //echo SteamAuth::getLoginUrl('http://dev.scraplands.net/steamauth/validate');die();
        if (!$steamId = SteamAuth::validate()) {
            die('FAILED');
        }

        /** @var Member $member */
        $member = Member::get()->filter(
            [
                'SteamID' => $steamId
            ]
        )->first();

        if ($member) {
            $member->logIn();
            $this->redirectBack();
        }
        else {
            die("You must have played on the server before");
        }
    }

    public function logOut() {
        Member::singleton()->logOut();
        $this->redirectBack();
    }
}