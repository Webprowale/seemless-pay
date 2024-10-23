<?php

namespace App\Services;

use CodeIgniter\Email\Email;

class EmailService
{
    protected $email;

    public function __construct()
    {
        
        $this->email = \Config\Services::email();
    }

    public function sendEmail($to, $subject, $message)
    {
        
        $this->email->setFrom('seemlesspay1@gmail.com', 'SeemLess Pay');
        $this->email->setTo($to);
        $this->email->setSubject($subject);
        $this->email->setMessage($message);
        if ($this->email->send()) {
            return true; 
        } 
            log_message('error', $this->email->printDebugger(['headers']));
            return false; 
    
    }
}
