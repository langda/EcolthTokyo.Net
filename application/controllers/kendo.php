<?php
/**
 * Description of Home
 *
 * @author Jame
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ("basecontroller.php");

class Kendo extends BaseController{
    function __construct() {
        parent::__construct("kendo");
    }
    
    function index(){
        $this->view("index");
    }
    
    public function gridRead(){
        $records= $this->Article_Model->getwhere();
        if ($records):
            header("Content-type: application/json");
            echo json_encode($records);
        else:
            // send server error
            header("HTTP/1.1 500 Internal Server Error");
            echo "Failed to read data!";
        endif;
    }
    
    public function gridCreate()
    {
        $ArticleId = $this->input->post('Id');
        $SectionId = $this->getoptionalvalue($this->input->post('SectionId'));

        $data = array(
            'SectionId' => $SectionId,
            'Name' => $this->input->post('Name'),
            'Title' => $this->input->post('Title'),
            'TitleLink' => $this->input->post('TitleLink'),
            'SubTitle' => $this->input->post('SubTitle'),
            'SubTitleLink' => $this->input->post('SubTitleLink'),
            'Picture' => $this->input->post('Picture'),
            'PictureLink' => $this->input->post('PictureLink'),
            'Thumbnail' => $this->input->post('Thumbnail'),
            'ThumbnailLink' => $this->input->post('ThumbnailLink'),
            'Description' => $this->input->post('Description'),
            'Sequence' => $this->input->post('Sequence'),
            'IsPublished' => $this->input->post('IsPublished'),
            (empty($ArticleId) ? 'CreatedDate' : "ModifiedDate") => $this->getcurrentdatetime(),
            (empty($ArticleId) ? 'CreatedBy' : "ModifiedBy") => $this->getcurrentuser(),
            'Status' => $this->input->post('Status')
        );

        if (empty($ArticleId)) {
            $this->Article_Model->save($data);
        } else {
            $this->Article_Model->save($data, $ArticleId);
        }

        header("Content-type: application/json");
        echo json_encode(true);
    }
    
    public function gridReadServerFiltering(){
        /*$limit = $this->input->post('take',TRUE);
        $offset = $this->input->post('skip',TRUE);
        $sort = $this->input->post('sort',TRUE);
        $filter = $this->input->post('filter',TRUE);
        
        $limit = $this->input->post('take',TRUE);
        $offset = $this->input->post('skip',TRUE);
        $sort = $this->input->post('sort',TRUE);
        $filter = $this->input->post('filter',TRUE);

        $data = $this->employees_model->GridRead($limit, $offset,$sort,$filter);

        if ($data):
            header("Content-type: application/json");
            echo json_encode($data);
        else:
            // send server error
            header("HTTP/1.1 500 Internal Server Error");
            echo "Failed to read data!";
        endif;*/
    }
}

?>
