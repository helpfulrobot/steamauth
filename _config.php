<?php
use SilverStripe\Security\Member;
use Zanderwar\SteamAuth\Extensions\MemberExtension;
use Zanderwar\SteamAuth\Extensions\PageControllerExtension;

Member::add_extension(MemberExtension::class);
PageController::add_extension(PageControllerExtension::class);