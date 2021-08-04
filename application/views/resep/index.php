<form method="post" action="">
  <div class="card-body">
     <div class="form-group">
        <label for="kd_resep">Kode Resep</label>
         <input type="text" class="form-control" name="kd_resep" id="kd_resep" value="<?= $kd_resep ?>" readonly>
         <?= form_error('kd_resep','<div class="text-small text-danger">','</div>')  ?> 
      </div>
       <!-- <div class="form-group">
        <label>Kode Resep</label>
        <select name="id_resep" class="form-control">
          <option value=""></option>
            <?php foreach ($resep as $rs) { ?>
          <option value="<?= $rs['id_resep']; ?>"><?= $rs['kd_resep']; ?></option>
            <?php } ?>
        </select>
      <?php echo form_error('id_resep','<div class="text-small text-danger">','</div>' ) ?>
      </div> -->
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
        <label>Obat</label>
        <select name="id_obat" class="form-control">
          <option value=""></option>
            <?php foreach ($obat as $o) { ?>
          <option value="<?= $o['id_obat']; ?>"><?= $o['nm_obat']; ?></option>
            <?php } ?>
        </select>
      <?php echo form_error('id_obat','<div class="text-small text-danger">','</div>' ) ?>
      </div>
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
        <label for="keterangan">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan">
        <?= form_error('keterangan','<div class="text-small text-danger">','</div>')  ?>
      </div>

      <div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary">Tambah</button>
      </div>
 </div>
</form>     


              <?= $this->session->flashdata('pesan'); ?>
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>Kode Resep</th>
                    <th>Nama Dokter</th>
                    <th>Nama Obat</th>
                    <th>Nama Pasien</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($resep as $rs) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $rs['kd_resep']; ?></td>
                        <td><?= $rs['nm_dokter']; ?></td>
                        <td><?= $rs['nm_obat']; ?></td>
                        <td><?= $rs['nm_pasien']; ?></td>
                        <td><?= $rs['keterangan']; ?></td>
                        <td>
                          <a href="<?= base_url('resep/hapus/').$rs['id_resep']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                  </tbody>
                </table>