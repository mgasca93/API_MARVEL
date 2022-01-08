<?php 

namespace Controllers\ManagerError;

use App\Core\BaseController;
class ManagerErrorController extends BaseController{

    public function __construct(){
        parent::__construct();
    }

    public function run(){
        $response['status'] = '404';
        $response['message'] = 'Resource not found';

        echo json_encode($response);
    }
}