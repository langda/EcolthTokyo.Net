<?php
/**
 * Description of answer
 *
 * @author Jame
 */
class Base_Model extends CI_Model {
    public $tablemname = "";
    public $tableid = "";
    
    function __construct() {
        parent::__construct();
    }
    
    function get($id){
        $this->db->where(array($this->tableid=>$id));
        $query = $this->db->get($this->tablemname);
        return $query->row_array();
    }
    
    function getwhere($select = "", $where = array(), $order = ""){
        $this->db->select($select, FALSE);
        $this->db->from($this->tablemname);
        $this->db->where($where);
        if($order != "") $this->db->order_by($order);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getlist($value, $text, $where = array(), $order = ""){
        $list[""] = "- Pease Select -";
        $order = ($order == "") ? $text : $order;
        $results = $this->getwhere("$value,$text", $where, $order);
        foreach ($results as $result) {
            $list[$result[$value]] = $result[$text];
        }
        return $list;
    }
    
    function save($data, $id=0){
        if($id == 0){
            return $this->db->insert($this->tablemname, $data);
        }
        else{
            $where = array($this->tableid=>$id);
            return $this->savewhere($data, $where);
        }
    }
    
    function savewhere($data, $where){
        $this->db->where($where);
        return $this->db->update($this->tablemname, $data);
    }
    
    function delete($id){
        $where = array($this->tableid=>$id);
        return $this->deletewhere($where); 
    }
    
    function deletewhere($where){
        $this->db->where($where);
        return $this->db->delete($this->tablemname); 
    }
}

?>
