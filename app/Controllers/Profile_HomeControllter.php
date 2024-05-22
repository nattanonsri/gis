<?php
namespace App\Controllers;

use App\Models\Profile_HomeModel;
use CodeIgniter\Controller;

class Profile_HomeControllter extends Controller
{
    public function index()
    {

        $model = new Profile_HomeModel();

        $data['profile'] = $model->getProfile_Home();




        echo view('common/header', $data);
        echo view('profile_home/index', $data);
        echo view('common/footer', $data);


    }
    public function create()
    {

        $model = new Profile_HomeModel();

        if (
            $this->request->getMethod() === 'POST' && $this->validate([
                'prefix' => 'required',
                'fname' => 'required',
                'lname' => 'required',
                'card_id' => 'required',
                'birthdate' => 'required',
                'disease' => 'required',                
                'assist' => 'required',
                'relative' => 'required',
                'coordinates' => 'required',
                'image' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
            ])
        ) {
            $file = $this->request->getFile('image');
    
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName(); // สร้างชื่อไฟล์แบบสุ่ม
                $file->move('uploads/profiles/', $imageName);
    
                $filePath = 'uploads/profiles/' . $imageName;
    
                $model->save([
                    'prefix' => $this->request->getPost('prefix'),
                    'fname' => $this->request->getPost('fname'),
                    'lname' => $this->request->getPost('lname'),
                    'card_id' => $this->request->getPost('card_id'),
                    'birthdate' => $this->request->getPost('birthdate'),
                    'disease' => $this->request->getPost('disease'),
                    'disease_details' => $this->request->getPost('disease_details'),
                    'assist' => $this->request->getPost('assist'),
                    'relative' => $this->request->getPost('relative'),
                    'caretaker' => $this->request->getPost('caretaker'),
                    'medicines' => $this->request->getPost('medicines'),
                    'coordinates' => $this->request->getPost('coordinates'),
                    'image' => $filePath
                ]);
    
                return redirect()->to('/profile')->with('success','Profile created successfully');
            } 
            // else {
            //     return redirect()->back()->with('error', 'File upload failed: ' . $file->getErrorString());
            // }
        } else {
            echo view('common/header', ['title' => 'ฟอร์มเพิ่มข้อมูล']);
            echo view('profile_home/create');
            echo view('common/footer');
        }


    }
}
