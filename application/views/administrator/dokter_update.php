<div class ="container-fluid">

    <div class="alert alert-success" role="alert">
            <i class="fas fa-user-md"></i> Form Update Dokter
    </div>

    <?php foreach($dokter as $dkr) : ?>

        <form method="post" action="<?php echo base_url('administrator/dokter/update_aksi') ?>">

            <div class="form-group">
                <label>Kode Dokter</label>
                <input type="hidden" name="id_dokter" value="<?php echo $dkr->id_dokter ?>">
                <input type="text" name="kode_dokter" class="form-control" value="<?php echo $dkr->kode_dokter ?>">
            </div>

            <div class="form-group">
                <label>Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" value="<?php echo $dkr->nama_dokter ?>">
            </div>

            <div class="form-group">
                <label>Telepon Dokter</label>
                <input type="text" name="telp_dokter" class="form-control" value="<?php echo $dkr->telp_dokter ?>">
            </div>

            <div class="form-group">
                <label>Alamat Dokter</label>
                <input type="text" name="alamat_dokter" class="form-control" value="<?php echo $dkr->alamat_dokter ?>">
            </div>

            <div class="form-group">
                <label>Spesialis Dokter</label>
                <input type="text" name="spesialis_dokter" class="form-control" value="<?php echo $dkr->spesialis_dokter ?>">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Simpan </button>
            <?php echo anchor('administrator/dokter','<div class="btn btn-sm btn-primary">Kembali </div>') ?>
        </form>
    
    <?php endforeach; ?>

</div>