<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "status",
        "user_id"
    ];

    protected $cast = [
        "task_created_at"=> "date_time",
        "task_completed_at"=> "date_time",
        "status"=> "boolean"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
