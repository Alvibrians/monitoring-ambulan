<div class ="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="h3 mb-0 text-gray-800">Antrian Penjemputan</h4>
    </div>

    <div class="alert alert-success" role="alert">
        <h6 class="alert-heading">Antrian Penjemputan Ambulan</h6>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO</th>
            <th>NIK PASIEN</th>
            <th>NAMA LENGKAP</th>
            <th>RIWAYAT PENYAKIT</th>
            <th>ALAMAT PASIEN</th>
            <th>STATUS</th>
        </tr>

        <?php 
            $no=1;
            foreach($pesan as $psn) : ?>
                
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $psn->nik_pasien ?></td>
                    <td><?php echo $psn->nama_pasien ?></td>
                    <td><?php echo $psn->nama_penyakit ?></td>
                    <td><?php echo $psn->alamat_pasien ?></td>
                    <td><?php 
                    if ($psn->status_ant == "0") {
                        echo "<span class='badge badge-secondary'> Dibatalkan</span>";
                    }elseif ($psn->status_ant == "1"){
                        echo "<span class='badge badge-danger'> Sangat Prioritas </span>";
                    }
                    elseif ($psn->status_ant == "2"){
                        echo "<span class='badge badge-warning'> Prioritas Sedang </span>";
                    }
                    elseif ($psn->status_ant == "3"){
                        echo "<span class='badge badge-info'> Prioritas </span>";
                    }
                    else{
                    }?> 
                    </td>
                </tr>
            <?php endforeach; ?>     

    </table>
</div>