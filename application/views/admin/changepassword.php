        <div class="row">
          <div class="col-md-3">
 <?= $this->session->flashdata('message'); ?>
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('assets/img/profil/'). $user['image']; ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $user['name']; ?></h3>

                <p class="text-muted text-center"><?= $user['email']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="<?= base_url('admin/edit') ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
                <a href="<?= base_url('admin/profil') ?>" class="btn btn-primary btn-block"><b>Kembali</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      
<div class="col-md-9">
            <!-- <div class="card">
              <div class="card-header p-2"> -->
           <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="" method="post">
                      <div class="form-group row">
                        <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="current_password" name="current_password" required>
                          <?= form_error('current_password','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="new_password1" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="new_password1" name="new_password1" required>
                          <?= form_error('new_password1','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="new_password2" class="col-sm-2 col-form-label">Repeat Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="new_password2" name="new_password2" required>
                          <?= form_error('new_password2','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
         </div>