<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'seemlesspay1@gmail.com';
    public string $userAgent = 'SeemLess Payment';
    public string $protocol = 'mail';
    public string $mailPath = '/usr/sbin/sendmail';
    public string $SMTPHost = 'stmp.gmail.com';
    public string $SMTPUser = 'seemlesspay1@gmail.com';
    public string $SMTPPass = 'hnvxpkdkuwolbhfu';
    public int $SMTPPort = 465;
    public bool $SMTPKeepAlive = false;
    public string $SMTPCrypto = 'tls';
    public bool $wordWrap = true;
    public string $mailType = 'text';
    public string $charset = 'UTF-8';
    public bool $DSN = false;
}
