
            <a href="<?= base_url('obat/tambah'); ?>"type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Input Data Obat
              </a>
              <?= $this->session->flashdata('pesan'); ?>
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($obat as $o) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $o['kd_obat']; ?></td>
                        <td><?= $o['nm_obat']; ?></td>
                        <td><?= $o['keterangan']; ?></td>
                        <td>
                          <a href="<?= base_url('obat/edit/').$o['id_obat']; ?>" class="badge badge-warning">
                            <i class="fas fa-edit"></i></a>
                          <a href="<?= base_url('obat/hapus/').$o['id_obat']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i></a>
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
      <form action="<?= base_url('obat/tambah'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="kd_obat">Kode Obat</label>
          <input type="text" name="kd_obat" class="form-control" id="kd_obat" value="<?= $kd_obat ?>" readonly>
          <?= form_error('kd_obat','<div class="text-small text-danger">','</div>')  ?>
        </div>
        <div class="form-group">
          <label for="nm_obat">Nama Obat</label>
          <input type="text" name="nm_obat" class="form-control" id="nm_obat" placeholder="Masukkan Data" required="required">
          <?= form_error('nm_obat','<div class="text-small text-danger">','</div>')  ?>
        </div>
         <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Data" required="required">
          <?= form_error('keterangan','<div class="text-small text-danger">','</div>')  ?>
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
          