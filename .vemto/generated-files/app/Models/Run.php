<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Run extends Model
{
    use HasFactory;

    protected $fillable = ['attachments', 'log', 'title'];

    protected function casts(): array
    {
        return [
            'attachments' => 'array',
        ];
    }
}
