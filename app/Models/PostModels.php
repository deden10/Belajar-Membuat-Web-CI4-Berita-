<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModels extends Model
{
    protected $table = 'posts';

    public function getPost($id = false)
    {
        if ($id === false) {
            return $this->table('posts')
                ->select('*')
                ->join('categories', 'posts.category_id = categories.category_id')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('posts')
                ->select('*')
                ->join('categories', 'posts.category_id = categories.category_id')
                ->where('posts.post_id', $id)
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
        return $this->db->table($this->table)->update($data, ['post_id' => $id]);
    }

    public function delete_data($id)
    {
        $delete = $this->getPost($id);
        unlink('uploads/' . $delete['image']);
        return $this->db->table($this->table)->delete(['post_id' => $id]);
    }
    public function count_data()
    {
        return $this->table($this->table)->countAll();
    }

    public function getPostLimit($limit)
    {
        return $this->table($this->table)
            ->select('*')
            ->join('categories', 'posts.category_id = categories.category_id')
            ->limit($limit)
            ->orderby('posts.title', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function getPostSearch($search)
    {
        return $this->table($this->table)
            ->select('*')
            ->join('categories', 'posts.category_id = categories.category_id')
            ->like('posts.title', $search)
            ->get()
            ->getResultArray();
    }

    public function getRiwayat($limit)
    {
        return $this->table($this->table)
            ->select('*')
            ->join('categories', 'posts.category_id = categories.category_id')
            ->limit($limit)
            ->orderby('posts.title', 'DESC')
            ->get()
            ->getResultArray();
    }
    
    public function getKategori($id)
    {
        return $this->table($this->table)
            ->join('categories', 'posts.category_id = categories.category_id')
            ->select('*')
            ->where('categories.category_id',$id)
            ->get()
            ->getResultArray();
    }
}
