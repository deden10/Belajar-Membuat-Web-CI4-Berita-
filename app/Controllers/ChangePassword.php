<?php

namespace App\Controllers;

use App\Models\UserModels;
use CodeIgniter\Controller;

class ChangePassword extends Controller
{
    public function __construct()
    {
        $this->user = new UserModels();
    }
    public function index()
    {
        $data['user'] = $this->user->getUser(session()->get('id'));
        return view('admin/user/account', $data);
    }

    public function proses()
    {
        $username = $this->request->getPost('username');
        $old = $this->request->getPost('old_password');
        $new = $this->request->getPost('new_password');
        $confirmation = $this->request->getPost('confirmation_password');

        $cek = $this->user->getUser(session()->get('id'));
        if (password_verify($old, $cek['password'])) {
            if ($new === $confirmation) {
                $data = [
                    'username' => $username,
                    'password' => password_hash($new, PASSWORD_BCRYPT)
                ];
                $query = $this->user->update_data($data, session()->get('id'));
                if ($query) {
                    session()->setFlashdata('success', TRUE);
                    return redirect()->to(base_url('changepassword'));
                }
                session()->setFlashdata('error', 'Pengaturan akun gagal, coba lagi nanti.');
                return redirect()->to(base_url('changepassword'));
            }
            session()->setFlashdata('error', 'Konfirmasi password tidak sama');
            return redirect()->to(base_url('changepassword'));
        }
        session()->setFlashdata('error', 'Password lama salah');
        return redirect()->to(base_url('changepassword'));
    }
}
