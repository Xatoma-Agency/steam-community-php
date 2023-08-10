<?php

namespace Xatoma\SteamCommunity\Auth;

use Xatoma\SteamCommunity\SteamCommunity;
use Xatoma\SteamCommunity\Helper;

class TimeAligner
{
    public static function GetSteamTime()
    {
        return self::FetchSteamTime();
    }

    public static function GetTimeDifference()
    {
        return self::FetchSteamTime() - time();
    }

    public static function FetchSteamTime($localTime = false)
    {
        if ($localTime) {
            return time() + 10;
        }

        $response = SteamCommunity::getInstance()->getClassFromCache('Network')->cURL('https://api.steampowered.com/ITwoFactorService/QueryTime/v1', null, ['steamid' => 0]);
        $json = json_decode($response, true);
        if (isset($json['response']) && isset($json['response']['server_time'])) {
            return (int)$json['response']['server_time'];
        }

        return 0;
    }
}
