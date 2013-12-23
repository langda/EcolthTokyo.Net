<?php
/**
 * Description of Home
 *
 * @author Jame
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once ("basecontroller.php");

class Home extends BaseController{
    function __construct() {
        parent::__construct("home");
    }
    
    function index(){
        $this->view("layout", "Ecolth | Japan secondhand shop", "", "home/index");
    }
    
    function about_us(){
        $this->view("layout", "Ecolth | Japan secondhand shop", "", "home/about_us");
    }
    
    function contact(){
        $this->view("layout", "Ecolth | Japan secondhand shop", "", "home/contact");
    }
    
    function donation(){
        $this->view("layout", "Ecolth | Japan secondhand shop", "", "home/donation");
    }
    
    function ngo_activities(){
        $this->view("layout", "Ecolth | Japan secondhand shop", "", "home/ngo_activities");
    }
    
    function product(){
        $this->view("layout", "Ecolth | Japan secondhand shop", "", "home/product");
    }
    
    function products(){
        $this->view("layout", "Ecolth | Japan secondhand shop", "", "home/products");
    }
    
    function page404(){
        $this->view("layout", "404 (page not found)", "", "home/page404");
    }
}
?>
