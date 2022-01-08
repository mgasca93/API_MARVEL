<?php

namespace Controllers\FormaterName;

class FormaterNameController{

    protected $words = [];
    protected $built = null;

    public function words(string $words){
        $this->words = explode('-', $words);
        return $this;
    }

    public function link(string $character){
        foreach($this->words as $word){
            $this->built .= $word . $character;
        }

        $this->built = substr($this->built, 0, -strlen($character));
        return $this;
    }

    public function get(){
        return $this->built;
    }

}