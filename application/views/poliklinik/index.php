
            <a href="<?= base_url('poliklinik/tambah'); ?>"type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Input Poliklinik
              </a>
              <?= $this->session->flashdata('pesan'); ?>
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th width="2%">No.</th>
                    <th>Nama Poli</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                      <?php foreach ($poliklinik as $po) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $po['nm_poli']; ?></td>
                        <td>Rp. <?= $po['harga']; ?></td>
                        <td>
                          <a href="<?= base_url('poliklinik/hapus/').$po['id_poli']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i></a>
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
      <form action="<?= base_url('poliklinik/tambah'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="nm_poli">Poliklinik</label>
          <input type="text" name="nm_poli" class="form-control" id="nm_poli" placeholder="Masukkan Data" required="required">
          <?= form_error('nm_poli','<div class="text-small text-danger">','</div>')  ?>
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
          