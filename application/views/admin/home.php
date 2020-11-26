<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Halaman Adminstrator
      <!--<small>Optional description</small>-->
    </h1>
    <br>
    <p>
      Hai <b><?= $this->session->userdata('user')['f_username'] ?></b> ! <br>Selamat Datang di Halaman Administrator, Anda dapat melakukan update website melalui halaman ini. 
      Silahkan pilih menu di sebelah kiri untuk melakukan update.
    </p>
  </section>


  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title" style="font-size: 24px"> LATEST UPDATE</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-12">
              <?= form_open('admin/home', array('class' => 'form-inline pull-right')); ?>
                <div class="form-group">
                  <select class="form-control" name="filter_cat">
                    <option>...</option>
                    <option value="title">Title</option>
                    <option value="content">Content</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="filter_text" class="form-control" placeholder="Search...">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
              </form>

              <!-- TODO: add card here -->
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper