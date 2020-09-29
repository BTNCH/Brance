<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	public function index()
	{
		$this->load->view('contact');
    }
    public function contact(){
        $data = array(
            'name' => $this->input->post("name"),
            'email' => $this->input->post("email"),
            'address' => $this->input->post("address"),
            'phone' => $this->input->post("phone"),
            'message' => $this->input->post("message"),

        );
        $tao["x"]=$data ;
        $this->load->view('show_contact',$tao);
    

    }
}
