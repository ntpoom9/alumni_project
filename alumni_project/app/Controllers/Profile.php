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
    
    
            return view('edit_profile', $data);
        }

        function update()
        {
            // helper(['form', 'url']);
            
            // $error = $this->validate([
            //     'name' 	=> 'required|min_length[3]',
            //     'email' => 'required|valid_email',
            //     'gender'=> 'required'
            // ]);
    
            // $crudModel = new CrudModel();
    
            // $id = $this->request->getVar('id');
    
            // if(!$error)
            // {
            //     $data['user_data'] = $crudModel->where('id', $id)->first();
            //     $data['error'] = $this->validator;
            //     echo view('edit_data', $data);
            // } 
            // else 
            // {
            //     $data = [
            //         'name' => $this->request->getVar('name'),
            //         'email'  => $this->request->getVar('email'),
            //         'gender'  => $this->request->getVar('gender'),
            //     ];
    
            //     $crudModel->update($id, $data);
    
            //     $session = \Config\Services::session();
    
            //     $session->setFlashdata('success', 'User Data Updated');
    
            //     return $this->response->redirect(site_url('/crud'));
            // }
        }
}