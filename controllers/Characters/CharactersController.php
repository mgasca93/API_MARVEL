<?php

namespace Controllers\Characters;

use App\Core\Controller;

class CharactersController extends Controller{

    public function run(){
        $response['status'] = 200;
        $response['message'] = 'Success';

        $this->render($response);
    }

}