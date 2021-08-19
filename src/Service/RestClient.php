<?php

namespace Apothan\OpenTourLibBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;

class RestClient
{

    const COOKIE_JAR = '/tmp/rest-client-cookie';
    const AGENT = 'rest-client-php/0.0.2';

    public $response_info;
    public $response_object;
    public $response_raw;
    public $http_options = array();
    public $user;
    public $secret;

    function __construct()
    {

        $nonce = uniqid('nonce_', true);
        $created = date(DATE_ATOM, time());
        //$digest = base64_encode(sha1($nonce . $created . $secret, true));

        $this->http_options = array(
            'cookiestore' => self::COOKIE_JAR,
            'useragent' => self::AGENT,
            'redirect' => 5,
        );

    }

    public function setUser($user, $secret)
    {
        $this->user = $user;
        $this->secret = $secret;

        return true;
    }

    function addHeader($name, $value)
    {

        $this->http_options[] = $name . ': ' . $value;

        //var_dump($this->http_options);
    }

    function get($url)
    {
        $fields['username'] = $this->user;
        $fields['token'] = $this->secret;
        $fields = json_encode($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->http_options);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);

        //execute post
        //execute post
        $response = curl_exec($ch);

        $headers = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        //var_dump($headers);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        //close connection
        curl_close($ch);

        return $body;
    }

    function post($url, $fields)
    {
        $fields = json_decode ($fields, true);
        $fields['username'] = $this->user;
        $fields['token'] = $this->secret;
        $fields = json_encode($fields);

        //var_dump($url);
        //var_dump($fields);die();

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        //Jac travel 10 optimal payments 20 might need to make this an option
        curl_setopt($ch, CURLOPT_TIMEOUT, 40);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->http_options);

        //execute post
        $response = curl_exec($ch);
        //dump($response); die();
        $headers = curl_getinfo($ch, CURLINFO_HEADER_OUT);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        //close connection
//dump($body);die();
        curl_close($ch);



        return $body;
    }

}