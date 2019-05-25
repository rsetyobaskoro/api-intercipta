<?php

require APPPATH . '/libraries/REST_Controller.php';

class Check_in extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }
    function index_post() {
		/*
		post nik
		post tanggal_absensi
		post image
		post lat
		post long
		post nama
		*/
		if($this->post('image')==NULL){
			$this->response(array('status' => 'File not found to be upload', 502));
		}else{
			$sekarang = date("Ymd_His");

			//upload absent photo to server
			$file_name = $this->post('nama').$sekarang.".jpg";
			$upload_folder_path = "app/foto-absen";
			$actual_path = "/home/u793339166/public_html/intercipta/".$upload_folder_path."/".$file_name;
			$image = $this->post('image');
			if (file_put_contents($actual_path, base64_decode($image)) != null) {
				$q = "INSERT INTO tb_absensi(tgl_absensi, nik_user, jam_masuk, foto, lat, lng, telat) VALUES('".$this->post('tanggal_absensi')."', '".$this->post('nik')."', '".$this->post('jam_masuk')."', '".$file_name."', '".$this->post('lat')."', '".$this->post('long')."', '".$this->post('telat')."')";
				$insert_to_table = $this->db->query($q);
				if($insert_to_table=='1'){
					$q2 = "UPDATE tb_user SET status_absen = 'masuk', absen_today = 'ya' WHERE nik = '".$this->post('nik')."'";
					$update_absent = $this->db->query($q2);
					if($update_absent=='1'){
						$q3 = "SELECT id FROM tb_absensi WHERE tgl_absensi = '".$this->post('tanggal_absensi')."'";
						$get_id = $this->db->query($q3)->result();
						if($get_id==NULL){
							// $this->response(array('status' => 'Result not found', 502));
							$this->response(array('status' => '0', 502));
						}else{
							$this->response($get_id, 200);
						}
					}else{
						// $this->response(array('status' => 'Fail change status', 502));
						$this->response(array('status' => '0', 502));
					}
				}else{
					// $this->response(array('status' => 'Fail absent', 502));
					$this->response(array('status' => '0', 502));
				}
			}else{
				// $this->response(array('status' => 'Upload failed', 502));
				$this->response(array('status' => '0', 502));
			}
		}
    }
}