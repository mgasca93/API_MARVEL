<?php

namespace Config;

class Config{

    private $key;
    private $hash;
    private $url;
    private $character;
    private $segment;
    private $baseURL;

    public function __construct(){
        $this->character = 'ts=1';
        
        $this->url = 'https://gateway.marvel.com:443/v1/public/';
        $this->baseURL = 'http://api.test/';
    }

    public function getBaseURL(){
        return $this->baseURL;
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