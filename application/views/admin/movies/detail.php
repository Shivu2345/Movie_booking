<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>


</head>

<body>

    <!-- Main navbar -->
        <!-- Removed by - shivu -->
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
                <!-- Removed by - shivu -->
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                    <!-- Removed by - shivu -->
                <!-- /page header -->



                <!-- Content area -->
                <div class="content">

                    <!-- Hover rows -->
                    <div class="panel panel-flat">
<style type="text/css" media="screen">
  #btn
    {
        margin-left: 1%;
    }
</style>
<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="breadcomb-wp">
                <div class="breadcomb-icon">
                  <i class="icon nalika-home"></i>
                </div>
                <div class="breadcomb-ctn">
                  <h2>Movies Details</h2>
                  <p>Welcome <?php  
                                $mysession = _useSession('admin_session');
                                echo $mysession['username']; 
                              ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <a href="<?php //echo base_url('admin/movies/index'); ?>" id="btn"><button type="button" class="btn bg-teal-400 btn-labeled btn-rounded"><b><i class="fa fa-arrow-left"></i></b>Back</button></a> -->

<div class="single-product-tab-area mg-b-30">
<!-- Single pro tab review Start-->
<div class="single-pro-review-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-tab-pro-inner">
<form method="post" action="" enctype="multipart/form-data">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><br>
        <marquee direction="down" behavior="slide" scrollamount="50"><img src="<?php echo base_url(); ?>assets/uploads/movies/<?php echo $movies['image']; ?>" height="300" width="300" alt="No Image" ></marquee>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <table class="table" id="mytable" style="margin-left: -20%; font-size: 16px;">
          <tr>
            <th>Title:</th>
            <td><?php echo $movies['title']; ?></td>
          </tr>
          <tr>
            <th>Category:</th>
            <td><?php echo $movies['category']; ?></td>
          </tr>
          <tr>
            <th>Genres:</th>
            <td><?php echo $movies['genres']; ?></td>
          </tr>
          <tr>
            <th>Movie Duration:</th>
            <td><?php echo $movies['duration']." mins"; ?></td>
          </tr>
          <tr>
            <th>Release Date:</th>
            <td><?php echo $movies['release_date']; ?></td>
          </tr>
          <tr>
            <th>Information:</th>
            <td><?php echo $movies['information']; ?></td>
          </tr>
          <tr>
            <th>Movie Director:</th>
            <td><?php echo $movies['director']; ?></td>
          </tr>
          <tr>
            <th>status:</th>
            <td><?php echo $movies['status']; ?></td>
          </tr>
          <br>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="text-center custom-pro-edt-ds">
          <a href="<?php echo base_url() . 'admin/movies/edit/' . $movies['id']; ?>">
            <button type="button" class="btn btn-success waves-effect waves-light m-r-10">
              Update
            </button>
          </a>

          <a href="<?php echo base_url() . 'admin/movies/delete/' . $movies['id']; ?>">
            <button type="button" class="btn btn-danger waves-effect waves-light">
              Delete
            </button>
          </a>
        </div>
    </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
                    </div>
                    <!-- /hover rows -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
