<?php
defined('BASEPATH') or exit('No direct script access allowed');

class po_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getallpo()
    {
        $query = "SELECT * FROM po";
        return $this->db->query($query)->result_array();
    }

    public function Tambah_Po($data)
    {
        $this->db->insert('po', $data);
    }

    public function upload($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('po', $data);
        return true;
    }

    public function download_doc1($id)
    {
        $query = "SELECT doc1 FROM po WHERE id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function download_doc2($id)
    {
        $query = "SELECT doc2 FROM po WHERE id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function download_gambar($id)
    {
        $query = "SELECT gambar FROM po WHERE id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function download_build_material($id)
    {
        $query = "SELECT build_material FROM po WHERE id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function download_packing($id)
    {
        $query = "SELECT packing FROM po WHERE id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function edit($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('po', $data);
        return true;
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('po');
    }
}
