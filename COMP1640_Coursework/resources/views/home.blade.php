@extends('layouts.header')

<<<<<<< HEAD
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home">iIDEA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home</a></li>
<<<<<<< Updated upstream
=======
        <li><a href="idea">Dashboard</a></li>
>>>>>>> Stashed changes
        <li><a href="page">Personal Page</a></li>
        <li><a href="idea">Ideas</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search other users">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
=======
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
{{--                    <div class="card-header">{{ __('Dashboard') }}</div>   --}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(auth()->user()->user_role_id == 1)
                                You are {{ auth()->user()->name }}/{{auth()->user()->userRoles->name}}
                                <div><a href="{{route('admin.home')}}">List users</a></div>
                            @endif

                        @if(auth()->user()->user_role_id == 4)

                                You are {{ auth()->user()->name }}
                        @endif
{{--                        $test = auth()->user()->user_role_id--}}
{{--                            dd($test);--}}

                        @if(auth()->user()->user_role_id == 2)

                                You are {{ auth()->user()->name }}/{{ auth()->user()->userRoles->name }}
                                <div> <a href="{{route('qam.home')}}">List Categories</a></div>
                            @endif

                        @if(auth()->user()->user_role_id == 3)

                                You are {{ auth()->user()->name }}/{{auth()->user()->userRoles->name}}
                                <div> <a href="{{route('qac.home')}}">List Departments</a></div>

                        @endif

                        <div><a href="{{route('idea.index')}}">List Ideas</a></div>
                    </div>
                </div>
            </div>
>>>>>>> 3ecd269c4fce8a1fd60dc84e3e3de4ad92a1a9e0
        </div>

    </div>
@endsection

