# zanderwar/steamauth

Steam Authenticator for SilverStripe 4

#Installation

Installation is supported by composer only

```
composer require zander/steamauth ^1.0@dev
```

Add these lines to your **/mysite/_config.php**
```
// after your namespace
use SilverStripe\Security\Member;
use Zanderwar\SteamAuth\Extensions\MemberExtension;
use Zanderwar\SteamAuth\Extensions\PageControllerExtension;
/////

Member::add_extension(MemberExtension::class);
PageController::add_extension(PageControllerExtension::class);
```

