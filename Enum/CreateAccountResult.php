<?php

namespace Xatoma\SteamCommunity\Enum;


abstract class CreateAccountResult
{
    const CreatedOkay = "CreatedOkay";
    const GeneralFailure = "GeneralFailure";
    const NeedCaptcha = "NeedCaptcha";
}
