 <!-- Page Header Start-->
 <?php
            include_once(APPPATH.'views/includes/header.php');
        ?>
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
                         <h4>
                             Edit Category</h4>
                     </div>
                     <div class="col-6">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">
                                     <svg class="stroke-icon">
                                         <use href="<?php echo base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
                                     </svg></a></li>
                             <li class="breadcrumb-item">ECommerce</li>
                             <li class="breadcrumb-item active">Category</li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Container-fluid starts-->
         <div class="container-fluid">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="card">
                         <div class="card-body">
                         <div class="text-start">
                                         <div class="p-20">
                                             <form class="row g-3 needs-validation" novalidate="" action="<?php echo base_url()?>category/editcategory" method="post">
                                                 <div class="col-md-6">
                                                 <input name="categoryid" id="Categoryid" type="hidden" value="<?php echo $categorydetails->category_id; ?>">
                                                     <label class="form-label" for="CategoryName">Category
                                                         Name<span class="txt-danger">*</span></label>
                                                     <input class="form-control" name="categoryname" id="CategoryName" type="text"
                                                         placeholder="Enter your category name" required="" value="<?php echo $categorydetails->category_name; ?>">
                                                     <div class="invalid-feedback">
                                                         Please enter a category name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label" for="categorySlug">Slug<span
                                                             class="txt-danger">*</span></label>
                                                     <input class="form-control" id="categorySlug" type="text"
                                                         placeholder="Enter slug" name="categoryslug" required="" value="<?php echo $categorydetails->category_slug; ?>">
                                                     <div class="invalid-feedback">
                                                         Please enter a slug name.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Parent Category<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="parentcategory" aria-label="Select parent category" required="">
                                                        <option  value="">Select</option>
                                                        <option  value="goggals" <?php if( $categorydetails->parent_category == 'goggals') { echo 'selected';} ?>>Goggals</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a parent category.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Category Type<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="categorytype" aria-label="Select category type" required="">
                                                        <option value="">Select</option>
                                                         <option  value="goggals" <?php if( $categorydetails->parent_category == 'goggals') { echo 'selected';} ?>>Goggals</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a category type.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-label">Category Status<span
                                                             class="txt-danger">*</span></label>
                                                     <select class="form-select" name="categorystatus" aria-label="Select category status" required="">
                                                         <option selected="" value="1" <?php if( $categorydetails->category_status == '1') { echo 'selected';} ?>>Active</option>
                                                         <option value="0" <?php if( $categorydetails->category_status == '0') { echo 'selected';} ?>>Inactive</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                         Please choose a category status.</div>
                                                     <div class="valid-feedback">Looks good!</div>
                                                 </div>
                                                 
                                                 
                                                 <div class="col-md-12 d-flex justify-content-end">
                                                     <button class="btn btn-primary" type="submit">Update +</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
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
    <script src="<?php echo base_url('assets/js/datatable/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatable/datatables/dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatable/datatables/dataTables.select.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatable/datatables/select.bootstrap5.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatable/datatables/datatable.custom.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweet-alert/sweetalert.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/trash_popup.js')?>"></script>
        <script src="<?php echo base_url('assets/js/editors/quill.js')?>"></script>
        
    <script>
         var editor10 = new Quill("#editor10", {
      modules: { toolbar: "#toolbar10" },
      theme: "snow",
      placeholder: "Enter your messages...",
    });
    </script>