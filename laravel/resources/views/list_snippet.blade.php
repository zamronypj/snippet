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
                <h2>My Snippet</h2>
                @if(isset($snippets) && count($snippets))
                <ul>
                    @foreach($snippets as $snippet)
                    <li><a href="{{ action('ViewSnippetController@index', ['hash'=>$snippet->hash]) }}">{{ $snippet->title }}</a></li>
                    @endforeach
                </ul>
                @endif
                </div>
 </div>
</div>
@endsection