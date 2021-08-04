
            <a href="<?= base_url('dokter/tambah'); ?>"type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Input Data Dokter
              </a>
              <?= $this->session->flashdata('pesan'); ?>
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>Kode Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telpon</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($dokter as $d) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $d['kd_dokter']; ?></td>
                        <td><?= $d['nm_dokter']; ?></td>
                        <td><?= $d['spesialis']; ?></td>
                        <td><?= $d['jk']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['no_tlp']; ?></td>
                        <td>
                          <a href="<?= base_url('dokter/edit/').$d['id_dokter']; ?>" class="badge badge-warning">
                            <i class="fas fa-edit"></i></a>
                          <a href="<?= base_url('dokter/hapus/').$d['id_dokter']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i></a>
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
      <form action="<?= base_url('dokter/tambah'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="kd_dokter">Kode Dokter</label>
          <input type="text" name="kd_dokter" class="form-control" id="kd_dokter" value="<?= $kd_dokter ?>" readonly>
          <?= form_error('kd_dokter','<div class="text-small text-danger">','</div>')  ?>
        </div>
         <div class="form-group">
          <label for="nm_dokter">Nama Dokter</label>
          <input type="text" name="nm_dokter" class="form-control" id="nm_dokter" placeholder="Masukkan Data" required="required">
          <?= form_error('nm_dokter','<div class="text-small text-danger">','</div>')  ?>
        </div>
         <div class="form-group">
          <label>Spesialis</label>
          <select name="spesialis" class="form-control">
            <option value="Spesialis Anak">Spesialis Anak</option>
            <option value="Spesialis Mata">Spesialis Mata</option>
            <option value="Spesialis Kandungan">Spesialis Kandungan</option>
            <option value="Spesialis Penyakit Dalam">Spesialis Penyakit Dalam</option>
            <option value="Spesialis Gigi">Spesialis Gigi</option>
            <option value="Dokter Umum">Dokter Umum</option>
          </select>
          <?= form_error('spesialis','<div class="text-small text-danger">','</div>')  ?>
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
          