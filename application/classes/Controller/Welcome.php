<?php defined('SYSPATH') or die('No direct script access.');
require_once Kohana::find_file('vendor', 'mailer/lib/swift_required');
require_once Kohana::find_file('vendor', 'mailer/lib/swift_init');

class Controller_Welcome extends Controller
{


    public function action_index()
    {
        $this->response->body(View::factory('home/index'));
    }

    public function action_send_email()
    {
        try {
            $config = Kohana::$config->load('email')->get('options');
            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername($config['username'])
                ->setPassword($config['password']);

            $mailer = Swift_Mailer::newInstance($transport);

            // Create the message
            $message = Swift_Message::newInstance()

                // Give the message a subject
                ->setSubject($this->request->query('subject'))

                // Set the From address with an associative array
                ->setFrom(array($config['username'] => 'Smart Soft Studios'))

                // Set the To addresses with an associative array
                ->setTo("hr@smartsoftstudios.com")

                // Give it a body
                ->setBody($this->request->query("name") . " : " . $this->request->query("email") . " : " . $this->request->query('message'));

            $result = $mailer->send($message);
            return true;

        } catch (Exception $e) {
            return false;
        }
    }

    public function action_send_notification()
    {
        try {
            $config = Kohana::$config->load('email')->get('options');
            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername($config['username'])
                ->setPassword($config['password']);

            $mailer = Swift_Mailer::newInstance($transport);

            // Create the message
            $message = Swift_Message::newInstance()

                // Give the message a subject
                ->setSubject('Query Received')

                // Set the From address with an associative array
                ->setFrom(array($config['username'] => 'Smart Soft Studios'))

                // Set the To addresses with an associative array
                ->setTo($this->request->query('email'))

                // Give it a body
                ->setBody($this->request->query("message"));

            $result = $mailer->send($message);
            return true;

        } catch (Exception $e) {
            return false;
        }
    }


} // End Welcome
