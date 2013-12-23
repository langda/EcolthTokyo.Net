<?php
/**
 * Description of answer
 *
 * @author Jame
 */

require_once ("base_model.php");

class Article_Model extends Base_Model {
    function __construct() {
        parent::__construct();
        $this->tablemname = "article";
        $this->tableid = "Id";
    }
}
?>
