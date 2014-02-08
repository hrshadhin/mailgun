
<?php

# Include the Autoloader (see "Libraries" for install instructions)
#https://github.com/mailgun/mailgun-php.git

require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('api_key');
$domain = "sandboxxxx.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandboxxxx.mailgun.org>',
                        'to'      => 'HR Shadhin <hrs@gmail.com>',
                        'subject' => 'Hello HR Shadhin',
                        'text'    => 'Test mail.'));

var_dump( $result);
?>
