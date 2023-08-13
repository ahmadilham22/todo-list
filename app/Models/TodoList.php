<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $table = 'todo_list';

    protected $fillable = [
        'users_id',
        'description',
        'judul',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // User::class merujuk ke model User
    }
}
