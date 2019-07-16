@extends('layouts.app')

@section('content')
    <!-- Left Panel -->


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             
                        </a>

                        <div class="user-menu dropdown-menu">
                             
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-volume-up"></i>
                    Dear 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                        <p class="text-light">Got Admission this Year</p>

                        <div class="chart-wrapper px-0" style="height:100px;" height="100">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->

        <div id="piechart" style="padding:0px !important;" class="col-md-4"></div>

    <div class="card col-md-4 shadow" style="padding:0px;">
                <div class="card-body bg-flat-color-4 text-white text-center" style="padding:25px;">
            <h4>CHANGE PROFILE PICTURE ?</h4>
            <p class="mt-3 mb-2">Click the Button below.</p>
            <i class="fa fa-arrow-down text-white"></i> <br/>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  CLICK ON ME
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:#000;" id="exampleModalLabel">Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" style="border-radius:5px;" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
    
    </div>
</div>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Profile', 'Completed'],
  ['Completed', 20],
  ['Uncompleted', 6]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Rate of Complete and Imcomplete Registration In Nigerian Schools', 'width':300, 'height':200};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<div class="col-md-12 text-center mb-2 mt-2">

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-file-text fa-5x"></i>
            <h4>RECEIPTS</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
          </div>
        </div>
      </div> 

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-envelope fa-5x"></i>
            <h4>ADMISSION LETTER</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 60%; height: 5px;"></div>
          </div>
      </div>
      </div> 

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-print fa-5x"></i>
            <h4>COURSE FORM</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 80%; height: 5px;"></div>
          </div>
      </div>
      </div> 

</div>

<div class="col-md-12 text-center mt-2 mb-2">

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-certificate fa-5x"></i>
            <h4>O LEVEL RESULT</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 59%; height: 5px;"></div>
          </div>
      </div>
      </div> 

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-info fa-5x"></i>
            <h4>BIRTH CERTIFICATE</h4>  
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 29%; height: 5px;"></div>
          </div>
      </div>
      </div> 

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-plus-circle fa-5x"></i>
            <h4>MEDICAL FORM</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
          </div>
      </div>
      </div>   

</div>

<div class="col-md-12 text-center mt-2 mb-2">

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-file fa-5x"></i>
            <h4>OATH FORM</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 79%; height: 5px;"></div>
          </div>
      </div>
      </div> 

      <div class="col-md-4 mt-5"></div> 

      <div class="col-md-4 mt-5"></div>   

</div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

@endsection
