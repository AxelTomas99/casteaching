<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tests\Unit\VideoTest;

class Video extends Model
{
    use HasFactory;

    public static function testedBy()
    {
        return VideoTest::class;
    }

    protected $guarded = [];
    protected $dates = ['published_at'];

    public function getFormattedPublishedAtAttribute()
    {
        $local_date = $this->published_at->locale(config('app.locale'));
        return $local_date->day . ' de ' . $local_date->monthName . ' de ' . $local_date->year;
    }

    public function getFormattedForHumansPublishedAtAttribute()
    {
        return optional($this->published_at)->diffForHumans(Carbon::now());
    }
}
