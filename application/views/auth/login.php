<div class="login-box">
  <div class="login-logo">
    <b style="">Login for Administrator</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- <br> -->
    <p class="login-box-msg">Please enter admin credential.</p>

    <?= validation_errors('<p class="text-danger small">', '</p>'); ?>
    <?php if ($error): ?>
      <p class="text-danger small"><?= $error; ?></p>
    <?php endif ?>

    <?= form_open('auth/check_login') ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username') ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->