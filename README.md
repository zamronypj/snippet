# snippet
Code snippet sharing web application

This is a code snippet web application written in PHP usng Laravel 5.2. It is inspired by <a href="http://pastebin.com">http://pastebin.com</a>

##Installation
<ul>
 <li>Create a virtual host on your web server then point public directory to virtual host document root.</li>
 <li>From shell run `php artisan app:key` to generate application key (see APP_KEY in .env file)</li>
 <li>Create a MySQL database and user that has priviledge to basic CRUD, and create table.</li>
 <li>Edit .env file and change DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD according to your database configuration.</li>
 <li>From shell run `php artisan migrate` to setup table.</li>
 <li>From shell run `composer dumpautoload` to generate autoload file.</li>
</ul>
##Features
 Users are able to paste their code snippet and will receive short URL that point to their code snippet.
 
##Depedency
This application use :
Laravel 5.2 (<a href="http://laravel.com">http://laravel.com</a>)
Bootstrap 3.3.6 (<a href="http://getbootstrap.org">http://getbootstrap.org</a>)
Highlight.js (<a href="http://highlightjs.org">http://highlightjs.org</a>)

That's it

Zamrony P. Juhara
<a href="mailto:zamronypj@yahoo.com">Send me email</a> or Tweet me at <a href="http://twitter.com/zpjuhara">@zpjuhara</a>

