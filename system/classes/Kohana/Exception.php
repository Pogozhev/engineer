<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Exception extends Kohana_Kohana_Exception {

    public static function handler(Exception $e)
    {
        if(Kohana::$environment == Kohana::PRODUCTION)
        {
            $response = Kohana_Exception::_handler($e);

            // Send the response to the browser
            echo $response->send_headers()->body();

            exit(1);
        }
        else
        {
            HTTP::redirect('');
        }
    }
}