<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'stu_data';
    // protected $primaryKey = 'stu_id';
    protected $allowedFields = [
        'stu_id',
        'password',
        'name_prefix',	
        'FName',	
        'LName',	
        'FName_eng',	
        'LName_eng',
        'id_cardnumber',
        'sex',		
        'faculty',	
        'major',
        'section',
        'edu_level'	,
        'first_year',	
        'd_m_y_birth',	
        'province_birth',	
        'nationality',	
        'religion',	
        'blood_type',	
        'Address',		
        'SubDistrict',	
        'District',
        'Province',
        'Zipcode',
        'phone_number'	
        ];

        public function search_M($key){
            $this->db->like('title',$key);
            $query = $this->db->get('stu_data');
            return $query->result();
        }

      
       
}