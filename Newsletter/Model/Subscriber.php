<?php

namespace Vendic\DisableNewsletterMails\Newsletter\Model;

use Magento\Newsletter\Model\Subscriber as MageSubscriber;

class Subscriber
{
    /**
     * @param MageSubscriber $oSubject
     * @param callable $proceed
     */
    public function aroundSendConfirmationRequestEmail(MageSubscriber $oSubject, callable $proceed)
    {
    }

    /**
     * @param MageSubscriber $oSubject
     * @param callable $proceed
     */
    public function aroundSendConfirmationSuccessEmail(MageSubscriber $oSubject, callable $proceed)
    {
    }

    /**
     * @param MageSubscriber $oSubject
     * @param callable $proceed
     */
    public function aroundSendUnsubscriptionEmail(MageSubscriber $oSubject, callable $proceed)
    {
    }

}