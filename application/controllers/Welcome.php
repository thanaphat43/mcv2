<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('models');
	}

	public function index()
	{
		$result['shows'] = $this->models->getAlltrain();
		$this->load->view('a',$result);


	}
	public function reg_menu(){

		$data = array(
			'train_id' => $this->input->post("train_id"),
			'Departure_station' => $this->input->post("Departure_station"),
			'Time_out' => $this->input->post("Time_out"),
			'to_station1'=> $this->input->post("to_station1"),
			'out_station1' => $this->input->post("out_station1"),
			'station_terminal' => $this->input->post("station_terminal"),
			'to_station2' => $this->input->post("to_station2"),
			'note'=> $this->input->post("note"),
		);
		//print_r($data);
			 $this->models->menu_insert($data);
			
			$this->load->view('b');
			
	}
public function reg_menu1(){
	$this->load->view('b');
}

}
