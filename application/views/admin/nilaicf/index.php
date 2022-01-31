<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Halaman Nilai Certainty Factor</h3>
            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?= $tabel; ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row mt-3 mb-4">
                            <div class="col-md-6 mb-3">
                                <a href="<?php echo site_url('/nilaicf/create') ?>" class="btn btn-round btn-primary mb-5"><i class="fa fa-plus-circle"></i> Tambah Nilai CF</a>
                            </div>
                        </div>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Gejala</th>
                                    <th>Penyakit</th>
                                    <th>Nilai MB</th>
                                    <th>Nilai MD</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kelompok_data as $data) : ?>
                                    <tr>
                                        <td><?php echo ++$start ?></td>
                                        <td><?php echo $data['nama_gejala'] ?></td>
                                        <td><?php echo $data['nama_penyakit'] ?></td>
                                        <td><?php echo $data['mb'] ?></td>
                                        <td><?php echo $data['md'] ?></td>
                                        <td style="text-align: center; width: 200px;">
                                            <a href="<?php echo site_url('/nilaicf/edit/') . $data['gpid'] ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="<?php echo site_url('/nilaicf/hapus/') . $data['gpid'] ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>