<?php

namespace Tests\Feature;

use App\Models\Serie;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

/**
 * @covers \App\View\Components\CasteachingSeries
 */

//public function guest_users_can_see_published_series(){}
//public function guest_users_cannot_see_unpublished_series(){}
//public function regular_users_cannot_see_unpublished_series(){}
//public function superadmin_users_can_see_all_series(){}

/**
 * @covers CasteachingSeries::class
 */

class CasteachingSeriesTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_can_see_published_series()
    {
        $serie1 = Serie::create([
            'title' => 'TDD (Test Driven Development)',
            'description'=>'Bla Bla Bla',
            'image'=>'tdd.png',
            'teacher_name'=>'Sergi Tur Badena',
            'teacher_photo_url'=>'https://www.gravatar.com/avatar/'.md5('sergiturbadenas@gmail.com'),
            'created_at' => Carbon::now()->addSeconds(1),
        ]);

        $serie2 = Serie::create([
            'title' => 'CRUD amv Vue i Laravel',
            'description'=>'Bla Bla Bla',
            'image'=>'crud_amb_vue_laravel.png',
            'teacher_name'=>'Sergi Tur Badena',
            'teacher_photo_url'=>'https://www.gravatar.com/avatar/'.md5('sergiturbadenas@gmail.com'),
            'created_at' => Carbon::now()->addSeconds(),
        ]);

        $serie3 = Serie::create([
            'title' => 'Ionic Real World',
            'description'=>'Bla Bla Bla',
            'image'=>'ionic_real_world.png',
            'teacher_name'=>'Sergi Tur Badena',
            'teacher_photo_url'=>'https://www.gravatar.com/avatar/'.md5('sergiturbadenas@gmail.com'),
            'created_at' => Carbon::now()->addSeconds(3),
        ]);

        $view = $this->blade('<x-casteaching-series/>');

        $view->assertSeeInOrder([$serie1->title,$serie2->title,$serie3->title]);
        $view->assertSeeInOrder([$serie1->description,$serie2->description,$serie3->description]);
        $view->assertSeeInOrder([$serie1->teacher_name,$serie2->teacher_name,$serie3->teacher_name]);
        $view->assertSeeInOrder([$serie1->image,$serie2->image,$serie3->image]);
        $view->assertSeeInOrder([$serie1->teacher_photo_url,$serie2->teacher_photo_url,$serie3->teacher_photo_url]);

    }
}
