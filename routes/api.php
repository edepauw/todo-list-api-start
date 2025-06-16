<?php

use \Lomkit\Rest\Facades\Rest;

Rest::resource('todo-lists', \App\Rest\Controllers\TodoListsController::class);
Rest::resource('todos', \App\Rest\Controllers\TodosController::class);
