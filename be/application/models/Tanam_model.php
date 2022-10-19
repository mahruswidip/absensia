<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tanam_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tanam by id_tanam
     */
    function get_tanam($id_tanam)
    {
        return $this->db->get_where('tanam',array('id_tanam'=>$id_tanam))->row_array();
    }
    
    /*
     * Get all tanam count
     */
    function get_all_tanam_count()
    {
        $this->db->from('tanam');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tanam
     */
    function get_all_tanam($params = array())
    {
        $this->db->order_by('id_tanam', 'desc');
        $this->db->join('komoditas', 'komoditas.id_komoditas=tanam.id_komoditas', 'left');
        $this->db->join('luasan', 'luasan.id_luasan=tanam.id_luasan', 'left');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tanam')->result_array();
    }
        
    /*
     * function to add new tanam
     */
    function add_tanam($params)
    {
        $this->db->insert('tanam',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tanam
     */
    function update_tanam($id_tanam,$params)
    {
        $this->db->where('id_tanam',$id_tanam);
        return $this->db->update('tanam',$params);
    }
    
    /*
     * function to delete tanam
     */
    function delete_tanam($id_tanam)
    {
        return $this->db->delete('tanam',array('id_tanam'=>$id_tanam));
    }
}