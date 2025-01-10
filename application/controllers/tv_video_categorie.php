
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tv_Video_Categorie extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Tv_Video_Categorie_Model');
	}

    function index() {
		block_access_method();		
	}
	
	function datagrid($id = false) {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			if($id) {
				$row = intval($this->input->post('rows')) == 0 ? 20 : intval($this->input->post('rows')) ;
				$page = intval($this->input->post('page'))== 0 ? 1 : intval($this->input->post('page'));
				$offset = $row * ($page - 1);
				$data = array();
				$where['id_categorie'] = intval($id); 
				$params = array('_return'=>'data');
				if(isset($where)) $params['_where'] = $where;
				$data['total'] = isset($where) ? $this->Tv_Video_Categorie_Model->count_by($where) : $this->Tv_Video_Categorie_Model->count_all();
				$this->Tv_Video_Categorie_Model->limit($row, $offset);
				$order = $this->Tv_Video_Categorie_Model->get_params('_order');
				$rows = isset($where) ? $this->Tv_Video_Categorie_Model->order_by($order)->get_many_by($where) : $this->Tv_Video_Categorie_Model->order_by($order)->get_all();
				$data['rows'] = $this->Tv_Video_Categorie_Model->get_selected()->data_formatter($rows);
				echo json_encode($data);
			} else {
				echo json_encode(array('total'=>0, 'rows'=>array()));
			}
		} else {
			block_access_method();
		}
	}

    

	function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = $this->tv_video_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->tv_video_model->check_unique($data)) {

                    if ($this->tv_video_model->insert($data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->tv_video_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
            $this->load->model('tv_categories_model');
            $this->db->order_by('categories', 'ASC');
            $categories = $this->tv_categories_model->dropdown('id', 'categories');
            // $data_code = $this->tv_categories_model->dropdown('id', 'categories');

            // $con_method = $this->tv_video_model->data_desc(intval('10'));
            $data_code = $this->tv_video_model->data_desc();

            // var_dump($data_code); die();
            
            $view = $this->load->view('tv_video/add', array('categories' => $categories,'url' => base_url() . 'tv_video/add','data_code' => $data_code->code_video), TRUE);
			echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
        }
    }

	function edit($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->tv_video_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->tv_video_model->check_unique($data, intval($id))) {
                    if ($this->tv_video_model->update(intval($id), $data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil diubah !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat diubah !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->tv_video_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
            $con_method = $this->tv_video_model->get(intval($id));
            if (sizeof($con_method) == 1) {
                $this->load->model('tv_categories_model');
                $this->db->order_by('categories', 'ASC');
                $categories = $this->tv_categories_model->dropdown('id', 'categories');

                $data = $this->tv_video_model->get_single($con_method);
                // $view = $this->load->view('tv_video/edit', array('categories' => $categories,'data' => $data,'url' => base_url() . 'tv_video/edit_upload/' . $id), TRUE);
                // echo json_encode(array('msgType' => 'success', 'msgValue' => $view));

                $view = $this->load->view('tv_video/edit', array('categories' => $categories,'data' => $data), TRUE);
                echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        }
    }

    function delete($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $roles = $this->tv_video_model->get(intval($id));
            if (sizeof($roles) == 1) {
                if ($this->tv_video_model->delete(intval($id))) {
                    echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil dihapus'));
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak berhasil dihapus !'));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        } else {
            block_access_method();
        }
    }



}
