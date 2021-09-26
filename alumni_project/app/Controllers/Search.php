<?php  namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

    class Search extends Controller{
        public function search() {
           
            $UserModel = new UserModel();
    
            // โชว์ All จาก id 
            $data['users'] = $UserModel->orderBy('stu_id', 'DESC')->findAll();
            // $data['users'] = $UserModel->fetch_data();
            return view('search_page_index', $data);
        }
        public function searchHome() {
           
            $UserModel = new UserModel();
    
            // โชว์ All จาก id 
            $data['users'] = $UserModel->orderBy('stu_id', 'DESC')->findAll();
            // $data['users'] = $UserModel->fetch_data();
            return view('search_page', $data);
        }

        public function skeyword(){
            $UserModel = new UserModel();
            $key =$this->input->post('title');
            $data['stu_data'] = $UserModel->search_M($key);
            $this->load->view('search_page_index', $data);
        }
}