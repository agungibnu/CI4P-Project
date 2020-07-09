<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">

            <h2>Form Tambah Data Produk</h2>


            <form action="/produk/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="produk" class="col-sm-2 col-form-label">Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('produk')) ? 'is-invalid' : ''; ?>" id="produk" name="produk" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('produk'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="penjelasan" class="col-sm-2 col-form-label">Penjelasan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penjelasan" name="penjelasan">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tahun" name="tahun">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
                <!-- <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset> -->
                <!-- <div class="form-group row">
                    <div class="col-sm-2">Checkbox</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label>
                        </div>
                    </div>
                </div> -->

            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>