<?php

namespace Vendic\DisableNewsletterMails\Plugin;

class WelcomeEmail
{
    public function aroundNewAccount(\Magento\Customer\Model\EmailNotification $subject, \Closure $proceed)
    {
        return $subject;
    }
}