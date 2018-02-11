<script src="<?php echo base_url() ?>assets/main/js/surat_masuk.js" type="text/javascript"></script>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card card-nav-tabs">
            <div class="card-header" data-background-color="orange">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="active">
                                <a href="#profile" data-toggle="tab">
                                    <i class="material-icons">list</i> Surat Masuk
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#messages" data-toggle="tab">
                                    <i class="material-icons">add_box</i> Tambah Surat
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <tr>
                                    <th>NO</th>
                                    <th>NO. SURAT</th>
                                    <th>PENGIRIM</th>
                                    <th>TANGGAL KIRIM</th>
                                    <th>TANGGAL TERIMA</th>
                                    <th>PERIHAL</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SMKTELKOM/10/10/2017</td>
                                    <td>Inagata, Inc.</td>
                                    <td>2018-01-01</td>
                                    <td>2018-01-28</td>
                                    <td>Kerjasama123</td>
                                    <td>button-button</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="messages">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="tanggalTerima">Tanggal Terima</label>
                                <input type="date" class="form-control" id="tanggalTerima">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tanggalSurat">Tanggal Surat</label>
                                <input type="date" class="form-control" id="tanggalSurat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nomorSurat">Nomor Surat</label>
                                <input type="text" class="form-control" id="nomorSurat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="pengirim">Pengirim</label>
                                <input type="text" class="form-control" id="pengirimSurat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tujuan">Tujuan</label>
                                <input type="text" class="form-control" id="tujuanSurat">
                            </div>
                            <div class="col-md-4" style=" margin-top: 3.9%; ">
                                <label for="fileupload">File Surat</label>
                                <input type="file" id="fileupload">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="subjekSurat">Subjek</label>
                                <textarea class="form-control" id="subjekSurat" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deskripsiSurat">Deskripsi</label>
                                <textarea class="form-control" id="deskripsiSurat" rows="3"></textarea>
                            </div>
                            <div class="col-md-4" style=" margin-top: 6.9%; ">
                                <button class="btn btn-success btn-md">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div
</div>

<!-- Sart Modal -->
<div class="modal fade" id="tambahSuratMasukModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggalTerima">Tanggal Terima</label>
                        <input type="date" class="form-control" id="tanggalTerima">
                    </div>
                    <div class="form-group">
                        <label for="nomorSurat">Nomor Surat</label>
                        <input type="text" class="form-control" id="nomorSurat">
                    </div>
                    <div class="form-group">
                        <label for="tanggalSurat">Tanggal Surat</label>
                        <input type="date" class="form-control" id="tanggalSurat">
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim</label>
                        <input type="text" class="form-control" id="pengirimSurat">
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <input type="text" class="form-control" id="tujuanSurat">
                    </div>
                    <div class="form-group">
                        <label for="subjekSurat">Subjek</label>
                        <textarea class="form-control" id="subjekSurat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="deskripsiSurat">Deskripsi</label>
                        <textarea class="form-control" id="deskripsiSurat" rows="3"></textarea>
                    </div>
                        <label for="fileupload">File Surat</label>
                        <input type="file" id="fileupload">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple">Nice Button</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->