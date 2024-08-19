<div class="page-body">

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
        <div class="page-body">
<div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Edit Profile</h3>
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
            <div class="edit-profile">
              <div class="row">
                <div class="col-xl-12">
                  <form class="card" action="<?php echo base_url('site/companysetting');?>" method="post" id="form">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Company Setting</h4>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label class="form-label">Company</label>
                            <input class="form-control" type="hidden" name="c_id" id="c_id" value="<?php if(isset($sitedetails->id)) { echo $sitedetails->id;} ?>" placeholder="Company">
                            <input class="form-control" type="text" name="c_name" id="c_name" value="<?php if(isset($sitedetails->compay_name)) { echo $sitedetails->compay_name;} ?>" placeholder="Company">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input class="form-control" type="email" name="c_email" id="c_email" value="<?php if(isset($sitedetails->company_email)) { echo $sitedetails->company_email;} ?>" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Company Contact</label>
                            <input class="form-control" type="text" name="c_contact" id="c_contact" value="<?php if(isset($sitedetails->company_contact)) { echo $sitedetails->company_contact;} ?>" placeholder="Contact Number">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" name="c_address" id="c_address" value="<?php if(isset($sitedetails->company_address)) { echo $sitedetails->company_address;} ?>" placeholder="Home Address">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">City</label>
                            <input class="form-control" type="text" name="c_city" id="c_city" value="<?php if(isset($sitedetails->company_city)) { echo $sitedetails->company_city;} ?>" placeholder="City">
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                          <div class="mb-3">
                            <label class="form-label">Postal Code</label>
                            <input class="form-control" type="number" name="c_pincode" id="c_pincode" value="<?php if(isset($sitedetails->company_pincode)) { echo $sitedetails->company_pincode;} ?>" placeholder="ZIP Code">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div>
                            <label class="form-label">About Me</label>
                            <textarea class="form-control" rows="4"  name="c_about" id=""   placeholder="Enter About your description"><?php if(isset($sitedetails->about_company)) { echo $sitedetails->about_company;} ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

        <?php
            include_once(APPPATH.'views/includes/footer.php');
        ?>