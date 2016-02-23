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
    <div class="col-md-12">
                <form action="{{ action('HomeController@saveSnippet') }}" method="post">
                    {{ csrf_field() }}
                   <div class="form-group">
                       <label for="snippet">Paste your snippet:</label>
                       <textarea name="snippet" id="snippet" class="form-control" rows="8"></textarea>
                   </div>                                           
                   <div class="panel-group">
                       <div class="panel panel-default">
                          <div class="panel-heading">
                             <h4 class="panel-title">
                                 <a class="btn btn-default" data-toggle="collapse" href="#collapse1">More options ...</a>
                             </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                             <div class="form-group">
                                <label for="snippet_title">Title:</label>
                                <input type="text" class="form-control" name="snippet_title" id="snippet_title" value="untitled">
                             </div>   
                             <div class="form-group">
                                <label for="syntax">Syntax:</label>
                                <select class="form-control" name="syntax" id="syntax">
                                  @foreach($syntaxes as $syntax)
                                    <option value="{{ $syntax->id }}">{{ $syntax->syntax }}</option>
                                  @endforeach                                                     
                                </select>                              
                              </div>
                            </div>
                          </div>
                       </div>
                   </div>                   
                   <button class="btn btn-primary btn-lg" type="submit">Share</button>  
                </form>	    
    </div> 
 </div>    
 <div class="row">
                <div class="col-12">
                <h2>Snippet terbaru</h2>
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