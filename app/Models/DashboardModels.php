<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModels extends Model
{
    protected $table = ['users', 'categories', 'posts'];
    
    public function users()
    {
        return $this->table('users')->countAll();
        
    }
    public function categories()
    {
        return $this->table('categories')->countAll();
    }
    public function posts()
    {
        return $this->table('posts')->countAll();
    }
}
