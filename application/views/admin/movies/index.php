  <style type="text/css" media="screen">
   
    .switch {
        position: relative;
        display: inline-block;
        width: 48px;
        height: 25px;
    }
    .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
    }
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 18px;
        width: 18px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #d3af37;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(22px);
        -ms-transform: translateX(22px);
        transform: translateX(22px);
    }

/* Rounded sliders */
    .slider.round {
        border-radius: 30px;
    }

    .slider.round:before {
        border-radius: 45%;
    }
</style>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Movie List</h2>
                                                <p>Welcome <?php  
                                                        $mysession = _useSession('admin_session');
                                                        echo $mysession['username']; 
                                                        ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                 </div>
  <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Movie List</h4>
                            <div class="add-product">
                                <a href="<?php echo base_url('admin/movies/add'); ?>">Add Movie</a>
                            </div>
                            <table>
                                <tr>
                                    <th style="width:10%; text-align:center;">Image</th>
                                    <th style="width: 20%;">Title</th>
                                    <th style="width: 20%;">Duration</th>
                                    <th style="width: 20%;">Release Date</th>
                                    <th style="width: 20%;">Status</th>
                                    <th style="width: 20%; text-align: center;">Action</th>
                                </tr>
<?php  
    foreach ($movies as $movie)
    {
?>    
                                <tr>
                                    <td style="text-align:center;"><img src="<?php echo base_url(); ?>assets/uploads/movies/<?php echo $movie['image']; ?>" alt="No Image"></td>
                                    <td><?php echo $movie['title']; ?></td>
                                    <td><?php echo $movie['duration']." mins"; ?></td>
                                    <td><?php echo $movie['release_date']; ?></td>
                                    <td>
                    <label class="switch"> 
                        <input type="checkbox" name="status">
                        <span class="slider round"></span>
                    </label></td>
                                    <td>
                                        <span><a href="<?php echo base_url(); ?>admin/movies/detail/<?php echo $movie['id']; ?>" class="pd-setting-ed" data-toggle="tooltip" title="View" style="color: white;"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></span></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                        <span ><a href="<?php echo base_url(); ?>admin/movies/edit/<?php echo $movie['id']; ?>" class="pd-setting-ed" data-toggle="tooltip" title="Edit" style="color: white;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></span></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                        <span ><a href="<?php echo base_url(); ?>admin/movies/delete/<?php echo $movie['id']; ?>" class="pd-setting-ed" data-toggle="tooltip" title="Delete" style="color: white;"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></span></a>
                                    </td>
                                </tr>
<?php  
    }
?>

                            </table>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>
    $(function(){
           <?php   
                if($msg = $this->session->flashdata('msg'))
                {
            ?>
                    toastr.success("<?php echo $msg; ?>");
            <?php
                }
           ?>
    });
</script>