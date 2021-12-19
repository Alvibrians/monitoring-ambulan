<div class ="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-ambulance"></i> Ambulan
    </div>

    <a href="ambulan/tambah_ambulan" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Ambulan </a>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>GAMBAR</th>
            <th>TIPE AMBULAN</th>
            <th>PLAT NOMOR</th>
            <th>MAC ADDRESS</th>
            <th>STATUS</th>
            <th>AKSI</th>
        </tr>

        <?php 
            $no=1;
            foreach($ambulan as $amb) : ?>
                
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td> 
                        <img width="80px" src="<?php echo base_url().'assets/upload/'.$amb->gambar_amb ?>">
                    </td>
                    <td><?php echo $amb->nama_tipeamb ?></td>
                    <td><?php echo $amb->nopol_amb ?></td>
                    <td><?php echo $amb->macadd_amb ?></td>
                    <td><?php 
                    if ($amb->status_amb == "0") {
                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                    }else{
                        echo "<span class='badge badge-primary'> Tersedia </span>";
                    }?>
                    </td>
                    <td> 
                        <a href="<?php echo base_url('administrator/ambulan/detail/').$amb->id_ambulan ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                        <a href="<?php echo base_url('administrator/ambulan/update/') .$amb->id_ambulan ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo base_url('administrator/ambulan/delete/').$amb->id_ambulan ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>     
    </table>
</div>