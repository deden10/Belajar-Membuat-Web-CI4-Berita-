<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModels extends Model
{
    protected $table = "users";
 
    public function getUser($id = false)
    {
        if($id === false){
            return $this->table('users')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('users')
                        ->where('user_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_data($data)
    {
    return $this->db->table($this->table)->insert($data);
    } 

    public function update_data($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['user_id' => $id]);
    } 

    public function delete_data($id)
    {
    return $this->db->table($this->table)->delete(['user_id' => $id]);
    } 
    
    public function count_data()
    {
        return $this->table($this->table)->countAll();
    }
    
  
}