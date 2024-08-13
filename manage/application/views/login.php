<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/x-icon">
    <title>Login</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <?php echo link_tag('assets/css/font-awesome.css'); ?>
    <!-- ico-font-->
    <?php echo link_tag('assets/css/vendors/icofont.css'); ?>
    <?php echo link_tag('assets/css/vendors/themify.css'); ?>
    <?php echo link_tag('assets/css/vendors/flag-icon.css'); ?>
    <?php echo link_tag('assets/css/vendors/feather-icon.css'); ?>
    <?php echo link_tag('assets/css/vendors/sweetalert2.css'); ?>
    <?php echo link_tag('assets/css/vendors/bootstrap.css'); ?>
    <?php echo link_tag('assets/css/style.css'); ?>
    <?php echo link_tag('assets/css/color-1.css'); ?>
    <?php echo link_tag('assets/css/responsive.css'); ?>

  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 p-0">
          <div class="login-card login-dark">
            <div>
              <div><a class="logo text-center" href="javascript:void(0);"><img class="img-fluid for-light" src="<?php echo base_url()?>/assets/images/logo/infoloop.png" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo base_url()?>assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main"> 
              <?php echo form_open('login/validateLogin', array('id' => 'submitForm', 'class' => 'form-horizontal needs-validation custom-input', 'novalidate' => 'novalidate')); ?>
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label" id="email">Email Address</label>
                    <input class="form-control" type="email" name="emailid" id="email" required="" placeholder="Test@gmail.com" id="user-email">
                    <div class="invalid-feedback">Please enter your email id </div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="password">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" id="password" required="" placeholder="*********" id="user-password">
                      <div class="invalid-feedback">Please enter your password </div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" id="submit-btn" type="submit">Sign in</button>
                    </div>
                  </div>
                  <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js')?>"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url('assets/js/icons/feather-icon/feather.min.js')?>"></script>
      <script src="<?php echo base_url('assets/js/icons/feather-icon/feather-icon.js')?>"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url('assets/js/config.js')?>"></script>
      <!-- Plugins JS start-->
      <script src="<?php echo base_url('assets/js/sweet-alert/sweetalert.min.js')?>"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url('assets/js/form-validation-custom.js')?>"></script>
      <script src="<?php echo base_url('assets/js/script.js')?>"></script>
      <script type="text/javascript">
		$(function () {
			$('#submitForm').on('submit', function (e) {
				e.preventDefault();

				$.ajax({
					url: $(this).attr('action') || window.location.pathname,
					type: "POST",
					data: $(this).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#submit-btn').html("<i class='la la-spinner spinner'></i>");
						$('#submit-btn').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							document.getElementById("submitForm").reset();
							setTimeout(function () {
								window.location.href = '<?php echo base_url("dashboard"); ?>';
							}, 2000);
						}
						else {
							$('#submit-btn').html("<i class='ft-unlock'></i> LOGIN");
							$('#submit-btn').attr('disabled', false);
						}
					},
					error: function (jXHR, textStatus, errorThrown) {
						$('#submit-btn').html("<i class='ft-unlock'></i> LOGIN");
						$('#submit-btn').attr('disabled', false);
					}
				});
			});
		});
	</script>
    </div>
  </body>
</html>