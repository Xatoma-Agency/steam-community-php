<?php

namespace Xatoma\SteamCommunity\Auth\Confirmations;


class Confirmation
{
    private $confirmationId;
    private $confirmationKey;
    private $confirmationDescription;
    private $confirmationOfferId;

    public function __construct($confirmationId, $confirmationKey, $confirmationOfferId, $confirmationDescription)
    {
        $this->confirmationId = $confirmationId;
        $this->confirmationKey = $confirmationKey;
        $this->confirmationOfferId = $confirmationOfferId;
        $this->confirmationDescription = $confirmationDescription;
    }

    /**
     * @return string
     */
    public function getConfirmationId()
    {
        return $this->confirmationId;
    }

    /**
     * @return string
     */
    public function getConfirmationKey()
    {
        return $this->confirmationKey;
    }

    /**
     * @return string
     */
    public function getConfirmationOfferId()
    {
        return $this->confirmationOfferId;
    }

    /**
     * @return string
     */
    public function getConfirmationDescription()
    {
        return $this->confirmationDescription;
    }
}
