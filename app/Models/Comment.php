<?php

namespace App\Models;

use App\Models\Gift;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body'];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function gift()
    {
        return $this->belongsTo(Gift::class);
    }
}
