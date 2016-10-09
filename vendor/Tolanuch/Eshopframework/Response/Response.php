<?php

/**
 * The base response class.
 */

namespace Eshopframework\Response;

class Response
{
    protected $headers = [];

    private $content = '';

    private $code;

    public $content_type = 'text/html';

    const STATUS_MSGS = [
        200 => 'Ok',
        404 => 'Not Found',
        301 => 'Moved Permanently'
    ];

    public function __construct($data, $code = 200)
    {
        $this->code = $code;
        $this->setContent($data);
        $this->setHeader('Content-Type', $this->content_type);
    }

    /**
     * Send response
     */
    public function send(){
        $this->sendHeaders();
        $this->sendContent();
    }

    public function sendHeaders(){
        header("HTTP/1.1 ".$this->code." ".self::STATUS_MSGS[$this->code]);
        if(!empty($this->headers)){
            foreach($this->headers as $key=>$value){
                header(sprintf('%s: %s', $key, $value));
            }
        }
    }

    public function setHeader($header, $value){
        $this->headers[$header] = $value;
    }

    /**
     * Function to show the content.
     */
    public function sendContent(){
        echo $this->content;
    }

    public function setContent($data){
        $this->content = $data;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }
}