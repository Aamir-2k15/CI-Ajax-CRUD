<?php
/* * *
 * ********************************************************************
 * Name: Common Helper
 * Version: 1
 * Dated: 8th November 2021 
 * ____________________________________________________________________
 * 
 *  COMMON OPERATIONS:
 *  @USE::
 *  1. put this helper inside helpers folder
 *  2. $autoload['libraries'] = array('database',.....); || (Alt)  $CI->load->library('database'); || $autoload['libraries'] = array('database', 'email', 'session','form_validation');  
 *  3. autoload:: 'common'  ||(Alt) $autoload['helper'] = array('url_helper','url','file', 'form','common'); 
 * ********************************************************************
 * * */

//  $CI =& get_instance();

if (!function_exists('get_all')) {
    function get_all($table, $order_by = null, $order = null)
    {
        $CI = &get_instance();
        $CI->db->order_by($order_by, $order);
        $query = $CI->db->get($table);
        return $query->result();
    }
}

if (!function_exists('get_by_id')) {
    function get_by_id($table, $id)
    {
        $CI = &get_instance();
        $CI->db->from($table);
        $CI->db->where('id=' . $id);
        $query = $CI->db->get();
        return $query->row();
    }
}

if (!function_exists('create')) {
    function create($table)
    {
        $CI = &get_instance();
        $data = $CI->input->post();
        $CI->db->insert($table, $data);
    }
}

if (!function_exists('_update')) {
    function _update($table, $id)
    {
        // dd($table);
        // dd($id);
        $CI = &get_instance();
        $data = $CI->input->post();
        $CI->db->where('id', $id);
        $CI->db->update($table, $data);
    }
}

if (!function_exists('_delete')) {
    function _delete($table, $id)
    {
        $CI = &get_instance();
        $CI->db->where('id', $id);
        $CI->db->delete($table);
    }
}

if (!function_exists('dd')) {
    function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}

if (!function_exists('site_name')) {
    function site_name()
    {
        echo config_item('site_name');

    }
}
