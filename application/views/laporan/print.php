
<h1 style="text-align: center">Laporan</h1>
<table>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?= date('d-M-Y', strtotime($_GET['dari'])); ?></td>
	</tr>
	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?= date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
	</tr>
</table>

<table class="table table-bordered table-striped mt-4">
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
    <script type="text/javascript">
    	window.print();
    </script>