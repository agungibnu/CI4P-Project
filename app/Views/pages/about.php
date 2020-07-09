<!-- memanggil tamplate untuk page about -->
<?= $this->extend('layout/template'); ?>
<!-- ---------------------------------- -->
<!-- memberitahu ini adalah isi konten di page about -->
<?= $this->section('content'); ?>
<!-- ---------------------------------------------- -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Halaman about</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nam, quasi laboriosam incidunt eaque in. Enim aperiam quas necessitatibus vitae minima unde saepe! Reiciendis cupiditate illo cum, molestiae vel id.</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>