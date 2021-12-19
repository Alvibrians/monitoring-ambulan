<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Detail Pasien 
    </div>

    <table class="table table hover table-bordered table-striped"> 
        
        <?php foreach($detail as $dt) : ?>

            <tr>
                <td>ID PASIEN</td>
                <td><?php echo $dt->nik_pasien; ?></td>
            </tr>
            
            <tr>
                <td>NAMA PASIEN</td>
                <td><?php echo $dt->nama_pasien; ?></td>
            </tr>

            <tr>
                <td>TANGGAL LAHIR PASIEN</td>
                <td><?php echo $dt->tgl_lahir; ?></td>
            </tr>

            <tr>
                <td>JENIS KELAMIN PASIEN</td>
                <td><?php echo $dt->jenis_kelamin; ?></td>
            </tr>

            <tr>
                <td>RIWAYAT PENYAKIT PASIEN</td>
                <td><?php echo $dt->nama_penyakit; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
    
    <?php echo anchor('administrator/pasien','<div class="btn btn-sm btn-primary">Kembali </div>') ?>
    
</div>