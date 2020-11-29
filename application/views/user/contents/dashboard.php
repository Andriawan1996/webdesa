        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah</h3>
                                <h3 class="card-title text-white">Penduduk</h3>
                                <div class="d-inline-block">
                                    <h1 class="text-white">5082 Orang</h1>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Penduduk</h3>
                                <h3 class="card-title text-white">Laki-Laki</h3>
                                <div class="d-inline-block">
                                    <h1 class="text-white">2800 Orang</h1>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Penduduk</h3>
                                <h3 class="card-title text-white">Perempuan</h3>
                                <div class="d-inline-block">
                                    <h1 class="text-white">4565 Orang</h1>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah</h3>
                                <h3 class="card-title text-white">Pegawai</h3>
                                <div class="d-inline-block">
                                    <h1 class="text-white">16 Orang</h1>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Penduduk</h4>

                                    <!-- Alert Add -->
                                    <?php 
                                    $alert_success = $this->session->flashdata('alert_success');
                                    if($this->session->flashdata('alert_success') == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button><strong><?= $alert_success ?></strong></div>
                                    <?php endif; ?>
                                        <!-- Alert Update -->
                                    <?php 
                                    $alert_primary = $this->session->flashdata('alert_primary');
                                    if($this->session->flashdata('alert_primary') == TRUE) : ?>
                                        <div class="alert alert-primary alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button><strong><?= $alert_primary ?></strong></div>
                                    <?php endif; ?>
                                    <!-- Alert Delete -->
                                    <?php 
                                    $alert_danger = $this->session->flashdata('alert_danger');
                                    if($this->session->flashdata('alert_danger') == TRUE) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button><strong><?= $alert_danger ?></strong></div>
                                    <?php endif; ?>

                                <button style="float: right;" type="button" class="btn mb-1 btn-success" data-toggle="modal" data-target=".modal-create">Tambah<span class="btn-icon-right"><i class="fa fa-user-plus"></i></span>
                                    </button>
                                <button style="float: right;" type="button" class="btn mr-2 btn-success" data-toggle="modal" data-target=".modal-upload">Import<span class="btn-icon-right"><i class="fa fa-upload"></i></span>
                                    </button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No Kartu Keluarga</th>
                                                <th>No Induk Keluarga</th>
                                                <th>Nama Lengkap</th>
                                                <th>Status Hubungan Dalam Keluarga</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Golongan Darah</th>
                                                <th>Agama</th>
                                                <th>Status</th>
                                                <th>SHDRT</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Pekerjaan</th>
                                                <th>Nama Ibu</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Alamat</th>
                                                <th>Nama Provinsi</th>
                                                <th>KAB_KOTA</th>
                                                <th>Nama Kabupaten</th>
                                                <th>Nama Kecamatan </th>
                                                <th>No Kelurahan</th>
                                                <th>Nama Kelurahan</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1;
                                            foreach ($data_penduduk as $key):
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $key->no_kk ?></td>
                                                <td><?php echo $key->nik ?></td>
                                                <td><?php echo $key->nama ?></td>
                                                <td><?php echo $key->shdk ?></td>
                                                <td><?php echo $key->jk ?></td>
                                                <td><?php echo $key->tmpt_lhr ?></td>
                                                <td><?php echo $key->tgl_lhr ?></td>
                                                <td><?php echo $key->gd ?></td>
                                                <td><?php echo $key->agama ?></td>
                                                <td><?php echo $key->status ?></td>
                                                <td><?php echo $key->shdrt ?></td>
                                                <td><?php echo $key->pddk_akhir ?></td>
                                                <td><?php echo $key->pekerjaan ?></td>
                                                <td><?php echo $key->nama_ibu ?></td>
                                                <td><?php echo $key->nama_ayah ?></td>
                                                <td><?php echo $key->nama_kep_kel ?></td>
                                                <td><?php echo $key->alamat ?></td>
                                                <td><?php echo $key->nama_prov ?></td>
                                                <td><?php echo $key->kab_kota ?></td>
                                                <td><?php echo $key->nama_kab ?></td>
                                                <td><?php echo $key->nama_kec ?></td>
                                                <td><?php echo $key->no_kel ?></td>
                                                <td><?php echo $key->nama_kel ?></td>
                                                <td><?php echo $key->rt ?></td>
                                                <td><?php echo $key->rw ?></td>
                                                <td><?php echo $key->ket ?></td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-info" data-toggle="modal" data-target=".modal-update<?= $key->nik ?>">Sunting<span class="btn-icon-right"><i class="fa fa-edit"></i></span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-danger" data-toggle="modal" data-target=".modal-delete<?= $key->nik ?>">Hapus<span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                                    </button>
                                                 </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>No Kartu Keluarga</th>
                                                <th>No Induk Keluarga</th>
                                                <th>Nama Lengkap</th>
                                                <th>Status Hubungan Dalam Keluarga</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Golongan Darah</th>
                                                <th>Agama</th>
                                                <th>Status</th>
                                                <th>SHDRT</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Pekerjaan</th>
                                                <th>Nama Ibu</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Alamat</th>
                                                <th>Nama Provinsi</th>
                                                <th>KAB_KOTA</th>
                                                <th>Nama Kabupaten</th>
                                                <th>Nama Kecamatan (Ibu)</th>
                                                <th>No Kelurahan</th>
                                                <th>Nama Kelurahan</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
    Begin : Modal for Add Data
***********************************-->
<div class="modal fade modal-create" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="form-validation">
                        <form class="form-valide" action="<?= site_url('Administrator/addPenduduk') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Penduduk</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Kartu Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_kk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Induk Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nik" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Hubungan Dalam Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="shdk" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jk" class="form-control">
                                            <option value="L">L</option>
                                            <option value="P">P</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tmpt_lhr" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tgl_lhr" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-9">
                                        <select name="gd" class="form-control">
                                            <option value="-">-</option>
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="ab">AB</option>
                                            <option value="o">O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="agama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="status" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SHDRT</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="shdrt" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pddk_akhir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pekerjaan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ibu" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ayah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kepala Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kep_kel" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Provinsi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_prov" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kab Kota</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kab_kota" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kabupaten</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kab" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kecamatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kec" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No Kelurahan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_kel" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kelurahan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kel" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RT</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="rt" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RW</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="rw" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket" class="form-control" required>
                                    </div>
                                </div>
                            </div>   

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Tambahkan Data</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
    End : Modal for Add Data
***********************************-->

<!--**********************************
    Begin : Modal for Update Data
***********************************-->
        <?php
        foreach ($data_penduduk as $key) {
            $id = $key->nik;

        ?>
            <div class="modal fade modal-update<?= $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="form-validation">
                            <form class="form-valide" action="<?= site_url('Administrator/updatePenduduk/' . $id) ?>" method="POST" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sunting Pekerjaan</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Kartu Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_kk" class="form-control" value="<?= $key->no_kk ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Induk Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nik" class="form-control" value="<?= $key->nik ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" class="form-control" value="<?= $key->nama ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Hubungan Dalam Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="shdk" class="form-control" value="<?= $key->shdk ?>" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jk" class="form-control" value="<?= $key->jk ?>" required>
                                            <option value="L" <?php if($key->jk == 'L'){echo 'selected';} ?> >L</option>
                                            <option value="P" <?php if($key->jk == 'P'){echo 'selected';} ?> >P</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tmpt_lhr" class="form-control" value="<?= $key->tmpt_lhr ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tgl_lhr" class="form-control" value="<?= $key->tgl_lhr ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-9">
                                        <select name="gd" class="form-control" value="<?= $key->gd ?>" required>
                                            <option value="-">-</option>
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="ab">AB</option>
                                            <option value="o">O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="agama" class="form-control" value="<?= $key->agama ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="status" class="form-control" value="<?= $key->status ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">SHDRT</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="shdrt" class="form-control" value="<?= $key->shdrt ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pddk_akhir" class="form-control" value="<?= $key->pddk_akhir ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pekerjaan" class="form-control" value="<?= $key->pekerjaan ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ibu" class="form-control" value="<?= $key->nama_ibu ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ayah" class="form-control" value="<?= $key->nama_ayah ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kepala Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kep_kel" class="form-control" value="<?= $key->nama_kep_kel ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamat" class="form-control" value="<?= $key->alamat ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Provinsi</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_prov" class="form-control" value="<?= $key->nama_prov ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kab Kota</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kab_kota" class="form-control" value="<?= $key->kab_kota ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kabupaten</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kab" class="form-control" value="<?= $key->nama_kab ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kecamatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kec" class="form-control" value="<?= $key->nama_kec ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No Kelurahan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_kel" class="form-control" value="<?= $key->no_kel ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kelurahan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_kel" class="form-control" value="<?= $key->nama_kel ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RT</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="rt" class="form-control" value="<?= $key->rt ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">RW</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="rw" class="form-control" value="<?= $key->rw ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ket" class="form-control" value="<?= $key->ket ?>" required>
                                    </div>
                                </div>
                             </div>   
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Sunting Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--**********************************
    End : Modal for Update Data
***********************************-->

 <!--**********************************
    Begin : Modal for Delete Data
***********************************-->
        <?php
        foreach ($data_penduduk as $key) {
            $id = $key->nik;
        ?>
            <div class="modal fade modal-delete<?= $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <form method="POST" action="<?= site_url('Administrator/deletePenduduk/' . $id) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title">Hapus data</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">Yakin ingin menghapus data (<?= $key->nik?>) ?</div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--**********************************
    End : Modal for Delete Data
***********************************-->

        <!--**********************************
    Begin : Modal for Upload Data
***********************************-->
<div class="modal fade modal-upload" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="form-validation">
                        <form class="form-valide" action="<?= site_url('Administrator/sembarangKau') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Penduduk</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="testing" class="form-control" required>
                                    </div>
                                </div>
                            </div>   

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Tambahkan Data</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
    End : Modal for Upload Data
***********************************-->