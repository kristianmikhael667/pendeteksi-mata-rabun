<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Halaman Create Nilai Certainty Factor</h3>
            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row mt-3 mb-4">

                        </div>
                        <form action="" method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Gejala : </span>
                                    </div>
                                    <!-- <div class="col-md-12">
											<input type="text" name="gejala_id" class="form-control " style="font-size: 12px;">
										</div> -->
                                </div>
                                <select name="gejala_id" class="form-control " style="font-size: 12px;" required="required">
                                    <option>-Pilih-</option>
                                    <?php $kelompok_gejala = $this->Nilaicf_model->getgejala();
                                    ?>
                                    <?php foreach ($kelompok_gejala->result() as $key) { ?>
                                        <option value="<?php echo $key->id_gejala ?>"><?php echo $key->nama_gejala; ?></option>
                                    <?php } ?>

                                </select>
                                <br>
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Nama Penyakit : </span>
                                    </div>
                                    <!-- <div class="col-md-12">
											<input type="text" name="penyakit_id" class="form-control" style="font-size: 12px;">
										</div> -->
                                </div>
                                <select name="penyakit_id" class="form-control " style="font-size: 12px;" required="required">
                                    <option>-Pilih-</option>
                                    <?php $kelompok_gejala = $this->Nilaicf_model->getpenyakit();
                                    ?>
                                    <?php foreach ($kelompok_gejala->result() as $key) { ?>
                                        <option value="<?php echo $key->id_penyakit ?>"><?php echo $key->nama_penyakit; ?></option>
                                    <?php } ?>

                                </select>
                                <br>
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Nilai MD : </span>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="md" class="form-control" style="font-size: 12px;" required="required">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Nilai MB : </span>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="mb" class="form-control" style="font-size: 12px;" required="required">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
                                <a href="<?php echo site_url('/nilai_cf/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>