<?php
class M_model extends CI_Model{
    // Get Data 
    function get_data($table) {
        return $this->db->get($table);
    }

    // Login
    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    // Hapus
    public function delete($table, $field, $id)
    {
        $data=$this->db->delete($table, array($field => $id));
        return $data;
    }

    // Tambah
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    // Ubah
    public function get_by_id($tabel, $id_column, $id)
    {
        $data=$this->db->where($id_column, $id)->get($tabel);
        return $data;
    }
    
    public function ubah_data($tabel, $data, $where)
    {
        $data=$this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
}