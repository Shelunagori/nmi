<?php
require 'Mandrill.php';

$mandrill = new Mandrill('fEa-Q9Q1NHhKE-BsvG8LpA'); 


$message = array(
    'subject' => 'Test message',
    'from_email' => 'ashishbohara1008@gmail.com',
    'html' => '<img src="http://glorysunshinetrading.com/mailchimp_mandrill/src/Jeans.jpg"><p>this is a test message with Mandrill\'s PHP wrapper!.</p>',
    'to' => array(array('email' => 'ashishbohara1008@gmail.com', 'name' => 'Recipient 1')),
    );

$template_name = 'Image';
$publish = true;
$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi FIRSTNAME LASTNAME , thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2012.')

);
$mandrill->templates->add($template_name);
$mandrill->templates->publish($template_name);
$mandrill->messages->sendTemplate($template_name, $template_content, $message);

/*

'merge_vars' => array(array(
        'rcpt' => 'ashishbohara1008@gmail.comm',
        'vars' =>
        array(
            array(
                'name' => 'FIRSTNAME',
                'content' => 'Recipient 1 first name'),
            array(
                'name' => 'LASTNAME',
                'content' => 'Last name')
    )))
	*/?>