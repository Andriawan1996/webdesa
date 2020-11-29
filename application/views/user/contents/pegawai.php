<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pegawai</h4>
                                <button style="float: right;" type="button" class="btn mb-1 btn-success" data-toggle="modal" data-target=".modal-create">Tambah<span class="btn-icon-right"><i class="fa fa-user-plus"></i></span>
                                    </button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>NIP</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Pangkat/Golongan</th>
                                                <th>TMT Pangkat</th>
                                                <th>Jabatan</th>
                                                <th>TMT Jabatan</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Tahun Lulus</th>
                                                <th>Tingkat Ijazah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1; 
                                            foreach ($data_pegawai as $sembarang): 
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $sembarang->nama_pegawai ?></td>
                                                <td><?php echo $sembarang->nip ?></td>
                                                <td><?php echo $sembarang->tempat_lahir ?></td>
                                                <td><?php echo $sembarang->tanggal_lahir ?></td>
                                                <td><?php echo $sembarang->pangkat ?></td>
                                                <td><?php echo $sembarang->tmt_pangkat ?></td>
                                                <td><?php echo $sembarang->jabatan ?></td>
                                                <td><?php echo $sembarang->tmt_jabatan ?></td>
                                                <td><?php echo $sembarang->pendidikan_terakhir ?></td>
                                                <td><?php echo $sembarang->tahun_lulus ?></td>
                                                <td><?php echo $sembarang->tingkat_ijazah ?></td>
                                                <td>
                                                    <button type="button" class="btn mb-1 btn-info" data-toggle="modal" data-target=".modal-update<?= $sembarang->nip ?>">Sunting<span class="btn-icon-right"><i class="fa fa-edit"></i></span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-danger" data-toggle="modal" data-target=".modal-delete<?= $sembarang->nip ?>">Hapus<span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                                    </button>
                                                 </td>
                                            </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>NIP</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Pangkat/Golongan</th>
                                                <th>TMT Pangkat</th>
                                                <th>Jabatan</th>
                                                <th>TMT Jabatan</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Tahun Lulus</th>
                                                <th>Tingkat Ijazah</th>
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
    Begin : Modal for Add Data
***********************************-->
<div class="modal fade modal-create" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="form-validation">
                        <form class="form-valide" action="<?= site_url('Administrator/addPegawai') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Pegawai</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_pegawai" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nip" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tempat_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pangkat</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pangkat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TMT Pangkat</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tmt_pangkat" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jabatan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">TMT Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tmt_jabatan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pendidikan_terakhir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="tahun_lulus" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tingkat Ijazah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="tingkat_ijazah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Tambahkan Data</button>
                                </div>
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
        foreach ($data_pegawai as $sembarang) {
            $id = $sembarang->nip;

        ?>
            <div class="modal fade modal-update<?= $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="form-validation">
                            <form class="form-valide" action="<?= site_url('Administrator/updatePegawai/' . $id) ?>" method="POST" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sunting SHDK</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_pegawai" class="form-control" value="<?= $sembarang->nama_pegawai ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIP</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nip" class="form-control" value="<?= $sembarang->nip ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tempat_lahir" class="form-control" value="<?= $sembarang->tempat_lahir ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $sembarang->tanggal_lahir ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pangkat</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pangkat" class="form-control" value="<?= $sembarang->pangkat ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">TMT Pangkat</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tmt_pangkat" class="form-control" value="<?= $sembarang->tmt_pangkat ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jabatan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="jabatan" class="form-control" value="<?= $sembarang->jabatan ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">TMT Jabatan</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="tmt_jabatan" class="form-control" value="<?= $sembarang->tmt_jabatan ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="pendidikan_terakhir" class="form-control" value="<?= $sembarang->pendidikan_terakhir ?>"required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="tahun_lulus" class="form-control" value="<?= $sembarang->tahun_lulus ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tingkat Ijazah</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tingkat_ijazah" class="form-control" value="<?= $sembarang->tingkat_ijazah ?>" required>
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
        foreach ($data_pegawai as $sembarang) {
            $id = $sembarang->nip;
        ?>
            <div class="modal fade modal-delete<?= $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <form method="POST" action="<?= site_url('Administrator/deletePegawai/' . $id) ?>">
                            <div class="modal-header">
                                <h5 class="modal-title">Hapus data</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">Yakin ingin menghapus data (<?= $sembarang->nip?>) ?</div>
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