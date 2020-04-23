<?php

namespace MailPoetVendor\Egulias\EmailValidator\Warning;

if (!defined('ABSPATH')) exit;


class NoDNSMXRecord extends \MailPoetVendor\Egulias\EmailValidator\Warning\Warning
{
    const CODE = 6;
    public function __construct()
    {
        $this->message = 'No MX DSN record was found for this email';
        $this->rfcNumber = 5321;
    }
}
