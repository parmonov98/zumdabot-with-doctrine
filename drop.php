<?php

require "setup.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->drop('users');
Capsule::schema()->drop('posts');