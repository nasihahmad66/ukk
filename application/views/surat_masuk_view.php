<script src="<?php echo base_url() ?>assets/main/js/surat_masuk.js" type="text/javascript"></script>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card card-nav-tabs">
            <div class="card-header" data-background-color="orange">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" id="mytabs" data-tabs="tabs">
                            <li class="active">
                                <a href="#listSuratMasuk" data-toggle="tab">
                                    <i class="material-icons">list</i> Surat Masuk
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#tambahSuratMasuk" data-toggle="tab">
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
                    <div class="tab-pane active" id="listSuratMasuk">
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
                            <tbody id="listSurat">
                                <!-- <tr>
                                    <td>1</td>
                                    <td>SMKTELKOM/10/10/2017</td>
                                    <td>Inagata, Inc.</td>
                                    <td>2018-01-01</td>
                                    <td>2018-01-28</td>
                                    <td>Kerjasama123</td>
                                    <td>button-button</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tambahSuratMasuk">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="tanggal_terima">Tanggal Terima</label>
                                <input type="date" class="form-control" id="tanggal_terima">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tangal_surat">Tanggal Surat</label>
                                <input type="date" class="form-control" id="tangal_surat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nomor_surat">Nomor Surat</label>
                                <input type="text" class="form-control" id="nomor_surat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="pengirim_surat">Pengirim</label>
                                <input type="text" class="form-control" id="pengirim_surat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tujuan_surat">Tujuan</label>
                                <input type="text" class="form-control" id="tujuan_surat">
                            </div>
                            <div class="col-md-4" style=" margin-top: 3.9%; ">
                                <label for="file_upload">File Surat</label>
                                <input type="file" id="file_upload">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="subjek_surat">Subjek</label>
                                <textarea class="form-control" id="subjek_surat" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                            </div>
                            <div class="col-md-4" style=" margin-top: 6.9%; ">
                                <button class="btn btn-success btn-md" onclick="suratmasuk.saveSuratMasuk()">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div
</div>