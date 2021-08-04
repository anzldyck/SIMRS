
            <a href="<?= base_url('pasien/tambah'); ?>"type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Input Data Pasien
              </a>
              <?= $this->session->flashdata('pesan'); ?>
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>No Rekam Medis</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Gol. Darah</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telpon</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($pasien as $p) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $p['no_rm']; ?></td>
                        <td><?= $p['nm_pasien']; ?></td>
                        <td><?= $p['jk']; ?></td>
                        <td><?= $p['gol_darah']; ?></td>
                        <td><?= $p['tempat_lahir']; ?></td>
                        <td><?= $p['tgl_lahir']; ?></td>
                        <td><?= $p['alamat']; ?></td>
                        <td><?= $p['no_tlp']; ?></td>
                        <td>
                          <a href="<?= base_url('pasien/detail/').$p['id_pasien']; ?>" class="badge badge-info">
                            <i class="fas fa-eye"></i></a>
                            <a href="<?= base_url('pasien/periksa/').$p['id_pasien']; ?>" class="badge badge-info">
                            <i class="fas fa-eye"></i></a>
                          <a href="<?= base_url('pasien/edit/').$p['id_pasien']; ?>" class="badge badge-warning">
                            <i class="fas fa-edit"></i></a>
                          <a href="<?= base_url('pasien/hapus/').$p['id_pasien']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                  </tbody>
                </table>


   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('pasien/tambah'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="no_rm">Nomor Rekam Medis</label>
          <input type="text" name="no_rm" class="form-control" id="no_rm" value="<?= $no_rm ?>" readonly>
          <?= form_error('no_rm','<div class="text-small text-danger">','</div>')  ?>
        </div>
         <div class="form-group">
          <label for="nm_pasien">Nama Pasien</label>
          <input type="text" name="nm_pasien" class="form-control" id="nm_pasien" placeholder="Masukkan Data" required="required">
          <?= form_error('nm_pasien','<div class="text-small text-danger">','</div>')  ?>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="jk" class="form-control">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <?= form_error('jk','<div class="text-small text-danger">','</div>')  ?>
        </div>
        <div class="form-group">
          <label>Golongan Darah</label>
          <select name="gol_darah" class="form-control">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
          </select>
          <?= form_error('gol_darah','<div class="text-small text-danger">','</div>')  ?>
        </div>
        <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan Data" required="required">
          <?= form_error('tempat_lahir','<div class="text-small text-danger">','</div>')  ?>
        </div>
         <div class="form-group">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Masukkan Data" required="required">
          <?= form_error('tgl_lahir','<div class="text-small text-danger">','</div>')  ?>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Data" required="required">
          <?= form_error('alamat','<div class="text-small text-danger">','</div>')  ?>
        </div>
        <div class="form-group">
          <label for="no_tlp">Nomor Telpon</label>
          <input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="Masukkan Data" required="required">
          <?= form_error('no_tlp','<div class="text-small text-danger">','</div>')  ?>
        </div>
        
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
          