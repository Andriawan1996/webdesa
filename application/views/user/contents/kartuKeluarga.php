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
                                <h4 class="card-title">Data Kartu Keluarga</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No. Kartu Keluarga</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Alamat</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1; 
                                            foreach ($kepkel as $sembarang): 
                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><a href="<?= site_url('Administrator/anggotaKeluarga/'. $sembarang->no_kk) ?>"><?php echo $sembarang->no_kk ?></td></a>
                                                <td><?php echo $sembarang->nama ?></td>
                                                <td><?php echo $sembarang->alamat ?></td>
                                                <td><?php echo $sembarang->rt ?></td>
                                                <td><?php echo $sembarang->rw ?></
                                           </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>No. Kartu Keluarga</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Alamat</th>
                                                <th>RT</th>
                                                <th>RW</th>
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
