<?php

namespace Database\Seeders;

use App\Models\publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publisher::insert(
            [
                [
                    'id' => '1',
                    'name' => 'Kodansha Ltd.',
                    'address' => '2-12-21 Otowa,Bunkyo-ku Tokyo 112-8001 Japan',
                    'phone' => "+81-3-5395-3576",
                    'email' => 'hello@kodanshacomics.com',
                    'image' => 'https://www.kodansha.com/img/ogp.png'
                ],
                [
                    'id' => '2',
                    'name' => 'Shueisha Inc.',
                    'address' => '1-2-1 Nihonbashi, Hongoku-cho, Chuo-ku, Tokyo 103-8345',
                    'phone' => "+81-3-3279-0332",
                    'email' => 'info@toyokeizai.co.jp',
                    'image' => 'https://www.shueisha.co.jp/wp-content/themes/shueisha/shared/image/logo-header.svg'
                ],
                [
                    'id' => '3',
                    'name' => 'Shōgakukan Inc.',
                    'address' => 'Yamato Bldg. 2F, 2-1-2 Sengoku, Bunkyo-ku, Tokyo 112-0011',
                    'phone' => "+81-3-5319-4916",
                    'email' => 'toiawase@hituzi.co.jp',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Shogakukan_logo.svg/640px-Shogakukan_logo.svg.png'
                ]
            ]
        );
    }
}
