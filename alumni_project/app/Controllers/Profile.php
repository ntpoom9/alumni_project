<?php  namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Profile extends Controller{
    public function index() {
       
        $UserModel = new UserModel();

        // โชว์ All จาก id 
        $data['users'] = $UserModel->orderBy('stu_id', 'DESC')->findAll();

        // $data['users'] = $UserModel->fetch_data();
        return view('profile', $data);
    }
    public function edit($stu_id=null) {
        //    echo $stu_id;
            $UserModel = new UserModel();
    
            // // โชว์ All จาก id 
            $data['users'] = $UserModel->orderBy('stu_id', 'DESC')->findAll();
    
    
            return view('edit', $data);
        }
}