<?php 
namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class Home extends Controller{
    
    public function index(){
        
        $model = new MemberModel();

        $data['member'] = $model->getMember();
 
        echo view('common/header');
        echo view('home/index',$data);
        echo view('common/footer');
    }
}