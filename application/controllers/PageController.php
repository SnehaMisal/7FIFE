<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	// Link File
	public function links()
	{
		$this->load->view('link/links');
	}
	public function script()
	{
		$this->load->view('link/script');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
    public function forgot_password()
	{
		$this->load->view('forgot_password');
	}

    public function admin_profile()
	{
		$this->load->view('admin_profile');
	}
	public function user_management()
	{
		$this->load->view('user_management');
	}
	
	public function privacy_policy()
	{
		$this->load->view('privacy_policy');
	}
	public function term_condition()
	{
		$this->load->view('term_condition');
	}
	public function push_notification()
	{
		$this->load->view('push_notification');
	}
	public function notification()
	{
		$this->load->view('notification');
	}
	public function revenue_management()
	{
		$this->load->view('revenue_management');
	}
	public function subscription_plan()
	{
		$this->load->view('subscription_plan');
	}
	public function review_managment()
	{
		$this->load->view('review_managment');
	}
	public function user_report()
	{
		$this->load->view('user_report');
	}
	public function reward_management()
	{
		$this->load->view('reward_management');
	}
	// Setting
	// public function add_language()
	// {
	// 	$this->load->view('setting/add_language');
	// }
	// public function create_categories()
	// {
	// 	$this->load->view('setting/create_categories');
	// }
	// public function create_subcategories()
	// {
	// 	$this->load->view('setting/create_subcategories');
	// }
	// public function create_album()
	// {
	// 	$this->load->view('setting/create_album');
	// }
	// public function add_artist()
	// {
	// 	$this->load->view('setting/add_artist');
	// }

	// Manage Songs
	// public function import_song()
	// {
	// 	$this->load->view('manage_song/import_song');
	// }
	// public function song_list()
	// {
	// 	$this->load->view('manage_song/song_list');
	// }
}
