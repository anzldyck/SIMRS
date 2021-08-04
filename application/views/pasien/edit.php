<form method="post" action="">
  <div class="card-body">
     <div class="form-group">
        <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">
        <label for="no_rm">Nomor Rekam Medis</label>
        <input type="text" class="form-control" id="no_rm" name="no_rm" value="<?= $pasien['no_rm']; ?>">
        <?= form_error('no_rm','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
         <label for="nm_pasien">Nama Pasien</label>
         <input type="text" class="form-control" name="nm_pasien" id="nm_pasien" value="<?= $pasien['nm_pasien']; ?>">
         <?= form_error('nm_pasien','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jk" class="form-control">
          <option <?php if($pasien['jk'] == "Laki-Laki"){echo "selected='selected'";} echo $pasien['jk']; ?> value="Laki-Laki">Laki-Laki</option>
          <option <?php if($pasien['jk'] == "Perempuan"){echo "selected='selected'";} echo $pasien['jk']; ?> value="Perempuan">Perempuan</option>
        </select>
        <?php echo form_error('jk','<div class="text-small text-danger">','</div>') ?>
      </div>
      <div class="form-group">
        <label>Golongan Darah</label>
        <select name="gol_darah" class="form-control">
          <option <?php if($pasien['gol_darah'] == "A"){echo "selected='selected'";} echo $pasien['gol_darah']; ?> value="A">A</option>
          <option <?php if($pasien['gol_darah'] == "B"){echo "selected='selected'";} echo $pasien['gol_darah']; ?> value="B">B</option>
          <option <?php if($pasien['gol_darah'] == "AB"){echo "selected='selected'";} echo $pasien['gol_darah']; ?> value="AB">AB</option>
          <option <?php if($pasien['gol_darah'] == "O"){echo "selected='selected'";} echo $pasien['gol_darah']; ?> value="O">O</option>
        </select>
        <?php echo form_error('gol_darah','<div class="text-small text-danger">','</div>') ?>
      </div>
      <div class="form-group">
         <label for="tempat_lahir">Tempat Lahir</label>
         <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $pasien['tempat_lahir']; ?>">
         <?= form_error('tempat_lahir','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $pasien['tgl_lahir']; ?>"> 
          <?= form_error('tgl_lahir','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
         <label for="alamat">Alamat</label>
         <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $pasien['alamat']; ?>">
         <?= form_error('alamat','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
         <label for="no_tlp">Nomor Telpon</label>
         <input type="text" class="form-control" name="no_tlp" id="no_tlp" value="<?= $pasien['no_tlp']; ?>">
         <?= form_error('no_tlp','<div class="text-small text-danger">','</div>')  ?>
      </div>

      <div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary">Submit</button>
          <button type="reset" name="edit" class="btn btn-info">Reset</button>
      </div>
 </div>
</form>