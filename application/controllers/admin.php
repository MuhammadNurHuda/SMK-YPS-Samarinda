<?php
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_artikel','model_download','model_galeri','model_guru','model_siswa','model_visi','model_operator','model_organisasi','model_jurusan','model_slide','model_sejarah','model_alamat','model_motivasi','model_alumni','model_kontak'));
		cek();
	}

	function login()
	{
		$this->template->load('template','view_dashboard');
	}

	//Alamat

	function alamat()
	{
		$data['record']=$this->model_alamat->lihatdata();
		$this->template->load('template','admin/alamat/lihat_data',$data);
	}

	function post_alamat()
	{
		$this->template->load('template','admin/alamat/tambah_data');
	}

	function do_upload_alamat()
	{
		$alamat 	= $this->input->post('alamat');
		$email 		= $this->input->post('email');
		$notlp 		= $this->input->post('notlp');
		$data 		= array('alamat'=>$alamat,
							'email'=>$email,
							'notlp'=>$notlp
							);
		if ($this->db->insert('tb_alamat',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
		}
		redirect('admin/alamat');
	}

	function edit_alamat()
	{
		if(isset($_POST['submit'])) {
		$id 		= $this->input->post('id');
		$alamat 	= $this->input->post('alamat');
		$email 		= $this->input->post('email');
		$notlp 		= $this->input->post('notlp');
		$data 		= array('alamat'=>$alamat,
							'email'=>$email,
							'notlp'=>$notlp
							);
		$this->db->where('id_alamat',$id);
		if ($this->db->update('tb_alamat',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/alamat');
		}
		else {
			$id 				= $this->uri->segment(3);
			$data['record'] 	= $this->model_alamat->get_one($id)->row_array();
			$this->template->load('template','admin/alamat/form_edit',$data);
		}
	}

	function delete_alamat()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_alamat',$id);
		if ($this->db->delete('tb_alamat')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/alamat');
	}

	function alumni()
	{
		$data['record'] = $this->model_alumni->lihat_data1();
		$this->template->load('template','admin/alumni/lihat_alumni',$data);
	}

	function publish()
	{
		$id = $this->uri->segment(3);
		$this->model_alumni->publish($id);
		$data['record'] = $this->model_alumni->lihat_data1();
		$this->template->load('template','admin/alumni/lihat_alumni',$data);
	}

	function unpublish()
	{
		$id = $this->uri->segment(3);
		$this->model_alumni->publish1($id);
		$data['record'] = $this->model_alumni->lihat_data1();
		$this->template->load('template','admin/alumni/lihat_alumni',$data);
	}

	function delete_alumni()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_alumni',$id);
		if ($this->db->delete('tb_alumni')) {
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil Dihapus</div>');
		redirect('admin/alumni');
		}
	}

	//Artikel

	function artikel()
	{
		$data['record']=$this->model_artikel->lihatdata();
		$this->template->load('template','admin/artikel/lihat_artikel',$data);

	}

	function post_artikel(){
		$this->template->load('template','admin/artikel/tambah_artikel');
	}

	function do_upload_artikel(){
		if(isset($_POST['submit'])){
		$nama_lengkap = $this->session->userdata('nama_lengkap');
		$artikel_nama = $this->input->post('nama_artikel');
		$artikel_date = date('Y-m-d');
		$artikel_content = $this->input->post('isi_artikel');
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$hasil=$this->upload->data();
		$data=array('artikel_nama'=>$artikel_nama,
					'artikel_date'=>$artikel_date,
					'artikel_content'=>$artikel_content,
					'nama_lengkap'=>$nama_lengkap,
					'nama_file'=>$hasil['file_name']);
		if ($this->db->insert('tb_artikel',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil Ditambahkan</div>');
		}
		redirect('admin/artikel');
		}
	}

	function edit_artikel()
	{
		if(isset($_POST['submit'])){
		$id 		  		= $this->input->post('id');
		$nama_lengkap 		= $this->session->userdata('nama_lengkap');
		$artikel_nama 		= $this->input->post('nama_artikel');
		$pict 				= $this->input->post('pict');
		$artikel_date 		= date('Y-m-d');
		$artikel_content 	= $this->input->post('isi_artikel');
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		if (! $this->upload->do_upload()) {
			$hasil		= $this->upload->data();
			$data=array('artikel_nama'=>$artikel_nama,
						'artikel_date'=>$artikel_date,
						'artikel_content'=>$artikel_content,
						'nama_lengkap'=>$nama_lengkap,
						'nama_file'=>$pict);
		}
		else {
			$hasil		= $this->upload->data();
			$data=array('artikel_nama'=>$artikel_nama,
						'artikel_date'=>$artikel_date,
						'artikel_content'=>$artikel_content,
						'nama_lengkap'=>$nama_lengkap,
						'nama_file'=>$hasil['file_name']);
		}
		$this->db->where('artikel_id',$id);
		if ($this->db->update('tb_artikel',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/artikel');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_artikel->get_one($id)->row_array();
			$this->template->load('template','admin/artikel/form_edit',$data);
		}
	}

	function delete_artikel()
	{
		$id=$this->uri->segment(3);
		$path1 	= './uploads/'.$id;
		unlink($path1);
		$this->model_artikel->delete($id);
		redirect('admin/artikel');
	}

	//Download

	function download()
	{
		$data['record']=$this->model_download->lihatdata();
		$this->template->load('template','admin/download/lihat_data',$data);
	}

	function post_download()
	{
		$this->template->load('template','admin/download/tambah_data');
	}

	function do_upload_download()
	{
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png|docx|rar|zip';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$hasil=$this->upload->data();
			$title=$this->input->post('title');
			$data=array('nama_file'=>$hasil['file_name'],
						'ukuran_file'=>$hasil['file_size'],
						'judul_file'=>$title);
			if ($this->db->insert('tb_download',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil Ditambahkan</div>');
			}
			redirect('admin/download');
	}

	function edit_download()
	{
		if (isset($_POST['submit'])) {
			$id 		= $this->input->post('id');
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png|docx|rar|zip';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$hasil=$this->upload->data();
			$title=$this->input->post('title');
			$data=array('nama_file'=>$hasil['file_name'],
						'ukuran_file'=>$hasil['file_size'],
						'judul_file'=>$title);
			$this->db->where('id_download',$id);
			if ($this->db->update('tb_download',$data)) {
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
			}
			redirect('admin/download');
			}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_download->get_one($id)->row_array();
			$this->template->load('template','admin/download/form_edit',$data);
		}
	}

	function delete_download()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_download',$id);
		if ($this->db->delete('tb_download')) {
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/download');
	}

	//Galeri

	function galeri()
	{
		$data['record']=$this->model_galeri->lihatdata();
		$this->template->load('template','admin/galeri/lihat_data',$data);

	}

	function post_galeri()
	{
		$this->template->load('template','admin/galeri/tambah_galeri');
	}

	function do_upload_galeri()
	{
			$nama_lengkap = $this->session->userdata('nama_lengkap');
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$hasil=$this->upload->data();
			$title=$this->input->post('title');
			$isi=$this->input->post('isi');
			$data=array('nama_file'=>$hasil['file_name'],
						'ukuran_file'=>$hasil['file_size'],
						'title_file'=>$title,
						'nama_lengkap'=>$nama_lengkap,
						'isi_file'=>$isi);
			if ($this->db->insert('tb_galeri',$data)) {
				$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
			}
			redirect('admin/galeri');
		}	

	function edit_galeri()
	{
		if(isset($_POST['submit'])){
		$id 		= $this->input->post('id');
		$nama_lengkap = $this->session->userdata('nama_lengkap');
		$pict 		= $this->input->post('pict');
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$title 		= $this->input->post('title');
		$isi 		=$this->input->post('isi');
		if (! $this->upload->do_upload()) {
			$hasil		= $this->upload->data();
			$data 		=array('nama_file'=>$pict,
							   'ukuran_file'=>$hasil['file_size'],
							   'title_file'=>$title,
							   'nama_lengkap'=>$nama_lengkap,
							   'isi_file'=>$isi);
		}
		else {
			$hasil		= $this->upload->data();
			$data 		=array('nama_file'=>$hasil['file_name'],
							   'ukuran_file'=>$hasil['file_size'],
							   'title_file'=>$title,
							   'nama_lengkap'=>$nama_lengkap,
							   'isi_file'=>$isi);
		}
		$this->db->where('galeri_id',$id);
		
		if ($this->db->update('tb_galeri',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/galeri');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_galeri->get_one($id)->row_array();
			$this->template->load('template','admin/galeri/form_edit',$data);
		}
	}

	function delete_galeri()
	{
		$id=$this->uri->segment(3);
		$this->db->where('galeri_id',$id);
		if ($this->db->delete('tb_galeri')){
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/galeri');
	}

	//Guru

	function guru()
	{
		$data['record']=$this->model_guru->lihatdata();
		$this->template->load('template','admin/guru/lihat_data',$data);
	}

	function post_guru()
	{
		$this->template->load('template','admin/guru/form_input');
	}

	function do_upload_guru()
	{
		if (isset($_POST['submit'])) {	
		$nip 			=$this->input->post('nip_guru');
		$nama 			=$this->input->post('nama_guru');
		$jabatan 		=$this->input->post('jabatan');
		$matapelajaran 	=$this->input->post('mata_pelajaran');
		$tempat 		= $this->input->post('tempat_lahir');
		$tanggal 		= $this->input->post('tanggal_lahir');
		$alamat 		=$this->input->post('alamat');
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$hasil=$this->upload->data();
		$data=array('nip_guru'=>$nip,
					'nama_guru'=>$nama,
					'jabatan'=>$jabatan,
					'mata_pelajaran'=>$matapelajaran,
					'tempat_lahir'=>$tempat,
					'tanggal_lahir'=>$tanggal,
					'alamat'=>$alamat,
					'nama_file'=>$hasil['file_name']);
		if ($this->db->insert('tb_guru',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
		}
		redirect('admin/guru');
		}
	}

	function edit_guru()
	{
		if (isset($_POST['submit'])) {
		$id 			= $this->input->post('id');
		$nip 			= $this->input->post('nip_guru');
		$nama 			= $this->input->post('nama_guru');
		$jabatan 		= $this->input->post('jabatan');
		$matapelajaran 	= $this->input->post('mata_pelajaran');
		$tempat 		= $this->input->post('tempat_lahir');
		$tanggal 		= $this->input->post('tanggal_lahir');
		$alamat 		= $this->input->post('alamat');
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$hasil=$this->upload->data();
		$data=array('nip_guru'=>$nip,
					'nama_guru'=>$nama,
					'jabatan'=>$jabatan,
					'mata_pelajaran'=>$matapelajaran,
					'tempat_lahir'=>$tempat,
					'tanggal_lahir'=>$tanggal,
					'alamat'=>$alamat,
					'nama_file'=>$hasil['file_name']);
		$this->db->where('guru_id',$id);
		if ($this->db->update('tb_guru',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/guru');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_guru->get_one($id)->row_array();
			$this->template->load('template','admin/guru/form_edit',$data);
		}
	}

	function delete_guru()
	{
		$id=$this->uri->segment(3);
		$this->db->where('guru_id',$id);
		if ($this->db->delete('tb_guru')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/guru');
	}

	//Jurusan

	function jurusan()
	{
		$data['jurusan']=$this->model_jurusan->lihatdata();
		$this->template->load('template','admin/jurusan/lihat_data',$data);

	}

	function post_jurusan()
	{
		$this->template->load('template','admin/jurusan/tambah_data');
	}

	function do_upload_jurusan()
	{
			$nama_jurusan	= $this->input->post('nama_jurusan');
			$profil_jurusan = $this->input->post('profil_jurusan');
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$hasil=$this->upload->data();
			$data=array('file_jurusan'=>$hasil['file_name'],
						'nama_jurusan'=>$nama_jurusan,
						'profil_jurusan'=>$profil_jurusan);
			if ($this->db->insert('tb_jurusan',$data)) {
				$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data telah ditambah</div>');
			}
			redirect('admin/jurusan');
		}	

	function edit_jurusan()
	{
		if(isset($_POST['submit'])){
		$id 			= $this->input->post('id');
		$nama_jurusan	= $this->input->post('nama_jurusan');
		$profil_jurusan = $this->input->post('profil_jurusan');
		$pict 			= $this->input->post('pict');
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		if (!$this->upload->do_upload()) {
			$hasil		= $this->upload->data();
			$data 		=array('file_jurusan'=>$pict,
							   'nama_jurusan'=>$nama_jurusan,
						   	   'profil_jurusan'=>$profil_jurusan);
		}
		else {
			$hasil		= $this->upload->data();
			$data 		=array('file_jurusan'=>$hasil['file_name'],
							   'nama_jurusan'=>$nama_jurusan,
							   'profil_jurusan'=>$profil_jurusan);
		}
		$this->db->where('id_jurusan',$id);
		if ($this->db->update('tb_jurusan',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data telah diubah</div>');
		}
		redirect('admin/jurusan');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_jurusan->get_one($id)->row_array();
			$this->template->load('template','admin/jurusan/form_edit',$data);
		}
	}

	function delete_jurusan()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_jurusan',$id);
		if ($this->db->delete('tb_jurusan')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data telah dihapus</div>');
		}
		redirect('admin/jurusan');
	}

	//Kontak

	function kontak()
    {
        $data['record']=$this->model_kontak->lihatdata();
        $this->template->load('template','admin/kontak/lihat_data',$data);

    }

    function delete_kontak()
    {
        $id=$this->uri->segment(3);
        $this->db->where('kontak_id',$id);
        if ($this->db->delete('tb_kontak')) {
        	$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
        }
        redirect ('admin/kontak');
    }

    //Motivasi

    function motivasi()
	{
		$data['record']=$this->model_motivasi->lihat_data();
		$this->template->load('template','admin/motivasi/lihat_data',$data);
	}

	function post_motivasi()
	{
		$this->template->load('template','admin/motivasi/tambah_data');
	}

	function do_upload_motivasi()
	{
		$isi 		= $this->input->post('isi_motivasi');
		$data 		= array('isi_motivasi'=>$isi
							);
		if ($this->db->insert('tb_motivasi',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
		}
		redirect('admin/motivasi');
	}

	function edit_motivasi()
	{
		if(isset($_POST['submit'])) {
		$id 		= $this->input->post('id');
		$isi 		= $this->input->post('isi_motivasi');
		$data 		= array('isi_motivasi'=>$isi
							);
		$this->db->where('id_motivasi',$id);
		if ($this->db->update('tb_motivasi',$data)) {
		$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/motivasi');
		}
		else {
			$id 				= $this->uri->segment(3);
			$data['record'] 	= $this->model_motivasi->get_one($id)->row_array();
			$this->template->load('template','admin/motivasi/form_edit',$data);
		}
	}

	function delete_motivasi()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_motivasi',$id);
		if ($this->db->delete('tb_motivasi')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/motivasi');
	}

	//Operator

	function operator()
	{
		$data['record']=$this->model_operator->tampildata();
		$this->template->load('template','admin/operator/lihat_data',$data);

	}

	function post_operator()
	{
		if(isset($_POST['submit'])){
			//proses data
			$nama 		= $this->input->post('nama_lengkap',true);
			$username 	= $this->input->post('username',true);
			$password 	= $this->input->post('password',true);
			$data 		= array('nama_lengkap'=>$nama,
								'username'=>$username,
								'password'=>$password); 
			$this->db->insert('tb_operator',$data);
			redirect('admin/operator');
		}
		else
		{
			//$this->load->view('operator/form_input');
			$this->template->load('template','admin/operator/form_input');
		}
	}

	function edit_operator()
	{
		if(isset($_POST['submit'])){
			//proses kategori
			$id 		= $this->input->post('id',true);
			$nama 		= $this->input->post('nama_lengkap',true);
			$username 	= $this->input->post('username',true);
			$password 	= $this->input->post('password',true);
			if(empty($password)){
			$data 		= array('nama_lengkap'=>$nama,
								'username'=>$username); 
			}
			else {
			$data 		= array('nama_lengkap'=>$nama,
								'username'=>$username,
								'password'=>$password); 
			}
			$this->db->where('operator_id',$id);
			$this->db->update('tb_operator',$data);
			redirect('admin/operator');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_operator->get_one($id)->row_array();
			//$this->load->view('operator/form_edit',$data);
			$this->template->load('template','admin/operator/form_edit',$data);
		}
	}

	function delete_operator()
	{
		$id=$this->uri->segment(3);
		$this->db->where('operator_id',$id);
		$this->db->delete('tb_operator');
		redirect('admin/operator');
	}

	//Organisasi

	function organisasi()
	{
		$data['record']=$this->model_organisasi->lihatdata();
		$this->template->load('template','admin/organisasi/lihat_data',$data);
	}

	function post_organisasi()
	{
		$this->template->load('template','admin/organisasi/tambah_data');
	}

	function do_upload_organisasi()
	{

			$config['upload_path']		='./uploads/';
			$config['allowed_types']	='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$hasil						= $this->upload->data();
			$data 						= array('nama_file'=>$hasil['file_name'],
												);
			if ($this->db->insert('tb_organisasi',$data)) {
				$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
			}
			redirect('admin/organisasi');
			}

	function edit_organisasi()
	{
			if(isset($_POST['submit'])){
			$id 						= $this->input->post('id');
			$config['upload_path']		='./uploads/';
			$config['allowed_types']	='gif|jpg|png';
			$this->load->library('upload',$config);
			$this->upload->do_upload();
			$hasil						= $this->upload->data();
			$pict 						= $this->input->post('pict');
			$data 						= array('nama_file'=>$hasil['file_name']
												);
			$this->db->where('id_organisasi',$id);
			if ($this->db->update('tb_organisasi',$data)) {
				$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
			}
			redirect('admin/organisasi');
		}
			else
			{
				$id 	= $this->uri->segment(3);
				$data['record'] = $this->model_organisasi->get_one($id)->row_array();
				$this->template->load('template','admin/organisasi/form_edit',$data);
			}
	}

	function delete_organisasi()
	{
		$id 	= $this->uri->segment(3);
		$this->db->where('id_organisasi',$id);
		if ($this->db->delete('tb_organisasi')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/organisasi');
	}

	//Sejarah

	function sejarah()
	{
		$data['record']=$this->model_sejarah->lihatdata();
		$this->template->load('template','admin/sejarah/lihat_sejarah',$data);

	}

	function post_sejarah(){
		$this->template->load('template','admin/sejarah/tambah_sejarah');
	}

	function do_upload_sejarah(){
		if(isset($_POST['submit'])){
		$judul_sejarah	= $this->input->post('judul_sejarah');
		$isi_sejarah	= $this->input->post('isi_sejarah');
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$hasil=$this->upload->data();
		$data=array('judul_sejarah'=>$judul_sejarah,
					'isi_sejarah'=>$isi_sejarah,
					'file_sejarah'=>$hasil['file_name']);
		$this->db->insert('tb_sejarah',$data);
		redirect('admin/sejarah');
		}
	}

	function edit_sejarah()
	{
		if(isset($_POST['submit'])){
		$id 		  			= $this->input->post('id');
		$judul_sejarah			= $this->input->post('judul_sejarah');
		$isi_sejarah			= $this->input->post('isi_sejarah');
		$pict 					= $this->input->post('pict');
		$config['upload_path']	='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		if (! $this->upload->do_upload()) {
			$hasil		= $this->upload->data();
			$data 		=array('file_sejarah'=>$pict,
							   'judul_sejarah'=>$judul_sejarah,
							   'isi_sejarah'=>$isi_sejarah);
		}
		else {
			$hasil		= $this->upload->data();
			$data 		=array('judul_sejarah'=>$judul_sejarah,
							   'isi_sejarah'=>$isi_sejarah,
							   'file_sejarah'=>$hasil['file_name']);
		}
		$this->db->where('id_sejarah',$id);
		$this->db->update('tb_sejarah',$data);
		redirect('admin/sejarah');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_sejarah->get_one($id)->row_array();
			$this->template->load('template','admin/sejarah/form_edit',$data);
		}
	}

	function delete_sejarah()
	{
		$id=$this->uri->segment(3);
		$this->model_sejarah->delete($id);
		redirect('admin/sejarah');
	}

	//Siswa

	function siswa()
	{
		$data['record']=$this->model_siswa->lihatdata();
		$this->template->load('template','admin/siswa/lihat_data',$data);

	}

	function post_siswa(){
		$this->template->load('template','admin/siswa/form_input');
	}

	function do_upload_siswa(){
		if(isset($_POST['submit'])){
		$nisn 		= $this->input->post('nisn');
		$nama 		= $this->input->post('nama_siswa');
		$kelas 		= $this->input->post('kelas_siswa');
		$jk 		= $this->input->post('jk');
		$jurusan	= $this->input->post('jurusan');
		$tgl_lahir  = $this->input->post('tgl_lahir');
		$data 		= array('nisn'=>$nisn,
					'nama_siswa'=>$nama,
					'kelas_siswa'=>$kelas,
					'jk'=>$jk,
					'jurusan'=>$jurusan,
					'tgl_lahir'=>$tgl_lahir);
		if ($this->db->insert('tb_siswa',$data)) {
			$this -> session -> set_flashdata('msg','	<div class="alert alert-success text-center">Data berhasil ditambah</div>');
		}
		redirect('admin/siswa');

	}
}

	function edit_siswa()
	{
		if(isset($_POST['submit'])){
		$id 		= $this->input->post('id');
		$nisn 		= $this->input->post('nisn');
		$nama 		= $this->input->post('nama_siswa');
		$kelas 		= $this->input->post('kelas_siswa');
		$jk 		= $this->input->post('jk');
		$jurusan 	= $this->input->post('jurusan');
		$tgl_lahir  = $this->input->post('tgl_lahir');
		$data 		= array('nisn'=>$nisn,
					'nama_siswa'=>$nama,
					'kelas_siswa'=>$kelas,
					'jk'=>$jk,
					'jurusan'=>$jurusan,
					'tgl_lahir'=>$tgl_lahir);
		$this->db->where('id_siswa',$id);
		if ($this->db->update('tb_siswa',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/siswa');
		}
		else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_siswa->get_one($id)->row_array();
			$this->template->load('template','admin/siswa/form_edit',$data);
		}
	}

	function delete_siswa()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_siswa',$id);
		if ($this->db->delete('tb_siswa')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/siswa');
	}

	//Slide

	function slide()
	{
		$data['slide']=$this->model_slide->lihatdata();
		$this->template->load('template','admin/slide/lihat_data',$data);
	}

	function post_slide()
	{
		$this->template->load('template','admin/slide/tambah_data');
	}

	function do_upload_slide()
	{
		
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$title  = $this->input->post('title');
		$this->upload->do_upload();
		$hasil1		= $this->upload->data();
		$data  		= array('nama_file'=>$hasil1['file_name'],
							'title_file'=>$title
							);
		if ($this->db->insert('tb_slide',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
		}
		redirect('admin/slide');
	}

	function edit_slide()
	{
		if (isset($_POST['submit'])) {
		$config['upload_path']='./uploads/';
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		$id 	= $this->input->post('id');
		$pict   = $this->input->post('pict');
		$title  = $this->input->post('title');
		if ($this->upload->do_upload()) {
			$hasil1		= $this->upload->data();
			$data  		= array('nama_file'=>$hasil1['file_name'],
							'title_file'=>$title
							);
		}
		else {
			$hasil1		= $this->upload->data();
			$data  		= array('nama_file'=>$pict,
							'title_file'=>$title
							);
			}
		$this->db->where('id_gambar',$id);
		if ($this->db->update('tb_slide',$data)) {
		$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/slide');
		}
		else {
			$id = $this -> uri -> segment(3);
			$data['record']=$this->model_slide->get_one($id)->row_array();
			$this->template->load('template','admin/slide/edit_data',$data);
		}
	}

	function delete_slide()
	{
		$id=$this->uri->segment(3);
		$this->model_slide->delete($id);
		redirect('admin/slide');
	}

	//Visi_Misi

	function visi_misi()
	{	
		$data['record']=$this->model_visi->lihatdata();
		$this->template->load('template','admin/visimisi/lihat_data',$data);
	}

	function post_visimisi()
	{
		$this->template->load('template','admin/visimisi/tambah_data');
	}

	function do_upload_visimisi(){
		$judul		= $this->input->post('judul');
		$visi		= $this->input->post('visi');
		$misi 		= $this->input->post('misi');
		$tujuan 	= $this->input->post('tujuan');
		$data 		= array('isi_visi' => $visi,
							'isi_misi'=>$misi,
							'isi_tujuan'=>$tujuan);
		if ($this->db->insert('tb_visi',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil ditambah</div>');
		}
		redirect('admin/visi_misi');
	}

	function edit_visimisi()
	{
		if(isset($_POST['submit'])){
		$id 		= $this->input->post('id');
		$visi		= $this->input->post('visi');
		$misi 		= $this->input->post('misi');
		$tujuan 	= $this->input->post('tujuan');
		$data 		= array('isi_visi' => $visi,
							'isi_misi'=>$misi,
							'isi_tujuan'=>$tujuan);
		$this->db->where('id_visi',$id);
		if ($this->db->update('tb_visi',$data)) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil diubah</div>');
		}
		redirect('admin/visi_misi');
	}
	else
		{	
			$id=$this->uri->segment(3);
			$data['record']= $this->model_visi->get_one($id)->row_array();
			$this->template->load('template','admin/visimisi/form_edit',$data);
		}
	}

	function delete_visimisi()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_visi',$id);
		if ($this->db->delete('tb_visi')) {
			$this -> session -> set_flashdata('msg','<div class="alert alert-success text-center">Data berhasil dihapus</div>');
		}
		redirect('admin/visi_misi');
	}
}
?>