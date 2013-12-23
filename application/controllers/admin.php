<?php
/**
 * Description of Home
 *
 * @author Jame
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ("basecontroller.php");

class Admin extends BaseController{
    function __construct() {
        parent::__construct("admin");
    }
    
    function index(){
        $this->view("layoutAdmin", "index");
    }
}
?>
