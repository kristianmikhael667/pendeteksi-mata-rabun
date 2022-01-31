<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Halaman Edit Nilai Certainty Factor</h3>
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

                        <form action="" method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Gejala : </span>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $nilaicf['nid'] ?>">
                                    <div class="col-md-12" style="margin-bottom: 5px;">
                                        <select name="gejala_id" class="form-control" style="font-size: 12px;">
                                            <?php
                                            foreach ($gejala as $g) {
                                                echo " <option value='$g->id_gejala'";
                                                echo $nilaicf['gejala_id'] == $g->id_gejala ? 'selected' : '';
                                                echo ">$g->nama_gejala</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Penyakit : </span>
                                    </div>
                                    <div class="col-md-12">
                                        <select name="penyakit_id" class="form-control" style="font-size: 12px;">
                                            <?php
                                            foreach ($penyakit as $p) {
                                                echo " <option value='$p->id_penyakit'";
                                                echo $nilaicf['penyakit_id'] == $p->id_penyakit ? 'selected' : '';
                                                echo ">$p->nama_penyakit</option>";
                                            }
                                            ?>
                                        </select>
                                        <!-- <input type="text" name="penyakit_id" class="form-control" style="font-size: 12px;" value="<?php echo $nilaicf['penyakit_id'] ?>"> -->
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Nilai MD : </span>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="md" class="form-control" style="font-size: 12px;" value="<?php echo $nilaicf['md'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-2" style="margin-bottom: 5px;">
                                        <span>Nilai MB : </span>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="mb" class="form-control" style="font-size: 12px;" value="<?php echo $nilaicf['mb'] ?>">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677b; border-color: #51677b;">Update</button>
                                <a href="<?php echo site_url('/nilai_cf/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>