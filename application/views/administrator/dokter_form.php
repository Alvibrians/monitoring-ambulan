<div class ="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-plus fa-sm"></i> Form Input Tambah Dokter
    </div>

    <form method="post" action="<?php echo base_url('administrator/dokter/input_aksi') ?>">
        <div class="form-group">
            <label>Kode Dokter</label>
            <input type="text" name="kode_dokter" placeholder="Masukkan Kode Dokter" class="form-control">
            <?php echo form_error('kode_dokter', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" placeholder="Masukkan Nama Dokter" class="form-control">
            <?php echo form_error('nama_dokter', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Telepon Dokter</label>
            <input type="text" name="telp_dokter" placeholder="Masukkan Telepon Dokter" class="form-control">
            <?php echo form_error('telp_dokter', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Alamat Dokter</label>
            <input type="text" name="alamat_dokter" placeholder="Masukkan Alamat Dokter" class="form-control">
            <?php echo form_error('alamat_dokter', '<div class="text-danger small" ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Spesialis Dokter</label>
            <input type="text" name="spesialis_dokter" placeholder="Masukkan Spesialis Dokter" class="form-control">
            <?php echo form_error('spesialis_dokter', '<div class="text-danger small" ml-3>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Simpan </button>
        <?php echo anchor('administrator/dokter','<div class="btn btn-sm btn-primary">Kembali </div>') ?>

    </form>

</div>