<?php

use Illuminate\Database\Seeder;

class SyntaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('syntaxes')->insert([
              ['syntax' => 'auto'],
              ['syntax' => 'html'],
              ['syntax' => 'css'],
              ['syntax' => 'perl'],
              ['syntax' => 'cpp'],
              ['syntax' => 'java'],
              ['syntax' => 'php'],
              ['syntax' => 'javascript'],
              ['syntax' => 'json'],
              ['syntax' => 'actionscript'],
              ['syntax' => 'basic'],
              ['syntax' => 'markdown'],
              ['syntax' => 'lua'],
              ['syntax' => 'cs'],
              ['syntax' => 'diff'],
              ['syntax' => 'yaml'],
              ['syntax' => 'dos'],
              ['syntax' => 'python'],
              ['syntax' => 'objectivec'],
              ['syntax' => 'dts'],
              ['syntax' => 'coffeescript'],
              ['syntax' => 'apache'],
              ['syntax' => 'nginx'],
              ['syntax' => 'ini'],
              ['syntax' => 'arduino'],
              ['syntax' => 'http'],
              ['syntax' => 'erlang'],
              ['syntax' => 'glsl'],
              ['syntax' => 'ruby'],
              ['syntax' => 'xml'],
              ['syntax' => 'sql'],
              ['syntax' => 'bash'],
              ['syntax' => 'makefile'],
              ['syntax' => 'delphi']
            ]);
    }
}
