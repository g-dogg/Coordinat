<?php
//namespace core\curl;
/**
 * Description of curlCore
 *
 * @author Ilyash
 */
class curlClass
{
    
    protected $options=[];
    public $ch;
    protected $address;
    protected $geoURL = "https://geocode-maps.yandex.ru/1.x/?format=json&geocode="; 
    public $content ="";
    public  $options = array( 
            /*CURLOPT_RETURNTRANSFER => true,         // return web page 
            CURLOPT_HEADER         => false,        // don't return headers 
            CURLOPT_FOLLOWLOCATION => true,         // follow redirects 
            CURLOPT_ENCODING       => "",           // handle all encodings 
            CURLOPT_USERAGENT      => "spider",     // who am i 
            CURLOPT_AUTOREFERER    => true,         // set referer on redirect 
            CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect 
            CURLOPT_TIMEOUT        => 120,          // timeout on response 
            CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects 
            CURLOPT_POST           => 1,            // i am sending post data 
            CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars 
            CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl 
            CURLOPT_SSL_VERIFYPEER => false,        // 
            CURLOPT_VERBOSE        => 1,*/
            CURLOPT_PROXY          =>"192.168.20.22:3128",
            ); 
    
    
    public function __construct($addr) 
    {
      $this->address = $addr;
    }
   
    public function setFullUrl()
    {
      $this->fullUrl = $this->geoURL . $this->address;
    }
    
    public function getFullUrl()
    {
      return $this->fullUrl;
    }


   
    
    public function getInfo()
    {
        $ch      = curl_init($this->setFullUrl()); 
        curl_setopt_array($this->ch, $this->options); 
        $content = curl_exec($this->ch); 
        /*$err     = curl_errno($ch); 
        $errmsg  = curl_error($ch) ; 
        $header  = curl_getinfo($ch); */
        curl_close($this->ch); 

  //  $header['errno']   = $err; 
  //  $header['errmsg']  = $errmsg; 
  //  $header['content'] = $content; 
    return $this->content; 
    }
    
}