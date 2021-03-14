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
use App\Models\UserModels;

class User extends Controller
{

public function __construct(){
    $this->user = new UserModels;
}

public function index()
{
    if (!session()->has('login')) {
            return redirect()->to(base_url('auth'));
        }
    $data['user'] = $this->user->getUser();
    return view('admin/user/index', $data);
}

public function store()
{
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('name');
    $no_telp = $this->request->getPost('no_telp');
    $email = $this->request->getPost('email');
    $address = $this->request->getPost('address');
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'name' => $name,
        'no_telp' => $no_telp,
        'email' => $email,
        'address' => $address,
        'username' => $username,
        'password' => password_hash($password, PASSWORD_BCRYPT)
        
    ];
 
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_category dan membawa parameter data 
    */
    $simpan = $this->user->insert_data($data);
 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Data user berhasil disimpan');
        // Redirect halaman ke kategori
        return redirect()->to(base_url('user')); 
    } 
}
public function update($id)
{
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('name');
    $no_telp = $this->request->getPost('no_telp');
    $email = $this->request->getPost('email');
    $address = $this->request->getPost('address');

 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'name' => $name,
        'no_telp' => $no_telp,
        'email' => $email,
        'address' => $address,
    ];
 
    /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_user dan membawa parameter data beserta id
    */
    $ubah = $this->user->update_data($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Data user berhasil diubah');
        // Redirect ke halaman user
        return redirect()->to(base_url('user')); 
    }
}
   public function delete($id)
    {
    // Memanggil function delete_user() dengan parameter $id di dalam KategoriModel dan menampungnya di variabel hapus
    $hapus = $this->user->delete_data($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
        {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Data kategori berhasil dihapus');
        // Redirect ke halaman kategori
        return redirect()->to(base_url('user'));
        }
    } 


}