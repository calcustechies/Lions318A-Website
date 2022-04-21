
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CTLib {

    var $api_key;

    // validate
    public  function __construct() 
	{

        // set API key which can be accessed throughout class
        $this->auth_key = "Ck4ZofJ10Ee";
        $this->client_service = "frontend-client";
        /*$this->Company_ID = "110";*/
        $this->Content_Type = "application/x-www-form-urlencoded";

        $this->CI = & get_instance();


    }

    // fetch request
     public function url($url) {

        $checkSession = $this->CI->session->userdata('token');

        if($checkSession != NULL)
        $this->tokenID = $checkSession;
        else
        $this->tokenID = 100;

        // url encode all variables if variables found
    if (strpos($url,'?') !== false) {
        $base_url = substr( $url, 0, strpos( $url, '?' ) + 1 );
        $parts = parse_url($url);
        parse_str($parts['query'], $parameters);
        foreach($parameters as $name => $value) {
            $base_url .= "&" . $name . "=".urlencode($value);
        }
        $url = $base_url;
        $options = array(
            CURLOPT_HTTPHEADER => array('auth-key: ' . $this->auth_key,'client-service: frontend-client','Content-Type: application/x-www-form-urlencoded','Authorization: '.$this->tokenID),  // send API key in header
            CURLOPT_RETURNTRANSFER => true,                             // return web page
            CURLOPT_HEADER         => false,                            // don't return headers
            CURLOPT_FOLLOWLOCATION => true,                             // follow redirects
            CURLOPT_ENCODING       => "",                               // handle all encodings
            CURLOPT_USERAGENT      => "user",                           // who am i
            CURLOPT_AUTOREFERER    => true,                             // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,                              // timeout on connect
            CURLOPT_TIMEOUT        => 120,                              // timeout on response
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_MAXREDIRS      => 10,                               // stop after 10 redirects
            CURLOPT_SSL_VERIFYPEER => false                             // Disabled SSL Cert checks (if enabled, ensure path for CURLOPT_CAINFO is correct)
            //CURLOPT_CAINFO           => "breeze/cacert.pem",          // security certificate
            //CURLOPT_SSLVERSION        => 3                                // set correct SSL version
        );
    }else{
        $options = array(
            CURLOPT_HTTPHEADER => array('auth-key: ' . $this->auth_key,'client-service: frontend-client','Content-Type: application/x-www-form-urlencoded','Authorization: '.$this->tokenID),  // send API key in header
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        );
    }

        // get page data
        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $content = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );

        // set to variables
        $header['errno']   = $err;
        $header['errmsg']  = $errmsg;

        $header['content'] = $content;

        if(empty($header['content']) || $header['content'] == false) {
            return $header['errmsg'];
        }

        // return content
        return $header['content'];

     }


}

?>