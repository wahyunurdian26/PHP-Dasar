<?php


// Single Quote/kutip 1 
echo ('Nama :');
echo(' wahyu nurdian');

// Double Quote/kutip 2 
echo ("\n");            //Enter
echo ("Nama :"); 
echo(" wahyu nurdian");

// Multiline String Heredoc : membuat string yang panjang sehingga tdk perlu melakukan enter, tab scra manual
echo ("\n");
echo <<<WAHYU
Ini adalah wahyu
I love u
WAHYU;


// Nowdoc String Heredoc : nowdoc tidak memiliki kemampuan parsing seperti Heredoc atau Double Quote
echo <<<'WAHYU'
wahyu nurdian 
Telkomsel 
WAHYU;


