    <!-- memanggil tamplate untuk page contact -->
    <?= $this->extend('layout/template'); ?>
    <!-- ---------------------------------- -->
    <!-- memberitahu ini adalah isi konten di page contact -->
    <?= $this->section('content'); ?>
    <!-- ---------------------------------------------- -->
    <div class="container">
        <div class="row">
            <div class="col">

                <h2>Contact US</h2>
                <?php foreach ($alamat as $a) : ?>
                    <ul>
                        <li><?= $a['tipe']; ?></li>
                        <li><?= $a['alamat']; ?></li>
                        <li><?= $a['kota']; ?></li>
                    </ul>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>