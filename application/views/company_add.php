<!DOCTYPE html>
<html>

<head>
<!-- TABLES CSS CODE -->
<?php include"comman/code_css_form.php"; ?>
<!-- </copy> -->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php include"sidebar.php"; ?>
 <?php
	if(!isset($brand_name)){
      $brand_code=$brand_name=$description="";
	}
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$page_title;?>
        <small>Add/Update Brand</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $base_url; ?>brands/company_view"><?= $this->lang->line('brand_company_list'); ?></a></li>
        <li class="active"><?=$page_title;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info ">
            <div class="box-header with-border">
              <h3 class="box-title">Please Enter Valid Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" id="brand-form" onkeypress="return event.keyCode != 13;">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
              <input type="hidden" id="base_url" value="<?php echo $base_url;; ?>">
              <div class="box-body">
                <div class="form-group">
                    <label for="brand" class="col-sm-3 control-label"><?= $this->lang->line('brand_company_name'); ?><label class="text-danger">*</label></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control input-sm" id="brand" name="brand" placeholder="" onkeyup="shift_cursor(event,'description')" value="<?php print $brand_name; ?>" autofocus >
                            <span id="brand_msg" style="display:none" class="text-danger"></span>
                    </div>
                </div>

				<div class="form-group">
                  <label for="description" class="col-sm-3 control-label"><?= $this->lang->line('description'); ?></label>
                  <div class="col-sm-4">
                    <textarea type="text" class="form-control" id="description" name="description" placeholder=""><?php print $description; ?></textarea>
					<span id="description_msg" style="display:none" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
                <div class="col-sm-8 col-sm-offset-1 text-center">
                   <!-- <div class="col-sm-4"></div> -->
                    <?php if($brand_code!=""){
                        $btn_name="Update";
                        $btn_id="company_update";
                    ?>
                    <input type="hidden" name="q_id" id="q_id" value="<?php echo $q_id;?>"/>
                    <?php }else{
                        $btn_name="Save";
                        $btn_id="company_save";
                    } ?>

                   <div class="col-md-3 col-md-offset-3">
                      <button type="button" id="<?php echo $btn_id;?>" class=" btn btn-block btn-success" title="Save Data"><?php echo $btn_name;?></button>
                   </div>
                   <div class="col-sm-3">
                    <a href="<?=base_url('brands/company_view');?>">
                      <button type="button" class="col-sm-3 btn btn-block btn-warning close_btn" title="Go List">Close</button>
                    </a>
                   </div>
                </div>
             </div>
             <!-- /.box-footer -->
            </form>
            <br>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include"footer.php"; ?>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- SOUND CODE -->
<?php include"comman/code_js_sound.php"; ?>
<!-- TABLES CODE -->
<?php include"comman/code_js_form.php"; ?>

<script src="<?php echo $theme_link; ?>js/brand.js"></script>
<!-- Make sidebar menu hughlighter/selector -->
<script>$(".<?php echo basename(__FILE__,'.php');?>-active-li").addClass("active");</script>
</body>
</html>
