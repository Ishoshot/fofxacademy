@extends('layouts.admin')

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
                    <i class="fa fa-user"></i> 
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>

</header> <!-- /header -->
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
                    <li class="active">
                    {{ $date.". " }} {{ $time }}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>



<div class="content mt-3">

    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-volume-up"></i>
            {{ 'Flash Messages here' }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
           
<div class="col-md-12 text-center mb-2 mt-2">

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-users fa-5x"></i>
            <h4 class="pt-4">COHORTS</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
          </div>
        </div>
      </div> 

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-list fa-5x"></i>
            <h4 class="pt-4">MANAGE TOPICS</h4>
            </a>
            <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 60%; height: 5px;"></div>
          </div>
      </div>
      </div> 

      <div class="card col-md-4 mt-5 p-3">
        <div class="card-body bg-flat-color-0">
          <div class="div-square">
            <a href="#">
            <i class="fa fa-graduation-cap fa-5x"></i>
            <h4 class="pt-4">PAIR MAPPING</h4>
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
                    <i class="fa fa-user fa-5x"></i>
                    <h4 class="pt-4">MANAGE STUDENTS</h4>
                </a>
                <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 59%; height: 5px;"></div>
            </div>
        </div>
    </div>
      
     
</div>   


</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
