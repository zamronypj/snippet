@extends('app')
@section('title', 'Snippet '.$snippet->title)

@section('head')
  @if(!Auth::check())
   <link href="{{ asset('/css/font-awesome.min.css')}}" rel="stylesheet">
  @endif
@endsection

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
        @if(Auth::check())  
           @include('user_content')
        @else
           @include('login_form')
        @endif
      </ul>
      @include('search_form')

    </div><!--/.nav-collapse -->
  </div>
</div>
@endsection

@section('content')
<div class="container">
 <div class="row">
    <div class="col-12">
        <h1>{{ $snippet->title }}</h1>
        <span>Created {{ $snippet->created_at->diffForHumans() }}<?php echo ($snippet->username) ? ' by '.$snippet->username : '' ; ?></span>
        <pre>
            <code>{{ $snippet->code }}</code>
        </pre>
    </div>
 </div>    
</div>
@endsection
