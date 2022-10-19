<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Luasan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get luasan by id_luasan
     */
    function get_luasan($id_luasan)
    {
        return $this->db->get_where('luasan',array('id_luasan'=>$id_luasan))->row_array();
    }
    
    /*
     * Get all luasan count
     */
    function get_all_luasan_count()
    {
        $this->db->from('luasan');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all luasan
     */
    function get_all_luasan($params = array())
    {
        $this->db->order_by('id_luasan', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('luasan')->result_array();
    }
        
    /*
     * function to add new luasan
     */
    function add_luasan($params)
    {
        $this->db->insert('luasan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update luasan
     */
    function update_luasan($id_luasan,$params)
    {
        $this->db->where('id_luasan',$id_luasan);
        return $this->db->update('luasan',$params);
    }
    
    /*
     * function to delete luasan
     */
    function delete_luasan($id_luasan)
    {
        return $this->db->delete('luasan',array('id_luasan'=>$id_luasan));
    }
}
