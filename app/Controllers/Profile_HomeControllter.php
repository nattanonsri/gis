<?php 
namespace App\Controllers;

use App\Models\Profile_HomeModel;
use CodeIgniter\Controller;

class Profile_HomeControllter extends Controller{
    public function index(){

        $model = new Profile_HomeModel();

        $data['profile'] = $model->getProfile_Home();

        // var_dump($data);

        echo view('common/header',$data);
        echo view('profile_home/index',$data);
        echo view('common/footer',$data);


    }
}
