<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelHewan extends CI_Model
{
    //manajemen buku
    public function getHewan()
    {
        return $this->db->get('hewan');
    }
    public function hewanWhere($where)
    {
        return $this->db->get_where('hewan', $where);
    }
    public function simpanHewan($data = null)
    {
        $this->db->insert('hewan',$data);
    }
    public function updateHewan($data = null, $where = null)
    {
        $this->db->update('hewan', $data, $where);
    }
    public function hapusHewan($where = null)
    {
        $this->db->delete('hewan', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
        $this->db->where($where);
        }
        $this->db->from('hewan');
        return $this->db->get()->row($field);
    }
 
    //manajemen kategori
    public function getSpecies()
    {
        return $this->db->get('species');
    }
    public function speciesWhere($where)
    {
        return $this->db->get_where('species', $where);
    }
    public function simpanSpecies($data = null)
    {
        $this->db->insert('species', $data);
    }
    public function hapusSpecies($where = null)
    {
        $this->db->delete('species', $where);
    }
    public function updateSpecies($where = null, $data = null)
    {
        $this->db->update('species', $data, $where);
    }
    //join
    public function joinSpeciesHewan($where)
    {
        $this->db->select('buku.id_species,species.species');
        $this->db->from('buku');
        $this->db->join('species','species.id = 
        buku.id_species');
        $this->db->where($where);
        return $this->db->get();
    }
}