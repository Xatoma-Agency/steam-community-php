<?php

namespace Xatoma\SteamCommunity\TradeOffers\TradeOffer;


abstract class State
{
    const Invalid = 1;
    const Active = 2;
    const Accepted = 3;
    const Countered = 4;
    const Expired = 5;
    const Canceled = 6;
    const Declined = 7;
    const InvalidItems = 8;
    const NeedsConfirmation = 9;
    const CanceledBySecondFactor = 10;
    const InEscrow = 11;
}
