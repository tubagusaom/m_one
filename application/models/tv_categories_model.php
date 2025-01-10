<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Tv_categories_model extends MY_Model {

public function __construct() {
    $this->_table = "tv_categories";
    parent::__construct($this->_table);
}

protected $_table;
protected $table_label = 'Data Program TV';
protected $_columns = array(
    'categories' => array(
        'label' => 'Nama',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 30
    ),
    'description' => array(
        'label' => 'Inisial Categorie',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 50,
        'hidden' => 'true'
    ),
    'logo_img' => array(
        'label' => 'Logo',
        'rule' => 'trim|xss_clean',
        'formatter' => 'url2images',
        'save_formatter' => 'string',
        'width' => 30,
        'align' =>'center',
    ),
    'logo_ori' => array(
        'label' => 'Logo Ori',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
);

    protected $_order = array("id" => "DESC");
    // protected $_unique = array('unique' => array('id'), 'group' => false);

    // protected $_order = "id";
	protected $_unique = array('unique'=>array('description'), 'group'=>false);

    function url2images($url) {
        if(!is_null($url) && !empty($url)) {
          return "<img width=100% height=100% src='$url' class='img-thumbnail' />";
        }else {
            return "";
        }
    }

}

?>
