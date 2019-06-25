<style type="text/css" media="screen">
   
   #info::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: white;
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
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
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

/* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    #btn
    {
        margin-left: 1%;
    }

    label.error
    {
        color:#F44336;
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
        <h2>Movies Add</h2>
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
<a href="<?php echo base_url('admin/movies/index'); ?>" id="btn"><button type="button" class="btn bg-teal-400 btn-labeled btn-rounded"><b><i class="fa fa-arrow-left"></i></b>Back</button></a>
<div class="single-product-tab-area mg-b-30">
<!-- Single pro tab review Start-->
<div class="single-pro-review-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-tab-pro-inner">
<form method="post" action="" enctype="multipart/form-data" id="myForm">
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="review-content-section">

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                <input type="file" class="form-control" name="image" data-toggle="tooltip" title="Image" data-placement="bottom" id="image">
            </div>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="title" placeholder="Movie Title" data-toggle="tooltip" title="Movie Title" data-placement="bottom" id="title">
            </div>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                <select name="category" class="form-control pro-edt-select form-control-primary" data-toggle="tooltip" title="Category" data-placement="bottom">
                    <option value="opt1">Select One Category Only</option>
                    <option value="hollywood">Hollywood</option>
                    <option value="bollywood">Bollywood</option>
                    <option value="tollywood">Tollywood</option>
                </select>
            </div>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="fa fa-star-o" aria-hidden="true"></i></span>
                <select name="genres" class="form-control pro-edt-select form-control-primary" data-toggle="tooltip" title="Genre" data-placement="bottom" >
                    <option value="opt1">Select One Genre Only</option>
                    <option value="horror">Horror</option>
                    <option value="romantic">Romantic</option>
                    <option value="comedy">Comedy</option>
                    <option value="action">Action</option>
                    <option value="drama">Drama</option>
                    <option value="mystery">Mystery</option>
                </select>
            </div>

        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="review-content-section">

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="duration" placeholder="Movie Duration" data-toggle="tooltip" title="Movie Duration" data-placement="bottom" id="duration">
            </div>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                <input type="date" class="form-control" name="release_date" data-toggle="tooltip" title="Release Date" data-placement="bottom" id="release_date">
            </div>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="fa fa-info" aria-hidden="true"></i></span>
                <textarea name="information" class="form-control" placeholder="Movie Information" id="info" data-toggle="tooltip" title="Information" data-placement="bottom"></textarea>
            </div>

            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="director" placeholder="Movie Director" data-toggle="tooltip" title="Movie Director" data-placement="bottom" id="director">
            </div>

            <!-- <div class="input-group mg-b-pro-edt">
                <div class="form-group">
                    <label style="color:white; position: relative; top: 7px; font-size: 15px;">Status:</label>&nbsp;
                    <label class="switch"> 
                        <input type="checkbox" name="status">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="text-center custom-pro-edt-ds">
            <input type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" value="Save" name="save" data-toggle="tooltip" title="Add Movie">
            <input type="reset" class="btn btn-ctl-bt waves-effect waves-light" value="Discard" name="reset" data-toggle="tooltip" title="Reset Data">
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

<!-- For validation -->
<script type="text/javascript">
    $(function() {
        $('#myForm').validate({
            rules: {
                image: {
                    required: true
                },
                title: {
                  required: true
                },
                duration: {
                  required: true
                },
                release_date: {
                    required: true
                },
                information: {
                    required: true
                },
                director: {
                    required: true
                },
                category: {
                    required: true
                },
                genres: {
                    required: true
                }
            },
            messages: {
                image: {
                    required: 'Please select an Image'
                    // required: 'Enter a valid email'
                    // number: 'Numbers are not allowed'
                },
                title: {
                    required: 'Please Enter title of movie'
                },
                duration: {
                    required: 'Please Enter Duration of movie'
                },
                release_date: {
                    required: 'Please Enter Release date of movie'
                },
                information: {
                    required: 'Please Enter Information of movie'
                },
                director: {
                    required: 'Please Enter director of movie'
                },
                category: {
                    required: 'Please select Category of movie'
                },
                genres: {
                    required: 'Please select genres of movie'
                }
            }
        });
    });
</script>
<!-- /For validation -->