<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_produk;
 
class Merk extends Controller
{
    public function index()
    {
        $model = new M_produk();
        $data['merk'] = $model->getMerk()->getResult();
        echo view('merk_view', $data);
    }

    public function save()
    {
        $model = new M_produk();
        $data = array(
            'nama_merk'        => $this->request->getPost('nama_merk'),
        );
        $model->saveMerk($data);
        return redirect()->to('/Merk');
    }

    public function delete()
    {
        $model = new M_produk();
        $id = $this->request->getPost('id_merk');
        $model->deleteMerk($id);
        return redirect()->to('/Merk');
    }
}