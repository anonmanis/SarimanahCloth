<!DOCTYPE html>
<html lang="en">
<?php echo view('nav/header_sidebar_home'); ?>
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
                        </div>
                        <div class="card-body pb-0">
                            <div class="row d-flex align-items-stretch">
                                <?php foreach($baju as $row){ ?>
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                        <div class="card-header text-muted border-bottom-0">
                                            <h2>Produk</h2>
                                        </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="lead"><b><?=$row->nama_baju?></b></h2>
                                                        <p class="text-muted text-sm"> 
                                                        <br> Harga :  Rp <?=$row->harga?>
                                                        <br> Merk : <?=$row->nama_merk?><br>
                                                        <br> Stok : <?=$row->stok?> pcs<br>
                                                        </p>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        <img src="uploads/<?= $row->gambar; ?>" alt="" class="img-circle img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <a href="<?=base_url('Login/')?>" class="btn btn-sm btn-primary" >
                                                <i class="fas fa-user"></i> Beli Produk
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
