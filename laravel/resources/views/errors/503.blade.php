@extends('app')
@section('title', 'Be right back')

@section('navigation')
<div class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ action('HomeController@index') }}">Snippet</a>
    </div>
    <div class="navbar-collapse collapse" id="searchbar">
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ action('HomeController@addSnippet') }}"><span class="glyphicon glyphicon-plus"></span> New</a></li>
        <li id="userPage">
          <a href="#@userpage"><i class="icon-user"></i> My Snippet</a>
        </li>
        <li><a href="#logout" data-prevent="">Logout</a></li>
      </ul>
     
     <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group" style="display:table;">
            <input class="form-control" name="search" placeholder="Search snippet" autocomplete="off" autofocus="autofocus" type="text">
            <span class="input-group-addon" style="width:1%;"><span class="glyphicon glyphicon-search"></span></span>
          </div>
        </div>
      </form>

    </div><!--/.nav-collapse -->
  </div>
</div>
@endsection

@section('content')
<div class="container">
 <div class="row">
    <div class="col-12">
        <div class="alert alert-danger" role="alert">
        Sorry, UFO took our server away and said 503.
        </div>
    </div>
 </div>    
</div>
@endsection
