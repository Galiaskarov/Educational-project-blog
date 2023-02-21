<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Ignition\Tests\TestClasses\Models\Car;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function getDateAsCarbonAttribute()
    {
        return Carbon::parse($this->created_at);
    }
}
