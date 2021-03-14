<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;
use App\Models\KategoriModels;

class Kategori extends Controller
{

public function __construct(){
    $this->kategori = new KategoriModels;
}

public function index()
{
    if (!session()->has('login')) {
            return redirect()->to(base_url('auth'));
        }
    $data['kategori'] = $this->kategori->getKategori();
    return view('admin/kategori/index', $data);
}

public function store()
{
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('category_name');

 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'category_name' => $name,
        
    ];
 
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_category dan membawa parameter data 
    */
    $simpan = $this->kategori->insert_data($data);
 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Data kategori berhasil disimpan');
        // Redirect halaman ke kategori
        return redirect()->to(base_url('kategori')); 
    } 
}
public function update($id)
{
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('category_name');
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'category_name' => $name,
    ];
 
    /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_product dan membawa parameter data beserta id
    */
    $ubah = $this->kategori->update_data($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Data kategori berhasil diubah');
        // Redirect ke halaman kategori
        return redirect()->to(base_url('kategori')); 
    }
}
   public function delete($id)
    {
    // Memanggil function delete_kategori() dengan parameter $id di dalam KategoriModel dan menampungnya di variabel hapus
    $hapus = $this->kategori->delete_data($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
        {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Data kategori berhasil dihapus');
        // Redirect ke halaman kategori
        return redirect()->to(base_url('kategori'));
        }
    } 


}