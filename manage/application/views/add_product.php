 <!-- Page Header Start-->
 <?php
            include_once(APPPATH.'views/includes/header.php');
        ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vendors/intltelinput.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vendors/tagify.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vendors/flatpickr/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vendors/dropzone.min.css">
 <!-- Page Header Ends -->
 <!-- Page Body Start-->
 <div class="page-body-wrapper">
     <!-- Page Sidebar Start-->
     <?php
            include_once(APPPATH.'views/includes/sidebar.php');
        ?>


<!-- Page Sidebar Ends-->
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>Add Product</h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item active">Add Product</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-12"> 
                <div class="card"> 
                  <div class="card-header">
                    <h5>Product Form</h5>
                  </div>
                  <div class="card-body">
                  <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate="" action="<?php echo base_url()?>product/insertproduct" method="post" enctype="multipart/form-data">
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="productname">Product
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="productname" id="productname" type="text"
                                                         placeholder="Enter your product name" required="" value="">
                                                     <div class="invalid-feedback">
                                                         Please enter a product name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="productslug">Product Slug</label>
                                                     <input class="form-control" id="productslug" type="text"
                                                         placeholder="Enter product slug" name="productslug" value="">
                                                     <div class="invalid-feedback">
                                                         Please enter a productslug name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Product Category<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="productcategory" aria-label="Select product category" required="">
                                                        <option  value="">Select</option>
                                                        <?php foreach($categorylist as $cat){?>
                                                            <option  value="<?php echo $cat->category_id?>"><?php echo $cat->category_name?></option>
                                                        <?php } ?>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a product category.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="productsku">Product SKU</label>
                                                     <input class="form-control" id="productsku" type="text"
                                                         placeholder="Enter product slug" name="productsku" value="">
                                                     <div class="invalid-feedback">
                                                         Please enter a productsku.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-12"> 
                                                    <label class="form-label" for="productimg">Product Image</label>
                                                    <input class="form-control" id="productimg" type="file" aria-label="file example" name="product_image" required="">
                                                    <div class="invalid-feedback">Invalid form file selected</div>
                                                </div>
                                                 <div class="col-md-12">
                                                 <label class="form-label">Product Description<span
                                                 class="txt-danger">*</span></label>
                                                 <textarea id="editor1" class="form-control" name="product_desc" cols="30" rows="5"></textarea>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Product Status<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="productstatus" aria-label="Select product status" required="">
                                                         <option selected="" value="1">Active</option>
                                                         <option value="0">Inactive</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a product status.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 
                                                 
                                                 <div class="col-md-12 d-flex justify-content-end">
                                                     <button class="btn btn-primary" type="submit">Create +</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                         </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>


























<footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2024 © Infoloop Technologies  </p>
              </div>
            </div>
          </div>
        </footer>
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
    <script src="<?php echo base_url('assets/js/scrollbar/simplebar.js')?>"></script>
    <script src="<?php echo base_url('assets/js/scrollbar/custom.js')?>"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo base_url('assets/js/config.js')?>"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo base_url('assets/js/sidebar-menu.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sidebar-pin.js')?>"></script>
    <script src="<?php echo base_url('assets/js/slick/slick.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/slick/slick.js')?>"></script>
    <script src="<?php echo base_url('assets/js/header-slick.js')?>"></script>
    <script src="<?php echo base_url('assets/js/flat-pickr/flatpickr.js')?>"></script>
    <script src="<?php echo base_url('assets/js/flat-pickr/custom-flatpickr.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dropzone/dropzone.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dropzone/dropzone-script.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweet-alert/sweetalert.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/select2/tagify.js')?>"></script>
    <script src="<?php echo base_url('assets/js/select2/tagify.polyfills.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/select2/intltelinput.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/add-product/select4-custom.js')?>"></script>
    <script src="<?php echo base_url('assets/js/tooltip-init.js')?>"></script>
    <script src="<?php echo base_url('assets/js/modalpage/validation-modal.js')?>"></script>
    <script src="<?php echo base_url('assets/js/select/bootstrap-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/editor/ckeditor/ckeditor.js')?>"></script>
    <script src="<?php echo base_url('assets/js/editor/ckeditor/adapters/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/editor/ckeditor/styles.js')?>"></script>
    <script src="<?php echo base_url('assets/js/editor/ckeditor/ckeditor.custom.js')?>"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url('assets/js/script.js')?>"></script>


  </body>
</html>