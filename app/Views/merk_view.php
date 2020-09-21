<!DOCTYPE html>
<html lang="en">
<?php echo view('nav/header_sidebar'); ?>
<head>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Merk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Merk</li>
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
                            List Merk
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Tambah Merk</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>Id Merk</th>
                                            <th>Merk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($merk as $row):?>
                                        <tr>
                                            <td><?= $row->id_merk;?></td>
                                            <td><?= $row->nama_merk;?></td>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-id_merk="<?= $row->id_merk;?>">Delete</a>
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
    <form action="/merk/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Merk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">             
                <div class="form-group">
                    <label>Nama Merk</label>
                    <input type="text" class="form-control" name="nama_merk" placeholder="Nama Merk">
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
 
    <!-- Modal Delete Product-->
    <form action="/merk/delete" method="post">
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
                <input type="hidden" name="id_merk" class="id_merk">
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
    
            // get Delete Product
            $('.btn-delete').on('click',function(){
                // get data from button edit
                const id = $(this).data('id_merk');
                // Set data to Form Edit
                $('.id_merk').val(id);
                // Call Modal Edit
                $('#deleteModal').modal('show');
            });
            
        });
    </script>
</body>
</html>
</div>
<?php echo view('nav/footer'); ?>