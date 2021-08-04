<form method="post" action="">
  <div class="card-body">
    <div class="form-group">
        <input type="hidden" name="id_obat" value="<?= $obat['id_obat']; ?>">
        <label for="kd_obat">Kode Obat</label>
        <input type="text" class="form-control" id="kd_obat" name="kd_obat" value="<?= $obat['kd_obat']; ?>" readonly>
        <?= form_error('kd_obat','<div class="text-small text-danger">','</div>')  ?>
      </div>
     <div class="form-group">
        <label for="nm_obat">Nama Obat</label>
         <input type="text" class="form-control" name="nm_obat" id="nm_obat" value="<?= $obat['nm_obat']; ?>">
         <?= form_error('nm_obat','<div class="text-small text-danger">','</div>')  ?>
        
      </div>
      <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $obat['keterangan']; ?>">
        <?= form_error('keterangan','<div class="text-small text-danger">','</div>')  ?>
      </div>

      <div class="card-footer">
          <button type="submit" name="edit" class="btn btn-primary">Submit</button>
          <button type="reset" name="edit" class="btn btn-info">Reset</button>
      </div>
 </div>
</form>