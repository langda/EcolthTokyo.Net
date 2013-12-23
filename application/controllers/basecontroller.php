<?php
/**
 * Description of Home
 *
 * @author Jame
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaseController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('language');
        $this->load->helper('url');         
    }
    
    function view($layout = "layout",$title = "", $metaData = "", $contentName = "index", $contentData = ""){       
        $data["title"] = $title;
        $data["metaData"] = $metaData;
        $data["contentName"] = $contentName;
        $data["contentData"] = $contentData;
        
        $this->load->view("layout/".$layout, $data);
    }
    
    function getcurrentuserid(){
        $logged_in = $this->session->userdata('logged_in');
        return $logged_in['id'];
    }
    
    function getcurrentuser(){
        $logged_in = $this->session->userdata('logged_in');
        return $logged_in['username'];
    }
    
    function getcurrentdatetime(){
        return date('Y/m/d H:i:s');
    }
    
    function getformateddatetime($datestring = ""){
        $date = ($datestring == "") ? NULL : date('Y-m-d H:i:s',strtotime($datestring));
        return $date;
    }
    
    function getboolean($value){
        return ($value == "1") ? "Yes" : "No";
    }
    
    function getoptionalvalue($value){
        return ($value == "") ? NULL : $value;
    }
    
    function getstatusarray(){
        $status = array(
            1 => "Active",
            0 => "Inactive",
            2 => "Delete"
        );
        
        return $status;
    }
    
    function getpagestatusarray(){
        $status = array(
            2 => "All",
            3 => "Completed",
            0 => "Incompleted"
        );
        
        return $status;
    }
    
    function getuploadedimagedata($fieldname){
        return $this->Image_Model->get_uploaded_image_data($fieldname);
    }
    
    function saveUpload($fileParam) {
        $uploadRoot = "images/uploads/";
        $files = $_FILES[$fileParam];

        if (isset($files['name'])) {
            $error = $files['error'];

            if ($error == UPLOAD_ERR_OK) {
                $targetPath = $uploadRoot . basename($files["name"]);
                $uploadedFile = $files["tmp_name"];

                if (is_uploaded_file($uploadedFile)) {
                    if (!move_uploaded_file($uploadedFile, $targetPath)) {
                        echo "Error moving uploaded file";
                    }
                }
            } else {
                // See http://php.net/manual/en/features.file-upload.errors.php
                echo "Error code " . $error;
            }
        }

        // Return an empty string to signify success
        echo "";
    }
    
    function removeUpload($fileParam)
    {
        $uploadRoot = "images/uploads/";
        $targetPath = $uploadRoot . basename($_POST["fileNames"]);

        unlink($targetPath);

        // Return an empty string to signify success
        echo "";
    }
}