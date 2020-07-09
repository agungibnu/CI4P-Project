<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">


            <a href="/produk/create" class="btn btn-primary mt-3">Tambah Daftar Produk</a>
            <h2 class='mt-2'>Daftar Produk</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <!-- tabel -->
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($produk as $k) :  ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/produk/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $k['produk']; ?></td>
                            <td><?= $k['tahun']; ?></td>
                            <td>

                                <a href="/produk/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <!-- tabel -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>