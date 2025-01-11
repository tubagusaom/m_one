
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

    function add($id = false) {

        // var_dump(($id)); die();

		$this->load->model('Tv_categories_model');
		if(!$id) {
			echo json_encode(array('msgType'=>'error', 'msgValue'=>'Anda belum memilih data Program TV !'));
			exit;
		} else {
			if($_SERVER['REQUEST_METHOD'] == 'POST') {

                $uri_video = $this->input->post('link_video');
                $value_uri = $this->segment_query_parse($uri_video);

                if($value_uri !== false){
                    $this->load->model('tv_video_model');
                    $data_code = $this->tv_video_model->data_desc();

                    $_POST['code_video'] = ($data_code->code_video + 1);
                    $_POST['id_categorie'] = intval($id);
                    $_POST['link_embed'] = 'https://www.youtube.com/embed/' . $value_uri;
                    $_POST['poster_video'] = 'https://img.youtube.com/vi/' . $value_uri . '/hqdefault.jpg';
                    $_POST['frame_border'] = '0';
                    $_POST['allow_arr'] = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
                    $_POST['allow_full_screen'] = 'true';

                    // var_dump($value_uri); die();

                    $data = $this->Tv_Video_Categorie_Model->set_validation()->validate();
                    if($data !== false) {
                        if($this->Tv_Video_Categorie_Model->check_unique($data)) {
                            if($this->Tv_Video_Categorie_Model->insert($data) !== false) {
                                echo json_encode(array('msgType'=>'success', 'msgValue'=>'Data berhasil disimpan !'));
                            } else {
                                echo json_encode(array('msgType'=>'error', 'msgValue'=>'Data tidak dapat disimpan !'));
                            }
                        } else {
                            echo json_encode(array('msgType'=>'error', 'msgValue'=>implode("<br/>", $this->Tv_Video_Categorie_Model->get_validation())));
                        }
                    } else {
                        echo json_encode(array('msgType'=>'error', 'msgValue'=>validation_errors()));
                    }
                }else {
                    echo json_encode(array('msgType'=>'error', 'msgValue'=>'Link video tidak valid !'));
                }
			} else {
                $this->load->model('tv_video_model');
                $data_code = $this->tv_video_model->data_desc();
				$categorie = $this->Tv_categories_model->get_single($this->Tv_categories_model->get(intval($id)));

                // var_dump($data_code); die();

				$view = $this->load->view('tv_video_categorie/add', array('categorie'=>$categorie,'data_code'=>$data_code->code_video), TRUE);
				echo json_encode(array('msgType'=>'success', 'msgValue'=>$view));
			}
		}
	}

    // function addx() {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //         $data = $this->Tv_Video_Categorie_Model->set_validation()->validate();
    //         if ($data !== false) {
    //             if ($this->Tv_Video_Categorie_Model->check_unique($data)) {

    //                 if ($this->Tv_Video_Categorie_Model->insert($data) !== false) {
    //                     echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
    //                 } else {
    //                     echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
    //                 }
    //             } else {
    //                 echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->Tv_Video_Categorie_Model->get_validation())));
    //             }
    //         } else {
    //             echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
    //         }
    //     } else {
    //         $this->load->model('tv_categories_model');
    //         $this->db->order_by('categories', 'ASC');
    //         $categories = $this->tv_categories_model->dropdown('id', 'categories');
    //         // $data_code = $this->tv_categories_model->dropdown('id', 'categories');

    //         // $con_method = $this->Tv_Video_Categorie_Model->data_desc(intval('10'));
    //         $data_code = $this->Tv_Video_Categorie_Model->data_desc();

    //         // var_dump($data_code); die();
            
    //         $view = $this->load->view('tv_video_categorie/add', array('categories' => $categories,'url' => base_url() . 'tv_video_categorie/add','data_code' => $data_code->code_video), TRUE);
	// 		echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
    //     }
    // }

	function edit($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->Tv_Video_Categorie_Model->set_validation()->validate();
            if ($data !== false) {
                if ($this->Tv_Video_Categorie_Model->check_unique($data, intval($id))) {
                    if ($this->Tv_Video_Categorie_Model->update(intval($id), $data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil diubah !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat diubah !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->Tv_Video_Categorie_Model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
            $con_method = $this->Tv_Video_Categorie_Model->get(intval($id));
            if (sizeof($con_method) == 1) {
                $this->load->model('tv_categories_model');
                $this->db->order_by('categories', 'ASC');
                $categories = $this->tv_categories_model->dropdown('id', 'categories');

                $data = $this->Tv_Video_Categorie_Model->get_single($con_method);
                // $view = $this->load->view('tv_video/edit', array('categories' => $categories,'data' => $data,'url' => base_url() . 'tv_video/edit_upload/' . $id), TRUE);
                // echo json_encode(array('msgType' => 'success', 'msgValue' => $view));

                $view = $this->load->view('tv_video_categorie/edit', array('categories' => $categories,'data' => $data), TRUE);
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
            $roles = $this->Tv_Video_Categorie_Model->get(intval($id));
            if (sizeof($roles) == 1) {
                if ($this->Tv_Video_Categorie_Model->delete(intval($id))) {
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
