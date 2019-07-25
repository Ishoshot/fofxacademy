@extends('layouts.admin')

@section('content')
{{-- <!-- Left Panel --> --}}


{{-- <!-- Left Panel --> --}}

{{-- <!-- Right Panel --> --}}

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

                    {{-- <span class="count bg-danger"></span> --}}
                </button>
                {{-- <div class="dropdown-menu" aria-labelledby="notification">
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
                </div> --}}
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
                <h1>Manage Students</h1>
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
    </div>



<div class="col-sm-12">
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
    {{ 'Add New' }} <i class="fa fa-plus"></i>
    </button>
</div>

{{-- <!-- Modal --> --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:#000;" id="exampleModalLabel">Add New Students</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/students" method="POST" class="user">
                    @csrf

                    <div class="form-group">
                        <label for="firstname" class="col-form-label">{{ __('Firstname') }}</label><br/>

                        <input id="firstname"
                        name="firstname"
                        type="text"
                        class="form-control form-control-user @error('firstname') is-invalid @enderror"
                        autofocus rows="5" />

                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                            <label for="lastname" class="col-form-label">{{ __('Lastname') }}</label><br/>

                            <input id="lastname"
                            name="lastname"
                            type="text"
                            class="form-control form-control-user @error('lastname') is-invalid @enderror"
                            autofocus rows="5" />

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                            <label for="username" class="col-form-label">{{ __('Username') }}</label><br/>

                            <input id="username"
                            name="username"
                            type="text"
                            class="form-control form-control-user @error('username') is-invalid @enderror"
                            autofocus rows="5" />

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="cohort_name" class="col-form-label">{{ __('Cohort Status') }}</label><br/>

                        <select id="cohort_name" name="cohort_name" class="form-control form-control @error('cohort_name') is-invalid @enderror">
                           <option value="">Select Cohort Name</option>
                            @foreach ($cohort as $cohorts)
                                <option value="{{$cohorts->name}}">
                                    {{$cohorts->name}}
                                </option>
                            @endforeach
                        </select>

                        @error('cohort_name')
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
                        <button class="btn btn-primary">Create Students</button>
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
            <h3 class="text-white">Students List</h3>
        </div>

        <div class="card-body">
            @if($studentsCount< 1)
                <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                        <i class="fa fa-volume-up"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>{{"You Don't Have Any Student Here Yet"}}
                </div>
            @else
                <table class="table text-center">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Cohort Name</th>
                            <th scope="col">Remove</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($student as $students)
                          <tr>
                            <th scope="row">{{$students->id}}</th>

                            <td>{{$students->firstname}}</td>

                            <td>{{$students->lastname}}</td>

                            <td>{{$students->username}}</td>

                            <td>{{$students->cohort_name}}</td>
                            <td>
                                <button class="deleteRecord  btn btn-outline-danger" id="del" data-id="{{ $students->id }}"><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                    </table>
            @endif
        </div>

        <div class="col-12 d-flex justify-content-center">
               {{$student->links() }}
        </div>
        </div>
    </div>

</div>
<script>
    {{-- DELETE REQUEST --}}
    $(".deleteRecord").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
        {
            url: "students/"+id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },

            success: function (){
                setTimeout(function(){
                    location. reload(true);
                }, 1000);
            }
        });

    });
</script>
</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

@endsection
