@extends('app')
@section('title', 'Snippet')

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
                <h2>My Snippet</h2>
                @if(isset($snippets) && count($snippets))
                <ul>
                    @foreach($snippets as $snippet)
                    <li><h5><a href="{{ action('ViewSnippetController@index', ['hash'=>$snippet->hash]) }}">{{ $snippet->title }}</a></h5><span>Created {{ $snippet->created_at->diffForHumans() }}<?php echo ($snippet->username) ? ' by '.$snippet->username : '' ; ?></span></li>
                    @endforeach
                </ul>
                @endif
                </div>
 </div>
</div>
@endsection