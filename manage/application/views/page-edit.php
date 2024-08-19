
<div class="page-body">

      <!-- Page Header Start-->
      <?php
            include_once(APPPATH.'views/includes/header.php');
        ?>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/vendors/quill.snow.css')?>">
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/vendors/quill.bubble.css')?>">
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php
            include_once(APPPATH.'views/includes/sidebar.php');
        ?>       
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Fill the information to continue</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active"> Site Setting</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row"> 
              <div class="row"></div>
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5><?php echo $pagedetails->option_key; ?></h5>
                  </div>
                  <div class="card-body">

                  <?php echo form_open_multipart('site/updatePage', array('id'=>'submitForm', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'novalidate'=>'novalidate')); ?>
                        <input type="hidden" name="id" value="<?php echo $pagedetails->id; ?>" required>
                        <input type="hidden" name="page" value="<?php echo $pagedetails->option_key; ?>" required>

                        <textarea id="editor1" name="content" cols="30" rows="10"><?php echo $pagedetails->option_value; ?></textarea>

                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

        <?php
            include_once(APPPATH.'views/includes/footer.php');
        ?>
<script src="<?php echo base_url('assets/js/editor/ckeditor/ckeditor.js')?>"></script>
<script src="<?php echo base_url('assets/js/editor/ckeditor/adapters/jquery.js')?>"></script>
<script src="<?php echo base_url('assets/js/editor/ckeditor/styles.js')?>"></script>
<script src="<?php echo base_url('assets/js/editor/ckeditor/ckeditor.custom.js')?>"></script>

  