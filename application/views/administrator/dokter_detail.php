<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Dokter 
    </div>

    <table class="table table hover table-bordered table-striped"> 
        
        <?php foreach($detail as $dt) : ?>

            <tr>
                <td>KODE DOKTER</td>
                <td><?php echo $dt->kode_dokter; ?></td>
            </tr>
            
            <tr>
                <td>NAMA DOKTER</td>
                <td><?php echo $dt->nama_dokter; ?></td>
            </tr>

            <tr>
                <td>TELEPON DOKTER</td>
                <td><?php echo $dt->telp_dokter; ?></td>
            </tr>

            <tr>
                <td>ALAMAT DOKTER</td>
                <td><?php echo $dt->alamat_dokter; ?></td>
            </tr>

            <tr>
                <td>SPESIALIS DOKTER</td>
                <td><?php echo $dt->spesialis_dokter; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
    
    <?php echo anchor('administrator/dokter','<div class="btn btn-sm btn-primary">Kembali </div>') ?>
    
</div>