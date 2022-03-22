<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Email extends CI_Controller
{

    public function index()
    {
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'mail.imrostom.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'no-relpy@mobiloittefoundation.org';
        $config['smtp_pass'] = 'M12biloittr';

        // Load email library and passing configured values to email library
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        // Sender email address
        $this->email->from('la-javed@mobiloitte.com', 'ss');
        // Receiver email address
        $this->email->to('la-javed@mobiloitte.com');
        // Subject of email
        $this->email->subject('subject');
        // Message in email
        $this->email->message('Message Send Here');
        $this->email->send();
        $this->email->print_debugger(array('headers'));
    }

}
