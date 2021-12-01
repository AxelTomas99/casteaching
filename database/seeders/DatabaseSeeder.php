<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => config('casteaching.default_user.name'),
            'email' => config('casteaching.default_user.mail'),
            'password' => Hash::make(config('casteaching.default_user.password')),
        ]);

        User::create([
            'name' => config('casteaching.default_teacher.name'),
            'email' => config('casteaching.default_teacher.mail'),
            'password' => Hash::make(config('casteaching.default_teacher.password')),
        ]);

        $video = Video::create([
            'title' => 'Ubuntu 101',
            'description' => '# Here description',
            'url' => 'https://youtu.be/*',
            'published_at' => Carbon::parse('December 13, 2020 8:00pm'),
            'previous' => null,
            'next' => null,
            'series_id' => 1
        ]);
    }
}
