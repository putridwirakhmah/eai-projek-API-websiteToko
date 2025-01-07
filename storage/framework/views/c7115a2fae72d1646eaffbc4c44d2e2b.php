<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Download Bukti Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col">
                <hr class="border" />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h4 class="text-center"><?php echo e($user->name); ?></h4>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr class="border" />
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <h2 class="mb-3" style="color: gray;">Invoice</h2>

                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemProduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $itemProduk->produk_beli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produkBeliItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <p><b>Invoice</b> : #<?php echo e($produkBeliItem->order_id); ?></p>
                <p><b>Metode Pembayaran</b> : <?php echo e($pembayaran->metode); ?></p>
                <p><b>Tanggal Transaksi</b> : <?php echo e($produkBeliItem->tanggal_transaksi); ?></p>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <table class="table table-bordered">
                    <thead class="table-active">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Produk</th>
                            <th>Deskripsi</th>
                            <th>Qty</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        ?>

                        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemProduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $itemProduk->produk_beli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produkBeliItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="text-center">
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($itemProduk->nama); ?></td>
                            <td><?php echo e($itemProduk->deskripsi); ?></td>
                            <td><?php echo e($produkBeliItem->qty); ?></td>
                            <td><?php echo e(number_format($itemProduk->harga, 0, ',', '.')); ?></td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="border" />

        <div class="row mb-3">
            <div class="col">
                <p class="text-center"> Terima kasih telah membeli produk di Tokoku.
                </p>
            </div>
        </div>

        <hr class="border" />

        <div class="row">
            <div class="col">
                <i> Catatan : Harap kirim bukti ke Admin jika ada kendala sesuatu.</i>
            </div>
        </div>
    </div>

</body>

</html><?php /**PATH C:\Users\nurri\Downloads\tokoku-main\tokoku\resources\views/pembayaran/download_bukti_pembayaran.blade.php ENDPATH**/ ?>