        <li id="userPage">
          <a href="{{ action('MySnippetController@index') }}"><i class="icon-user"></i> My Snippet</a>
        </li>
        <li><a href="{{ action('Auth\AuthController@logout') }}" data-prevent="">Logout</a></li>
