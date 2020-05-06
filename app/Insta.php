<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use InstagramScraper\Instagram;
use InstagramScraper\Model\Media;
use Phpfastcache\Config\ConfigurationOption;
use Phpfastcache\Helper\Psr16Adapter;
use PHPUnit\Framework\TestCase;
class Insta extends Model
{
    //
    private static $instagram;

    public static function setUpBeforeClass()
    {
        $sessionFolder = __DIR__ . DIRECTORY_SEPARATOR . 'sessions' . DIRECTORY_SEPARATOR;
        $defaultDriver = 'Files';
        $options = new ConfigurationOption([
            'path' => $sessionFolder
        ]);
        $instanceCache = new Psr16Adapter($defaultDriver, $options);

        self::$instagram = Instagram::withCredentials($_ENV['LOGIN'], $_ENV['PASSWORD'], $instanceCache);

        if (isset($_ENV['USER_AGENT'])) {
            self::$instagram->setUserAgent($_ENV['USER_AGENT']);
        }
        self::$instagram->login();

    }

}
