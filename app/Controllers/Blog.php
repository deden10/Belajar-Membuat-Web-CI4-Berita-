<?php namespace App\Controllers;


use App\Models\KategoriModels;
use App\Models\PostModels;
use CodeIgniter\Controller;
class Blog extends Controller
{

    public function __construct()
	{
	
		$this->category = new KategoriModels();
		$this->post = new PostModels();
	}

	public function index()
	{	
        $pager = \Config\Services::pager();
        $data['postt'] = [
            'data' => $this->post->join('categories', 'categories.category_id = posts.category_id')->paginate(1, 'postt'),
            'pager' => $this->post->pager
        ];
        $data['kategori'] = $this->category->getKategori();
        $data['post'] = $this->post->getPost();
        $data['riwayat'] = $this->post->getRiwayat(5);
		return view('blog',$data);
    }
    public function create()
    {
        
    }
	

}
