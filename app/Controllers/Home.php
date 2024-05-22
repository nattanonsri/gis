<?php 
namespace App\Controllers;

use App\Models\Profile_HomeModel;
use CodeIgniter\Controller;

class Home extends Controller{
    
    public function index(){
        
        $model = new Profile_HomeModel();

        // ดึงข้อมูลโปรไฟล์ทั้งหมด
        $data['profile'] = $model->getProfile_Home();
        
        // แปลงข้อมูลเป็น JSON
        $data['profile_json'] = json_encode($data['profile']);

 
        echo view('common/header');
        echo view('home/index',$data);
        echo view('common/footer');
    }
}