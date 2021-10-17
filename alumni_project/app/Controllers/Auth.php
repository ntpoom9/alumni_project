<?php

namespace App\Controllers;

use CodeIgniter\Controller;

// class Auth extends Controller
// {
    // public function __construct()
    // {
    //   helper(['url','form']);

    // }

//     public function index()
//     {
//         return view('login');

//     }
//     public function register()
//     {
//         return view('register');

//     }
//     public function seve2()
//     {
//        $validation = $this->validate([
//         'stu_id' => 'required|min_length[9]|max_length[9]',
//             'password' => 'required|min_length[6]|max_length[200]',
//             'confpassword' => 'matches[password]',
//             'name_prefix' => 'required|max_length[10]',
//             'FName' => 'required',
//             'LName' => 'required',
//             'FName_eng' => 'required',
//             'LName_eng' => 'required',
//             'id_cardnumber' => 'required|min_length[13]|max_length[13]',
//             'sex' => 'required|min_length[1]|max_length[10]',
//             'faculty' => 'required|min_length[3]|max_length[100]',
//             'major' => 'required|min_length[3]|max_length[100]',
//             'section' => 'required|min_length[3]|max_length[100]',
//             'edu_level' => 'required|max_length[100]',
//             'first_year' => 'required|min_length[4]|max_length[4]',
//             'd_m_y_birth' => 'required|min_length[3]|max_length[20]',
//             'province_birth' => 'required|min_length[3]|max_length[20]',
//             'nationality' =>  'required|min_length[3]|max_length[20]',
//             'religion' => 'required|min_length[3]|max_length[20]',
//             'blood_type' => 'required|min_length[1]|max_length[2]',
//             'Address' => 'required|min_length[1]|max_length[20]',
//             'SubDistrict' => 'required|min_length[3]|max_length[20]',
//             'District' => 'required|min_length[3]|max_length[20]',
//             'Province' => 'required|min_length[3]|max_length[20]',
//             'Zipcode' => 'required|min_length[5]|max_length[5]',
//             'phone_number' => 'required|min_length[10]|max_length[10]',
//        ]);

//        if(!$validation){
//            return view('register',['validation'=>$this->validator]);
//        }else{
//            echo 'Form validated successfully';
//        }
//     }

// }