<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class KategoriModels extends Model
{
    protected $table = "categories";
 
    public function getKategori($id = false)
    {
        if($id === false){
            return $this->table('categories')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('categories')
                        ->where('category_id', $id)
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
        return $this->db->table($this->table)->update($data, ['category_id' => $id]);
    }

    public function delete_data($id)
    {
        return $this->db->table($this->table)->delete(['category_id' => $id]);
    } 

    public function count_data()
    {
        return $this->table($this->table)->countAll();
    }
    
    
}