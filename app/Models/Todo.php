<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function todoList()
    {
        return $this->belongsTo(\App\Models\TodoList::class, 'todo_list_id');
    }
}
