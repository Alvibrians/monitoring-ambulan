<div class ="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-plus fa-sm"></i> Form Input Tambah Data Ambulan
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo base_url('administrator/ambulan/input_aksi') ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipe Ambulan</label>
                            <select name="kode_tipeamb" class="form-control">
                                <option value=""> -- Pilih Tipe Ambulan -- </option>
                                <?php foreach($tipe_ambulan as $tp) : ?>
                                    <option value="<?php echo $tp->kode_tipeamb ?>">
                                <?php echo $tp->nama_tipeamb ?></option>
                                <?php endforeach; ?>
                            </select>
                            
                            <div class="form-group">
                                <label>MAC ADDRESS</label>
                                <input type="text" name="macadd_amb" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>NOMOR POLISI</label>
                                <input type="text" name="nopol_amb" class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                                <label>STATUS</label>
                                <select name="status_amb" class="form-control">
                                    <option value=""> -- Pilih Status -- </option>
                                    <option value="1"> Tersedia </option>
                                    <option value="0"> Tidak Tersedia </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>GAMBAR</label>
                                <input type="file" name="gambar_amb" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan </button>
                            <button type="reset" class="btn btn-sm btn-danger">Reset </button>
                            <?php echo anchor('administrator/ambulan','<div class="btn btn-sm btn-primary">Kembali </div>') ?>
                    </div>
                </div>
            </form>
        </div>
    </div>



</div>