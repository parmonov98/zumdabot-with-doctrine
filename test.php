<?php

require "setup.php";

use Models\User;
use Models\Post;

User::create(
    [
        'name' => 'Mark Mike',
        'email' => 'temp-email-1@mark.com',
        'password' => '1234'
    ]
);
Post::create(
    [
        'title' => 'New Blog Post',
        'body' => 'New Blog Content',
        'created_by' => 1
    ]
);
print_r(User::all());
print_r(Post::all());
print_r(User::find(1)->posts);