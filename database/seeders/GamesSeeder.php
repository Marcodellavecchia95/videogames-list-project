<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'description' => 'Un open world rivoluzionario ambientato a Hyrule.',
                'release_date' => '2017-03-03',
                'cover_image' => 'https://zelda.nintendo.com/breath-of-the-wild/assets/img/media/wallpaper-1-thumb.jpg'
            ],
            [
                'title' => 'Elden Ring',
                'description' => 'Un vasto action RPG sviluppato da FromSoftware.',
                'release_date' => '2022-02-25',
                'cover_image' => 'https://www.nintendo.com/eu/media/images/assets/nintendo_switch_2_games/eldenringtarnishededition/2x1_NSwitch2_EldenRing.jpg'
            ],
            [
                'title' => 'Super Mario Odyssey',
                'description' => 'Mario parte per un viaggio attorno al mondo con Cappy.',
                'release_date' => '2017-10-27',
                'cover_image' => 'https://upload.wikimedia.org/wikipedia/en/8/8d/Super_Mario_Odyssey.jpg'
            ],
            [
                'title' => 'Hollow Knight',
                'description' => 'Un metroidvania indie ambientato nel regno di Hallownest.',
                'release_date' => '2017-02-24',
                'cover_image' => 'https://data.xxlgamer.com/products/4252/qATiGpJ2bh09GJ-big.jpg'
            ],
            [
                'title' => 'The Witcher 3: Wild Hunt',
                'description' => 'Le avventure di Geralt di Rivia in un open world fantasy.',
                'release_date' => '2015-05-19',
                'cover_image' => 'https://upload.wikimedia.org/wikipedia/en/0/0c/Witcher_3_cover_art.jpg'
            ],
            [
                'title' => 'Cyberpunk 2077',
                'description' => 'Un RPG futuristico ambientato a Night City.',
                'release_date' => '2020-12-10',
                'cover_image' => 'https://upload.wikimedia.org/wikipedia/en/9/9f/Cyberpunk_2077_box_art.jpg'
            ],
            [
                'title' => 'Dark Souls III',
                'description' => 'Un action RPG punitivo e appassionante.',
                'release_date' => '2016-04-12',
                'cover_image' => 'https://gaming-cdn.com/images/products/2060/orig/dark-souls-3-deluxe-edition-deluxe-edition-pc-gioco-steam-cover.jpg?v=1703156659'
            ],
            [
                'title' => 'Bloodborne',
                'description' => 'Un dark fantasy gotico sviluppato da FromSoftware.',
                'release_date' => '2015-03-24',
                'cover_image' => 'https://image.api.playstation.com/vulcan/img/rnd/202010/2614/Sy5e8DmeKIJVjlAGraPAJYkT.png'
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'description' => 'Un western open world con una storia profonda.',
                'release_date' => '2018-10-26',
                'cover_image' => 'https://upload.wikimedia.org/wikipedia/en/4/44/Red_Dead_Redemption_II.jpg'
            ],
            [
                'title' => 'God of War Ragnarök',
                'description' => 'Kratos e Atreus affrontano il destino tra dèi norreni.',
                'release_date' => '2022-11-09',
                'cover_image' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2322010/capsule_616x353.jpg?t=1750909504'
            ],
        ];

        foreach ($games as $game) {

            $newGame = new Game();

            $newGame->title = $game["title"];
            $newGame->description = $game["description"];
            $newGame->release_date = $game["release_date"];
            $newGame->cover_image = $game["cover_image"];
            $newGame->save();
        }
    }
}
