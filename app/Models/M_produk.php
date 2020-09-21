<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_produk extends Model
{
    public function getMerk()
    {
        $builder = $this->db->table('merk');
        return $builder->get();
    }

    public function saveMerk($data){
        $query = $this->db->table('merk')->insert($data);
        return $query;
    }

    public function deleteMerk($id)
    {
        $query = $this->db->table('merk')->delete(array('id_merk' => $id));
        return $query;
    }

    public function getBaju()
    {
        $builder = $this->db->table('baju');
        $builder->select('*');
        $builder->join('merk', 'baju.id_merk = merk.id_merk');
        return $builder->get();
    }

    public function saveBaju($data){
        $query = $this->db->table('baju')->insert($data);
        return $query;
    }

    public function updateBaju($data, $id)
    {
        $query = $this->db->table('baju')->update($data, ['id_baju' => $id]);
        return $query;
    }

    public function deleteBaju($id, $namagambar)
    {
        unlink("uploads/".$namagambar);
        $query = $this->db->table('baju')->delete(array('id_baju' => $id));
        return $query;
    }
}