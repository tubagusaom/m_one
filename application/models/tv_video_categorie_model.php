<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tv_Video_Categorie_Model extends MY_Model {

	protected $_table = 'tv_video';
	protected $table_label = 'Data Videos';
	protected $_columns = array(
		'nama_video' => array(
			'label' => 'Title',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'width' => 80,
			'align' =>'left',
		),
		'desc_video' => array(
			'label' => 'Description',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'width' => 80,
			'align' =>'left',
		),

		'link_video' => array(
			'label' => 'link_video',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'hidden' => 'true'
		),
		'link_embed' => array(
			'label' => 'link_embed',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'hidden' => 'true'
		),
		'poster_video' => array(
			'label' => 'poster_video',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'hidden' => 'true'
		),
		'frame_border' => array(
			'label' => 'frame_border',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'hidden' => 'true'
		),
		'allow_arr' => array(
			'label' => 'allow_arr',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'hidden' => 'true'
		),
		'allow_full_screen' => array(
			'label' => 'allow_full_screen',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'hidden' => 'true'
		),
		
		'code_video' => array(
			'label' => 'Code',
			'rule' => 'trim|xss_clean',
			'formatter' => 'string',
			'save_formatter' => 'string',
			'width' => 15,
			'align' =>'center',
			'hidden' => 'true'
		),
		'id_categorie'	=> array(
			'label'	=>	'Categorie',
			'rule'	=>	'trim|required|xss_clean',
			'formatter'	=>	'int',
			'save_formatter' => 'int',
			'width' => 150
		),
	);

	// protected $belongs_to = array(
	// 	'video'=>array(
	// 		'model'=>'tv_video_model',
	// 		'primary_key'=>'id_categorie',
	// 		'retrieve_columns'=>array('nama_video','desc_video')
	// 	)
	// );

	protected $_order = array("id" => "DESC");
    protected $_unique = array('unique' => array('id'), 'group' => false);

	// protected $_order = "id_categorie";
	// protected $_unique = array('unique'=>array('id_categorie'), 'group'=>false);

	//protected $_unique = array('unique'=>array('user_id', 'role_id'), 'group'=>true);

	public function __construct()
	{
		parent::__construct();
	}

?>
