<?php

require "setup.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->id();
    $table->string('first_name')->nullable();
    $table->string('last_name')->nullable();
    $table->string('phone_number')->nullable();
    $table->string('last_step')->nullable();
    $table->foreignId('referer_id')->nullable()->constrained('users');
    $table->string('last_value')->nullable();
    $table->string('last_message_id')->nullable();
    $table->string('temp_client_id')->nullable(); // temporary client order to be sent to
    $table->enum('language', ['uz', 'ru'])->default('uz');
    $table->enum('role', ['user', 'driver', 'operator', 'administrator', 'owner', 'partner', 'developer'])->default('user'); //  person in the system
    $table->unsignedBigInteger('telegram_id')->nullable()->unique();
    $table->enum('status', ['active', 'inactive'])->default('active');
    $table->timestamps();
});

Capsule::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->text('body');
    $table->integer('created_by')->unsigned();
    $table->timestamps();
});