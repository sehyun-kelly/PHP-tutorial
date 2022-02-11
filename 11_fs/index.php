<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

// Create directory

// Rename directory

// Delete directory

// Read files and folders inside directory
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/posts');

$users = json_decode($usersJson, true);
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('lorem.txt');
// is_dir
// filemtime
// filesize
// disk_free_space
// file