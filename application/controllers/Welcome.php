<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	 public function __construct(){
		parent::__construct();
		$this->load->model('M_mahasiswa');
	 }
	public function index()
	{
		$getDataMhs = $this->M_mahasiswa->getDataMahasiswa();
		$data = array('data_mhs' => $getDataMhs);
		$this->load->view('home', $data);
	}

	public function tambah(){
		$this->load->view('form_tambah');
	}
	   

	public function edit($id){
		$getData = $this->M_mahasiswa->getDataMhsDetail($id);
		$data = array('data_mhs' => $getData);
		
		$this->load->view('form_edit', $data);
	}
	 public function insert(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
	
		$dataInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,
		);

		$this->M_mahasiswa->InsertMhs($dataInsert);
		redirect (base_url('Welcome'));
	}
	public function update(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$dataUpdate = array(
			'nama' => $nama,
			'jurusan' => $jurusan,
		);
	$this->M_mahasiswa->EditMhs($dataUpdate, $nim);
	redirect (base_url('Welcome'));
	}

	public function delete($nim){
		$this->M_mahasiswa->deleteMhs($nim);
		redirect (base_url('Welcome'));
	}

}
