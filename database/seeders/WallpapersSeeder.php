<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
class WallpapersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::create('wallpaper', function (Blueprint $table) {
        //     $table->string('email');
        //     $table->foreign('email')->references('email')->on('users');
        //     $table->id()->unique();
        //     $table->string('imageAddress');
        //     $table->string('title');
        //     $table->string('description');
        //     $table->integer('totalViews');
        //     $table->integer('totalDownloads');
        //     $table->string('dimmension');
        //     $table->string('camera');
        //     $table->boolean('isFavourite') -> default(0)->change();
        //     $table->string('date');
        //     $table->string('tags');            
        //     $table->timestamps();
        // });
        DB::table('wallpapers') -> insert([
            [
                'email' => '07hafif@gmail.com',
                'imageAddress' => 'default-tile-1.png',
                'title' => 'a light house sitting on top of a body of water',
                'description' => 'Download this free HD photo of lighthouse, sunset, sweden and wallpaper by Sven Pieren (@sven_pieren)',
                'totalLikes' => 16723,
                'colorCode' => '#EFEFEF',
                'dimmension' => '491x1080',
                'camera' => 'NIKON CORPORATION, NIKON Z 6',
                'date' => '07/25/2023',
                'tags' => 'Animals,Hd Wallpapers,Free hd wallpapers,Lightroom edit pictures,Nature Images,Eye catching'
            ],
            [
                'email' => '07hafif@gmail.com',
                'imageAddress' => 'default-tile-2.png',
                'title' => 'a light house sitting on top of a body of water',
                'description' => 'Download this free HD photo of lighthouse, sunset, sweden and wallpaper by Sven Pieren (@sven_pieren)',
                'totalLikes' => 16723,
                'colorCode' => '#EFEFEF',
                'dimmension' => '491x1080',
                'camera' => 'NIKON CORPORATION, NIKON Z 6',
                'date' => '07/25/2023',
                'tags' => 'Animals,Hd Wallpapers,Free hd wallpapers,Lightroom edit pictures,Nature Images,Eye catching'
            ],
            [
                'email' => '07hafif@gmail.com',
                'imageAddress' => 'default-tile-3.png',
                'title' => 'a light house sitting on top of a body of water',
                'description' => 'Download this free HD photo of lighthouse, sunset, sweden and wallpaper by Sven Pieren (@sven_pieren)',
                'totalLikes' => 16723,
                'colorCode' => '#EFEFEF',
                'dimmension' => '491x1080',
                'camera' => 'NIKON CORPORATION, NIKON Z 6',
                'date' => '07/25/2023',
                'tags' => 'Animals,Hd Wallpapers,Free hd wallpapers,Lightroom edit pictures,Nature Images,Eye catching'
            ],
            [
                'email' => '07hafif@gmail.com',
                'imageAddress' => 'default-tile-4.png',
                'title' => 'a light house sitting on top of a body of water',
                'description' => 'Download this free HD photo of lighthouse, sunset, sweden and wallpaper by Sven Pieren (@sven_pieren)',
                'totalLikes' => 16723,
                'colorCode' => '#EFEFEF',
                'dimmension' => '491x1080',
                'camera' => 'NIKON CORPORATION, NIKON Z 6',
                'date' => '07/25/2023',
                'tags' => 'Animals,Hd Wallpapers,Free hd wallpapers,Lightroom edit pictures,Nature Images,Eye catching'
            ],
            [
                'email' => '07hafif@gmail.com',
                'imageAddress' => 'default-tile-5.png',
                'title' => 'a light house sitting on top of a body of water',
                'description' => 'Download this free HD photo of lighthouse, sunset, sweden and wallpaper by Sven Pieren (@sven_pieren)',
                'totalLikes' => 16723,
                'colorCode' => '#EFEFEF',
                'dimmension' => '491x1080',
                'camera' => 'NIKON CORPORATION, NIKON Z 6',
                'date' => '07/25/2023',
                'tags' => 'Animals,Hd Wallpapers,Free hd wallpapers,Lightroom edit pictures,Nature Images,Eye catching'
            ],
            
        ]);
    }
}
