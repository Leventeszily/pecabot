<?php

class Restkezelo
{
    private $httpversion = "http/1.1";
    
    public function sethttpfejlec($statuskod)
    {
        $statusuzenet=$this->gethttpstatusuzenet($statuskod);

        header($this->httpversion. " " . $statuskod . " " . $statusuzenet);
        header("content-Type: application/json");
    }

    public function gethttpstatusuzenet($statuskod)
    {
        $httpstatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            404 => 'Not Found',
            500 => 'Internal Server Error',
        );
        return($httpstatus[$statuskod]) ? $httpstatus[$statuskod] : $httpstatus[500];
    }
}

?>