<form method="post" action="">
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label for="no_regis">Nomor Registrasi</label>
          <input type="text" class="form-control" name="no_regis" id="no_regis" value="<?= $no_regis ?>" readonly>
          <?= form_error('no_regis','<div class="text-small text-danger">','</div>')  ?> 
      </div>
      <div class="form-group">
          <label for="tgl_regis">Tanggal Registrasi</label>
          <input type="date" class="form-control" id="tgl_regis" name="tgl_regis">
          <?= form_error('tgl_regis','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
        <label>Nama Dokter</label>
        <select name="id_dokter" class="form-control">
          <option value=""></option>
            <?php foreach ($dokter as $d) { ?>
          <option value="<?= $d['id_dokter']; ?>"><?= $d['nm_dokter']; ?></option>
            <?php } ?>
        </select>
        <?php echo form_error('id_dokter','<div class="text-small text-danger">','</div>' ) ?>
      </div>
      <div class="form-group">
        <label>Unit Poliklinik</label>
        <select name="id_poli" class="form-control">
          <option value=""></option>
            <?php foreach ($poliklinik as $po): $selected = ($po['id_poli'] == $id_poli) ? "selected" : "";?>
          <option value="<?= $po['id_poli'] ?>" <?= $selected; ?> ><?= ucfirst($po['nm_poli']) ?> (<?= $po['harga']; ?>)  </option>
            <?php endforeach; ?>
        </select>
        <?php echo form_error('id_poli','<div class="text-small text-danger">','</div>' ) ?>
      </div>
      </div>

      <div class="col-md-6">
      <div class="form-group">
        <label>Nama Pasien</label>
        <select name="id_pasien" class="form-control">
          <option value=""></option>
            <?php foreach ($pasien as $p) { ?>
          <option value="<?php echo $p['id_pasien']; ?>"><?= $p['nm_pasien']; ?></option>
            <?php } ?>
        </select>
        <?php echo form_error('id_pasien','<div class="text-small text-danger">','</div>' ) ?>
      </div>
      <div class="form-group">
          <label for="biaya">Biaya Registrasi</label>
          <input type="text" class="form-control" name="biaya" id="biaya" value="25000" readonly>
          <?= form_error('biaya','<div class="text-small text-danger">','</div>')  ?> 
      </div>
      </div>
   
      

      <div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary">Regist</button>
      </div>

 </div>
</div>

</form>



              <?= $this->session->flashdata('pesan'); ?>
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>No Registrasi</th>
                    <th>Tanggal Registrasi</th>
                    <th>Nama Dokter</th>
                    <th>Poliklinik</th>
                    <th>Harga Poli</th>
                    <th>Nomor RM</th>
                    <th>Nama Pasien</th>
                    <th>Biaya Regist</th>
                    <th>Total Biaya</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($registrasi as $r) : 
                        $totalbiaya = $r['harga'] + $r['biaya'];
                        ?>

                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $r['no_regis']; ?></td>
                        <td><?= $r['tgl_regis']; ?></td>
                        <td><?= $r['nm_dokter']; ?></td>
                        <td><?= $r['nm_poli']; ?></td>
                        <td>Rp. <?= $r['harga']; ?></td>
                        <td><?= $r['no_rm']; ?></td>
                        <td><?= $r['nm_pasien']; ?></td>
                        <td>Rp. <?= $r['biaya']; ?></td>
                        <td><?= ($totalbiaya) ?></td>
                        
                        <td>
                          <a href="<?= base_url('registrasi/hapus/').$r['id_registrasi']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i></a>
                           <a href="<?= base_url('rekam_medis').$r['id_registrasi']; ?>" class="badge badge-info">
                            <i class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                  </tbody>
                </table>