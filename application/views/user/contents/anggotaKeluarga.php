        <!--**********************************
            Content body start
        ***********************************-->
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
                                <h4 class="card-title">Data Keluarga</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No. KK</th>
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
                                        </thead>
                                        <tbody>
                                        <?php $no = 1;
                                            foreach ($data_no_kk as $key):
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
                                                    <button type="button" class="btn mb-1 btn-info" >Sunting<span class="btn-icon-right"><i class="fa fa-edit"></i></span>
                                                    </button>
                                                    <button type="button" class="btn mb-1 btn-danger" data-toggle="modal" data-target=".modal-delete">Hapus<span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                                    </button>
                                                 </td>
                                            </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>No. KK</th>
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
                        <form class="form-valide" action="<?= site_url('AdministratorInduk/doAddPegawai') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Kartu Keluarga</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Kartu Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_kk" class="form-control" value="<?= $no_kk?>"required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_lengkap" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nik" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="kelamin" class="form-control">
                                            <option value="laki-laki">LAKI-LAKI</option>
                                            <option value="perempuan">PEREMPUAN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="agama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pendidikan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jenis Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jenis_pekerjaan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="golongan_darah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="status_perkawinan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Perkawinan</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="tanggal_perkawinan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Hubungan Dalam Keluarga</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="status_hub_kel" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kewarganegaraan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Paspor</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_paspor" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. KITAP</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_kitap" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ayah</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ayah" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_ibu" class="form-control" required>
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