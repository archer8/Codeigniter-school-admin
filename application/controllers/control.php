<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class control extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        session_start();
        parent::__construct();

        if (!isset($_SESSION['username'])) {
            redirect('admin');
        }

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function index() {
        $this->load->view('admin/welcome');
    }

    public function database() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('deltalink_webpayments');

        $output = $crud->render();

        $this->load->view('admin/database', $output);
    }

    public function forms() {
        $crud = new grocery_CRUD();
        $crud->set_table('tks_supporters');
        $crud->set_theme('datatables');
        $output = $crud->render();
        $this->load->view('admin/forms', $output);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */