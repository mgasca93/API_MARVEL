<?php

namespace App\Config;

class Config{

    public $pub_key;
    public $pri_key;
    public $url;


    public function __construct(){
        $this->pub_key = 'kjbakjbcsdkjdnkdhjsbfasdklhjas';
        $this->pri_key = 'sahhsahbdajbfyrwbksjfd';
        $this->url = 'https://marvel.api.com?';
    }

    public function getURL(){
        return $this->url . $this->pri_key . $this->pub_key;
    }

}