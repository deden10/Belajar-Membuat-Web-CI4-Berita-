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

use App\Models\DashboardModels;
use App\Models\KategoriModels;
use App\Models\PostModels;
use App\Models\UserModels;
use CodeIgniter\Controller;

class Dashboard extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
    public function __construct()
    {
        $this->DashboardModels = new DashboardModels();
        $this->KategoriModels = new KategoriModels();
        $this->UserModels = new UserModels();
        $this->PostModels = new PostModels();
    }
	public function index()
	{
		if (!session()->has('login')) {
				return redirect()->to(base_url('auth'));
			}
		$data['user'] = $this->UserModels->count_data();
        $data['category'] = $this->KategoriModels->count_data();
        $data['post'] = $this->PostModels->count_data();
        return view('admin/dashboard', $data);
	}

}