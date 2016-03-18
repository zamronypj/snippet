<form class="navbar-form" action="{{ action('SearchController@search') }}" method="get">
        <div class="form-group" style="display:inline;">
          <div class="input-group" style="display:table;">
            <input class="form-control" name="keywords" placeholder="Search snippet" autocomplete="off" autofocus="autofocus" type="text">
            <span class="input-group-addon" style="width:1%;"><span class="glyphicon glyphicon-search"></span></span>
          </div>
        </div>
</form>
