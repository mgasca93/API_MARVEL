<?php

namespace App\Config;

class Config{

    private $key;
    private $hash;
    private $url;
    private $character;
    private $segment;

    public function __construct(){
        $this->character = 'ts=1';
        $this->hash = '&hash=a6896840e8d64df055035f4e46534f01';
        $this->key = '&apikey=245501876b8883f3a32db83d042687d0';
        $this->url = 'https://gateway.marvel.com:443/v1/public/';
    }

    public function getKey(){
        return $this->key;
    }

    public function getCharacter(){
        return $this->character;
    }

    public function getHash(){
        return $this->hash;
    }

    public function getURL(){
        return $this->url;
    }

    public function getSegment(){
        return $this->segment;
    }

    public function setSegment(string $segment){
        $this->segment = $segment;
    }

    public function getEndPoint(){
        return $this->getURL() .  $this->getSegment() . $this->getCharacter() . $this->getKey() . $this->getHash();
    }
}