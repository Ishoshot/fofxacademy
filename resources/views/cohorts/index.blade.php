@extends('layouts.admin')

@section('content')



{{-- <!-- Right Panel --> --}}

<div id="right-panel" class="right-panel">

{{-- <!-- Header--> --}}
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

</header> {{-- <!-- /header --> --}}
{{-- <!-- Header--> --}}


{{-- BREADCRUM FOR DATE & TIME DISPLAY --}}
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Cohorts</h1>
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

{{-- DISPLAYS ALL VALIDATION ERRORS --}}
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


{{-- BUTTON FOR MODAL POPUP --}}
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
                <h5 class="modal-title" style="color:#000;" id="exampleModalLabel">Add New Cohorts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/cohorts" method="POST" class="user">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="col-form-label">{{ __('Cohorts Name') }}</label><br/>

                        <input id="name"
                        name="name"
                        type="text"
                        class="form-control form-control-user @error('name') is-invalid @enderror"
                        autofocus rows="5" />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="cohort_status" class="col-form-label">{{ __('Cohort Status') }}</label>
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio"  id="cohorts_active" class="form-check-input" name="cohorts_status"
                             Value="1" checked> Active
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio"   id="cohorts_active" class="form-check-input" name="cohorts_status"
                                Value="0"> InActive
                            </label>
                          </div>
                    </div>

                    <div class="d-flex row pt-4 justify-content-between">
                        <div class="ml-3">
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>

                        <div class="mr-3">
                        <button class="btn btn-primary">Create Cohort</button>
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


{{--  TABLE TO DISPLAY ALL RECORDS IN COHORTS TABLES  --}}
<div class="col-md-12 mb-2 mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 class="text-white">Cohorts List</h3>
        </div>

        <div class="card-body">
            {{-- Checks if the table is empty --}}
            @if($countCohort < 1)
            <div class="alert  alert-warning alert-dismissible fade show" role="alert">
                    <i class="fa fa-volume-up"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>Nothing Here Yet !, Add New Cohorts
            </div>
            @else
            <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cohort ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created On</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>

            @foreach ($cohort as $cohorts)
            <tr>
                <th scope="row">{{$cohorts->id}}</th>

                <td>{{$cohorts->name}}</td>

                <td>
                    <form>
                        <input data-id="{{$cohorts->id}}"
                        class="toggle-class btn" type="checkbox"
                        data-onstyle="success" data-offstyle="danger"
                        data-toggle="toggle" data-on="Active"
                        data-off="InActive" {{ $cohorts->status ? 'checked' : '' }}>
                    </form>
                </td>

                <td>
                    {{ $cohorts->updated_at->format('l, M-F-Y @ H:i A') }}
                </td>

                <td>
                    <button class="deleteRecord  btn btn-outline-danger" id="del" data-id="{{ $cohorts->id }}"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
               @endforeach
            </tbody>
            </table>
            @endif
        </div>

        <div class="col-12 d-flex justify-content-center">
           {{$cohort->links() }}
        </div>

    </div>
    </div>

</div>


{{-- INLINE JS --}}
<script>

    {{-- STATUS TOGGLER --}}
    $( ".toggle-class" ).change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var cohort_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: 'changeStatus',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            data: {'status': status, 'id': cohort_id},
            success: function(data){

            }
        });
      });


      {{-- DELETE REQUEST --}}
      $(".deleteRecord").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax(
        {
            url: "cohorts/"+id,
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

{{-- <!-- Right Panel --> --}}

@endsection
