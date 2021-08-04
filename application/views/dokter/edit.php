<form method="post" action="">
  <div class="card-body">
     <div class="form-group">
        <input type="hidden" name="id_dokter" value="<?= $dokter['id_dokter']; ?>">
        <label for="kd_dokter">Kode Dokter</label>
        <input type="text" class="form-control" id="kd_dokter" name="kd_dokter" value="<?= $dokter['kd_dokter']; ?>" readonly>
        <?= form_error('kd_dokter','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
         <label for="nm_dokter">Nama Dokter</label>
         <input type="text" class="form-control" name="nm_dokter" id="nm_dokter" value="<?= $dokter['nm_dokter']; ?>">
         <?= form_error('nm_dokter','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
        <label>Spesialis</label>
        <select name="spesialis" class="form-control">
          <option <?php if($dokter['spesialis'] == "Spesialis Anak"){echo "selected='selected'";} echo $dokter['spesialis']; ?> value="Spesialis Anak">Spesialis Anak</option>
          <option <?php if($dokter['spesialis'] == "Spesialis Mata"){echo "selected='selected'";} echo $dokter['spesialis']; ?> value="Spesialis Mata">Spesialis Mata</option>
          <option <?php if($dokter['spesialis'] == "Spesialis Kandungan"){echo "selected='selected'";} echo $dokter['spesialis']; ?> value="Spesialis Kandungan">Spesialis Kandungan</option>
          <option <?php if($dokter['spesialis'] == "Spesialis Penyakit Dalam"){echo "selected='selected'";} echo $dokter['spesialis']; ?> value="Spesialis Penyakit Dalam">Spesialis Penyakit Dalam</option>
          <option <?php if($dokter['spesialis'] == "Spesialis Gigi"){echo "selected='selected'";} echo $dokter['spesialis']; ?> value="Spesialis Gigi">Spesialis Gigi</option>
          <option <?php if($dokter['spesialis'] == "Dokter Umum"){echo "selected='selected'";} echo $dokter['spesialis']; ?> value="Dokter Umum">Dokter Umum</option>
        </select>
        <?php echo form_error('spesialis','<div class="text-small text-danger">','</div>') ?>
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jk" class="form-control">
          <option <?php if($dokter['jk'] == "Laki-Laki"){echo "selected='selected'";} echo $dokter['jk']; ?> value="Laki-Laki">Laki-Laki</option>
          <option <?php if($dokter['jk'] == "Perempuan"){echo "selected='selected'";} echo $dokter['jk']; ?> value="Perempuan">Perempuan</option>
        </select>
        <?php echo form_error('jk','<div class="text-small text-danger">','</div>') ?>
      </div>
      <div class="form-group">
         <label for="alamat">Alamat</label>
         <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $dokter['alamat']; ?>">
         <?= form_error('alamat','<div class="text-small text-danger">','</div>')  ?>
      </div>
      <div class="form-group">
         <label for="no_tlp">Nomor Telpon</label>
         <input type="text" class="form-control" name="no_tlp" id="no_tlp" value="<?= $dokter['no_tlp']; ?>">
         <?= form_error('no_tlp','<div class="text-small text-danger">','</div>')  ?>
      </div>

      <div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary">Submit</button>
          <button type="reset" name="edit" class="btn btn-info">Reset</button>
      </div>
 </div>
</form>