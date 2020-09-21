<!DOCTYPE html>
<html lang="en">
<?php echo view('nav/header_sidebar_admin'); ?>
<head>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</head>
<body>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            List Produk
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Tambah Produk</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>Id Baju</th>
                                            <th>Gambar</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Merk</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($baju as $row):?>
                                        <tr>
                                            <td><?= $row->id_baju;?></td>
                                            <td><img src="uploads/<?= $row->gambar; ?>" class="img-thumbnail" width="70" height="70"></td>
                                            <!-- <td><?= $row->gambar;?></td> -->
                                            <td><?= $row->nama_baju;?></td>
                                            <td>Rp <?= $row->harga;?></td>
                                            <td><?= $row->nama_merk;?></td>
                                            <td><?= $row->stok;?> pcs</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm btn-edit" data-id_baju="<?= $row->id_baju;?>" data-nama="<?= $row->nama_baju;?>" data-harga="<?= $row->harga;?>" data-id_merk="<?= $row->id_merk;?>" data-stok="<?= $row->stok;?>">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-id_baju="<?= $row->id_baju;?>">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <!-- Modal Add Product-->
    <form action="/baju/save" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">             
                <div class="form-group">
                    <label>Nama Baju</label>
                    <input type="text" class="form-control" name="nama_baju" placeholder="Product Name" required>
                </div>
                 
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga" placeholder="Product Price" required>
                </div>
 
                <div class="form-group">
                    <label>Merk</label>
                    <select name="id_merk" class="form-control" required>
                        <option value="">-Select-</option>
                        <?php foreach($merk as $row):?>
                        <option value="<?= $row->id_merk;?>"><?= $row->nama_merk;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control" name="stok" placeholder="Stok (dengan angka)" required>
                </div>

                <div class="form-group">
                    <label>Foto </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="gambar" required>
                        <label class="custom-file-label" for="gambar" >Choose file</label>
                    </div> 
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Product-->
 
    <!-- Modal Edit Product-->
    <form action="/baju/update" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>ID Baju</label>
                    <input class="form-control id_baju" name="id_baju" type="text" placeholder="ID Baju" readonly>
                </div>
             
                <div class="form-group">
                    <label>Nama Baju</label>
                    <input type="text" class="form-control nama_baju" name="nama_baju" placeholder="Product Name" required>
                </div>
                 
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control harga" name="harga" placeholder="Product Price" required>
                </div>
 
                <div class="form-group">
                    <label>Merk</label>
                    <select name="id_merk" class="form-control nama_merk" required>
                        <option value="">-Select-</option>
                        <?php foreach($merk as $row):?>
                        <option value="<?= $row->id_merk;?>"><?= $row->nama_merk;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control stok" name="stok" placeholder="Stok (dengan angka)" required>
                </div>
             
            </div>
            <div class="modal-footer">
                <!-- <input type="hidden" name="product_id" class="product_id"> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
 
    <!-- Modal Delete Product-->
    <form action="/baju/delete" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Anda Yakin Ingin Menghapus Produk Ini ?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_baju" class="id_baju">
                <input type="hidden" name="gambar" class="gambar">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->
 
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
    
            // get Edit Product
            $('.btn-edit').on('click',function(){
                // get data from button edit
                const id = $(this).data('id_baju');
                const nama = $(this).data('nama');
                const harga = $(this).data('harga');
                const merk = $(this).data('id_merk');
                const stok = $(this).data('stok');
                // Set data to Form Edit
                $('.id_baju').val(id);
                $('.nama_baju').val(nama);
                $('.harga').val(harga);
                $('.nama_merk').val(merk).trigger('change');
                $('.stok').val(stok);
                // Call Modal Edit
                $('#editModal').modal('show');
            });
    
            // get Delete Product
            $('.btn-delete').on('click',function(){
                // get data from button edit
                const id = $(this).data('id_baju');
                const gambar = $(this).data('gambar');
                // Set data to Form Edit
                $('.id_baju').val(id);
                $('.gambar').val(gambar);
                // Call Modal Edit
                $('#deleteModal').modal('show');
            });
            
        });
    </script>
</body>
</html>
</div>
<?php echo view('nav/footer'); ?>