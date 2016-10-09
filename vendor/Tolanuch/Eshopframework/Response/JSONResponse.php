<?php

namespace Eshopframework\Response;


class JSONResponse extends Response
{
    public $content_type = 'application/json';

    public function setContent($value)
    {
        $this->content=json_encode($value);
    }
}