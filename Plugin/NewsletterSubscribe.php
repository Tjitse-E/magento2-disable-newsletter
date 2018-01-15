<?php

namespace Vendic\DisableNewsletterMails\Plugin;

use Magento\Newsletter\Model\Subscriber as MageSubscriber;

class NewsletterSubscribe
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
