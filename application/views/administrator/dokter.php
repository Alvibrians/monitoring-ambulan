<div class ="container-fluid">


    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-md"></i> Dokter
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('administrator/dokter/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Dokter</button>')?>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>KODE DOKTER</th>
            <th>NAMA LENGKAP</th>
            <th>SPESIALIS DOKTER</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php

        $no=1;
        foreach($dokter as $dkr) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dkr->kode_dokter ?></td>
                    <td><?php echo $dkr->nama_dokter ?></td>
                    <td><?php echo $dkr->spesialis_dokter ?></td>
                    <td width="20px"><?php echo anchor('administrator/dokter/detail/'.$dkr->kode_dokter,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?></td>
                    <td width="20px"><?php echo anchor('administrator/dokter/update/'.$dkr->id_dokter,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                    <td width="20px"><?php echo anchor('administrator/dokter/delete/'.$dkr->id_dokter,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
                </tr>

        <?php endforeach; ?>
    </table>
</div>