<?php namespace App\Controllers;

use App\Models\KategoriModels;
use App\Models\PostModels;

class Home extends BaseController
{

	public function __construct()
	{
	
		$this->category = new KategoriModels();
		$this->post = new PostModels();
	}
	public function index()
	{	
		$data['kategori'] = $this->category->getKategori();
		$data['post'] = $this->post->getPostLimit(2);
		return view('index', $data);
	}

	

}
