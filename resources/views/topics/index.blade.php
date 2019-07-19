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
                    <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
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
                <h1>TOPICS</h1>
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

    {{--  <div class="col-sm-12">
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-volume-up"></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>{{ $error }}
                </div>
            @endforeach
         @endif
    </div>  --}}



<div class="col-sm-12">
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
    {{ 'Add New' }} <i class="fa fa-plus"></i>
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:#000;" id="exampleModalLabel">Add New Topic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/topics" method="POST" class="user">
                    @csrf

                    <div class="form-group">
                        <label for="topic_title" class="col-form-label">{{ __('Topic Title') }}</label><br/>

                        <input id="topic_title"
                        name="topic_title"
                        type="text"
                        class="form-control form-control-user @error('topic_title') is-invalid @enderror"
                        autofocus rows="5" />

                        @error('topic_title')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                            <label for="start_date" class="col-form-label">{{ __('Start Date') }}</label><br/>

                            <input id="start_date"
                            name="start_date"
                            type="date"
                            class="form-control form-control-user @error('start_date') is-invalid @enderror"
                            autofocus rows="5" />

                            @error('start_date')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                            <label for="end_date" class="col-form-label">{{ __('End Date') }}</label><br/>

                            <input id="end_date"
                            name="end_date"
                            type="date"
                            class="form-control form-control-user @error('end_date') is-invalid @enderror"
                            autofocus rows="5" />

                            @error('end_date')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="d-flex row pt-4 justify-content-between">
                        <div class="ml-3">
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>

                        <div class="mr-3">
                        <button class="btn btn-primary">Create Topic</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" style="border-radius:5px;" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


{{--    --}}

<div class="col-md-12 mb-2 mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Topics Table</h3>
        </div>

        <div class="card-body">
                <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Topic ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($topics as $topics)
                          <tr>
                            <th scope="row">{{$topics->id}}</th>

                            <td>{{$topics->topic_title}}</td>

                            <td>{{$topics->start_date}}</td>

                            <td>{{$topics->end_date}}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
        </div>

        <div class="col-12 d-flex justify-content-center">
              {{--  {{$cohort->links() }}  --}}
        </div>
        </div>
    </div>

</div>

</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
