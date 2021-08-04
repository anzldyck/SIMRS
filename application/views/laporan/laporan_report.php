<form method="post" action="<?= base_url('laporan');  ?>">
	<div class="form-group">
		<label>Dari Tanggal</label>
		<input type="date" name="dari" class="form-control">
		<?= form_error('dari','<div class="text-small text-danger">','</div>')  ?>
		<label>Sampai Tanggal</label>
		<input type="date" name="sampai" class="form-control">
		<?= form_error('sampai','<div class="text-small text-danger">','</div>')  ?>
	</div>
	<button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>Tampilkan Data</button>
<hr>
<div class="btn-group">
	<a href="<?= base_url('laporan/print/?dari='.set_value('dari').'&sampai='.set_value('sampai')) ?>" class="btn btn-sm btn-success" target="_blank"><i class="fas fa-print"></i>Print</a>
</div>
</form>
<div class="col-sm">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>Tanggal Registrasi</th>
                    <th>No Registrasi</th>
                    <th>Nama Dokter</th>
                    <th>Poliklinik</th>
                    <th>Nama Pasien</th>
                    
                 
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($registrasi as $r) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                            <td><?= date('d-m-Y', strtotime($r['tgl_regis'])); ?></td>
                            <td><?= $r['no_regis']; ?></td>
                            <td><?= $r['nm_dokter']; ?></td>
                            <td><?= $r['nm_poli']; ?></td>
                            <td><?= $r['nm_pasien']; ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                  </tbody>
                </table>
                </div>