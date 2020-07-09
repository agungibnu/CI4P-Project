<!-- memanggil tamplate -->
<?= $this->extend('layout/template'); ?>

<!-- bagian konten -->
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <h2 class='mt-2'>Pengalaman Organisasi dan Kompetisi</h2>
            <!-- tabel -->
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Organisasi</th>
                        <th scope="col">Sub Riset</th>
                        <th scope="col">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Divisi Roket Unikom</td>
                        <td>Software dan Mekanik</td>
                        <td>2015-2020</td>
                    </tr>


                    <!-- tabel -->
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kompetisi</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Komurindo 2017</td>
                                <td>Wahana Sistem Kendali</td>
                                <td>2017</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Kontes Robot Terbang Indonesia 2018</td>
                                <td>Technology Development</td>
                                <td>2018</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Komurindo 2018-109</td>
                                <td>Wahana Sistem Kendali</td>
                                <td>2018-2019</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- tabel -->

        </div>
    </div>
</div>

<?= $this->endSection(); ?>