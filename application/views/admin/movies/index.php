<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
        background-color: #77A9AD;
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
                        <div class="panel-heading">
                            <h5 class="panel-title">Movies List</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                          
                                <div>
                                    <div class="btn bg-pink btn-labeled pull-right" style="padding: 5px; margin-top: 10%;">
                                        <a href="<?php echo base_url('admin/movies/add'); ?>" style="color: white;"><i class="fa fa-plus" aria-hidden="true"></i> Add Movie</a>
                                    </div>
                                </div>
                            </div>
                        </div>

<br>
                        <div class="table-responsive">
                            <table class="table table-hover" id="myTable">
                                <thead>
                                    <tr style="background-color: #388E8E;">
                                        <th width="5%" style=" text-align:center;font-size: 16px; font-weight: bold;">Image</th>
                                        <th width="20%" style="font-size: 16px; font-weight: bold;" onclick="sortTable(1)">Title<span style="color: lightgrey; float: right;"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></span></th>
                                        <th width="10%" style="font-size: 16px; font-weight: bold;">Duration</th>
                                        <th width="15%" style="font-size: 16px; font-weight: bold;">Release Date</th>
                                        <th width="20%" style="font-size: 16px; font-weight: bold;">Status</th>
                                        <th width="10%" style="text-align: center; font-size: 16px; font-weight: bold;">Action</th>
                                    </tr>
                                </thead>
<?php  
    foreach ($movies as $movie)
    {
?>  
                                <tbody style="background-color: #EAF3F3;">
                                    <tr>
                                        <td style="text-align:center;"><img src="<?php echo base_url(); ?>assets/uploads/movies/<?php echo $movie['image']; ?>" alt="No Image" height="75" width="75"></td>
                                        <td><?php echo $movie['title']; ?></td>
                                        <td><?php echo $movie['duration']." mins"; ?></td>
                                        <td><?php echo $movie['release_date']; ?></td>
                                        <td><label class="switch"> 
                                                <input type="checkbox" name="status">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/movies/detail/<?php echo $movie['id']; ?>" class="pd-setting-ed" data-toggle="tooltip" title="Edit" style="color: blue;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            &nbsp;

                                            <a href="<?php echo base_url(); ?>admin/movies/edit/<?php echo $movie['id']; ?>" class="pd-setting-ed" data-toggle="tooltip" title="Edit" style="color: black;"><i class="icon-pencil7" aria-hidden="true"></i></a>
                                            &nbsp;
                                            <a href="<?php echo base_url(); ?>admin/movies/delete/<?php echo $movie['id']; ?>" class="pd-setting-ed" data-toggle="tooltip" title="Edit" style="color: red;"><i class="icon-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
<?php  
    }
?>
                                </tbody>
                            </table>
                            <br>
                            <div>
                           <ul class="pagination">
                                    <li><?php echo $links; ?></li>
                            </ul>
                        </div>
                        <br>
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
<script>
       //for sort table.
    function sortTable(n) {
      var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
      table = document.getElementById("myTable");
      switching = true;
      //Set the sorting direction to ascending:
      dir = "asc"; 
      /*Make a loop that will continue until
      no switching has been done:*/
      while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
          //start by saying there should be no switching:
          shouldSwitch = false;
          /*Get the two elements you want to compare,
          one from current row and one from the next:*/
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          /*check if the two rows should switch place,
          based on the direction, asc or desc:*/
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch= true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          /*If a switch has been marked, make the switch
          and mark that a switch has been done:*/
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          //Each time a switch is done, increase this count by 1:
          switchcount ++;      
        } else {
          /*If no switching has been done AND the direction is "asc",
          set the direction to "desc" and run the while loop again.*/
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
}
</script>