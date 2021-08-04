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
                <a href="<?= base_url('admin/changepassword') ?>" class="btn btn-primary btn-block"><b>Change Password</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
       

</div>