<form method="post" action="">
  <div class="card-body">
    <div class="form-group">
        <label for="no_rm">Nomor RM</label>
         <input type="text" class="form-control" name="no_rm" id="no_rm" value="<?= $pasien['no_rm'] ?>" readonly>
         <?= form_error('no_rm','<div class="text-small text-danger">','</div>')  ?> 
      </div>
     <div class="form-group">
        <label for="tgl_periksa">Tanggal Periksa</label>
        <input type="date" class="form-control" id="tgl_periksa" name="tgl_periksa">
        <?= form_error('tgl_periksa','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
        <label for="id_pasien">Nama Pasien</label>
         <input type="text" class="form-control" name="id_pasien" id="id_pasien" value="<?= $pasien['nm_pasien']; ?>" readonly>
         <?= form_error('id_pasien','<div class="text-small text-danger">','</div>')  ?> 
      </div>
     <div class="form-group">
        <label for="keluhan">Keluhan</label>
         <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Masukkan Keluhan" required>
         <?= form_error('keluhan','<div class="text-small text-danger">','</div>')  ?> 
      </div>
      <div class="form-group">
        <label for="tensi">Tensi</label>
         <input type="text" class="form-control" name="tensi" id="tensi" placeholder="Masukkan Tensi" required>
         <?= form_error('tensi','<div class="text-small text-danger">','</div>')  ?> 
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
        <label for="diagnosa">Diagnosa</label>
         <input type="text" class="form-control" name="diagnosa" id="diagnosa" placeholder="Masukkan Diagnosa" required>
         <?= form_error('diagnosa','<div class="text-small text-danger">','</div>')  ?> 
      </div>
      <div class="form-group">
        <label>Unit Poliklinik</label>
        <select name="id_poli" class="form-control">
          <option value=""></option>
            <?php foreach ($poliklinik as $po) { ?>
          <option value="<?= $po['id_poli']; ?>"><?= $po['nm_poli']; ?></option>
            <?php } ?>
        </select>
      <?php echo form_error('id_poli','<div class="text-small text-danger">','</div>' ) ?>
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
     
      <div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary">Regist</button>
      </div>
 </div>
</form>
              <?= $this->session->flashdata('pesan'); ?>
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>Nomor RM</th>
                    <th>Tanggal Periksa</th>
                    <th>Nama Pasien</th>
                    <th>Keluhan</th>
                    <th>Tensi</th>
                    <th>Nama Dokter</th>
                    <th>Diagnosa</th>
                    <th>Poliklinik</th>
                    <th>Obat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($rkmedis as $rm) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $rm['no_rm']; ?></td>
                        <td><?= $rm['tgl_periksa']; ?></td>
                        <td><?= $pasien['nm_pasien']; ?></td>
                        <td><?= $rm['keluhan']; ?></td>
                        <td><?= $rm['tensi']; ?></td>
                        <td><?= $rm['nm_dokter']; ?></td>
                        <td><?= $rm['diagnosa']; ?></td>
                        <td><?= $rm['nm_poli']; ?></td>
                        <td><?= $rm['nm_obat']; ?></td>
                        <td>
                          <a href="<?= base_url('pasien/delete/').$rm['no_rm']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i></a>
                          <a href="<?= base_url('pasien/resep/').$rm['no_rm']; ?>" class="badge badge-info" onclick="return confirm('Ingin membuat Resep?')"> <i class="fas fa-eye"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                  </tbody>
                </table>