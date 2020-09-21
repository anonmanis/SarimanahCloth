<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_produk;
 
class Baju extends Controller
{
    public function index()
    {      
        $model = new M_produk();
        $data['baju']  = $model->getBaju()->getResult();
        $data['merk'] = $model->getMerk()->getResult();
        echo view('baju_view', $data);
    }

    public function save()
    {
        $model = new M_produk();
        $avatar = $this->request->getFile('gambar');
        $newName = $avatar->getRandomName();
        $avatar->move(ROOTPATH . 'public/uploads',$newName);
        $data = array(
            'nama_baju'        => $this->request->getPost('nama_baju'),
            'harga'       => $this->request->getPost('harga'),
            'id_merk' => $this->request->getPost('id_merk'),
            'stok' => $this->request->getPost('stok'),
            'gambar' => $newName,
        );
        $model->saveBaju($data);
        return redirect()->to('/baju');
    }

    public function update()
    {
        $model = new M_produk();
        $id = $this->request->getPost('id_baju');
        $data = array(
            'nama_baju'       => $this->request->getPost('nama_baju'),
            'harga'             => $this->request->getPost('harga'),
            'id_merk'           => $this->request->getPost('id_merk'),
            'stok' => $this->request->getPost('stok'),
        );
        $model->updateBaju($data, $id);
        return redirect()->to('/baju');
    }

    public function delete()
    {
        $model = new M_produk();
        $id = $this->request->getPost('id_baju');
        $namagambar = $this->request->getPost('gambar');
        $model->deleteBaju($id, $namagambar);
        return redirect()->to('/baju');
    }
}