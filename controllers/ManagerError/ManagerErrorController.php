<?php 

namespace Controllers\ManagerError;

use App\Core\Controller;
class ManagerErrorController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function run(){
        $response['status'] = '404';
        $response['message'] = 'Resource not found';

        echo json_encode($response);
    }
}