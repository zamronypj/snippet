# snippet

This is a code snippet sharing web application written in PHP using Laravel 5.2. It is inspired by <a href="http://pastebin.com">http://pastebin.com</a>

Installation
------------

<ul>
 <li>Clone this repository and then <code>cd snippet/snippet</code></li>
 <li>Make sure you have <a href="https://getcomposer.org">Composer</a> installed somewhere.</li>
 <li>Run <code>composer install</code> to install all software packages dependencies.</li>
 <li>Create a virtual host on your web server then point <em>public</em> directory as Document Root.</li>
 <li>Rename <code>.env.example</code> file to <code>.env</code> file</li>
 <li>From shell run <code>php artisan app:key</code> to generate application key (see <code>APP_KEY</code> in .env file)</li>
 <li>Create a MySQL database and user that has priviledge to basic CRUD, and create table.</li>
 <li>Edit .env file and change <code>DB_HOST</code>, <code>DB_DATABASE</code>, <code>DB_USERNAME</code>, <code>DB_PASSWORD</code> according to your database configuration.</li>
 <li>From shell run <code>php artisan migrate:install</code> to setup table.</li>
 <li>From shell run <code>composer dumpautoload</code> to generate autoload file (optional).</li>
</ul>

Features
--------

 Users are able to paste their code snippet and will receive short URL that point to their code snippet.

Dependency
----------

This application use :
<ul>
<li>Laravel 5.2 (<a href="https://laravel.com">http://laravel.com</a>)</li>
<li>Bootstrap 3.3.6 (<a href="https://getbootstrap.org">http://getbootstrap.org</a>)</li>
<li>Highlight.js (<a href="http://highlightjs.org">http://highlightjs.org</a>)</li>
</ul>

That's it. If you add new cool features, feel free to submit PR.


Zamrony P. Juhara
<a href="mailto:zamronypj@yahoo.com">Send me email</a> or Tweet me at <a href="http://twitter.com/zpjuhara">@zpjuhara</a>

