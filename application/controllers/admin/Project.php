<?php

require APPPATH . '/libraries/REST_Controller.php';

class Project extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
	}
	function index_get() {
		if($this->get('id_project')==NULL){
			$q = "SELECT a.id_project,b.nama AS pic,(SELECT c.nama FROM tb_user c WHERE c.nik=a.nik_client) AS client,a.kode_project,a.nama_project FROM tb_project a LEFT JOIN tb_user b ON a.nik_pic=b.nik WHERE a.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}else{
			$q = "SELECT a.id_project,b.nama AS pic,(SELECT c.nama FROM tb_user c WHERE c.nik=a.nik_client) AS client,a.kode_project,a.nama_project FROM tb_project a LEFT JOIN tb_user b ON a.nik_pic=b.nik WHERE a.id_project = '".$this->get('id_project')."' AND a.deleted='0'";
			$get_data = $this->db->query($q)->result();
			if($get_data==NULL){
				// $this->response(array('status' => 'Result not found', 502));
				echo "no_data";
			}else{
				$this->response($get_data, 200);
			}
		}
	}

	function index_post() {
		/*
		post nik_pic
		post nik_client
		post kode_project
		post nama_project
		*/
		$where1 = array(
			'nik' => $this->post('nik_pic')
		);
		$cek1 = $this->Master_model->getSelectedData('tb_user',$where1);
		if($cek1==NULL){
//			$this->response(array('status' => 'NIK tidak valid', 502));
            echo "nik1_invalid";
		}else{
			$where2 = array(
				'nik' => $this->post('nik_client')
			);
			$cek2 = $this->Master_model->getSelectedData('tb_user',$where2);
			if($cek2==NULL){
//				$this->response(array('status' => 'NIK tidak valid', 502));
                echo "nik2_invalid";
			}else{
				$data = array(
					'nik_pic' => $this->post('nik_pic'),
					'nik_client' => $this->post('nik_client'),
					'kode_project' => $this->post('kode_project'),
					'nama_project' => $this->post('nama_project')
				);
				$insert_to_table = $this->db->insert('tb_project',$data);
				if($insert_to_table=='1'){
//					$this->response(array('status' => '1', 200));
                    echo "success";
				}else{
//					$this->response(array('status' => '0', 502));
                    echo "failed";
				}
			}
		}
	}

	function index_put() {
		$where1 = array(
			'nik' => $this->put('nik_pic')
		);
		$cek1 = $this->Master_model->getSelectedData('tb_user',$where1);
		if($cek1==NULL){
			echo 'nik1_invalid';
		}else{
			$where2 = array(
				'nik' => $this->put('nik_client')
			);
			$cek2 = $this->Master_model->getSelectedData('tb_user',$where2);
			if($cek2==NULL){
				echo 'nik2_invalid';
			}else{
				$data = array(
							'nik_pic'       => $this->put('nik_pic'),
							'nik_client'       => $this->put('nik_client'),
							'kode_project'    => $this->put('kode_project'),
							'nama_project'    => $this->put('nama_project'));
				$this->db->where('id_project', $this->put('id_project'));
				$update = $this->db->update('tb_project', $data);
				if ($update) {
					// $this->response(array('status' => 'Update is successful', 200));
					echo "success";
				} else {
					// $this->response(array('status' => 'Failed, please try again', 502));
					echo "failed";
				}
			}				
		}
	}

	function index_delete() {
		$post = file_get_contents('php://input');
		$json = json_decode($post, true);
        $data = array(
					'deleted'       => "1");
        $this->db->where('id_project', $json['id_project']);
        $update = $this->db->update('tb_project', $data);
        if ($update) {
			// $this->response(array('status' => 'Update is successful', 200));
//			$this->response(array('status' => '1', 200));
            echo "success";
        } else {
			// $this->response(array('status' => 'Failed, please try again', 502));
//			$this->response(array('status' => '0', 502));
            echo "failed";
        }
    }
}