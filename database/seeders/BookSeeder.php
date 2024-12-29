<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        book::insert(
            [
                [
                    'id' => 1,
                    'publisher_id' => 1,
                    'title' => 'Grand Blue',
                    'author' => 'Kenji Inoue',
                    'year' => 2014,
                    'synopsis' => 'Among the seaside town of Izu\'s ocean waves and rays of shining sun, Iori Kitahara is just beginning his freshman year at Izu University. As he moves into his uncle\'s scuba diving shop, Grand Blue, he eagerly anticipates his dream college life, filled with beautiful girls and good friends. But things don\'t exactly go according to plan. Upon entering the shop, he encounters a group of rowdy, naked upperclassmen, who immediately coerce him into participating in their alcoholic activities. Though unwilling at first, Iori quickly gives in and becomes the heart and soul of the party. Unfortunately, this earns him the scorn of his cousin, Chisa Kotegawa, who walks in at precisely the wrong time. Undeterred, Iori still vows to realize his ideal college life, but will things go according to plan this time, or will his situation take yet another dive?',
                    'image' => 'https://cdn.myanimelist.net/images/manga/2/166124l.jpg'
                ],
                [
                    'id' => 2,
                    'publisher_id' => 2,
                    'title' => 'Spy x Family',
                    'author' => 'Tatsuya Endo',
                    'year' => 2019,
                    'synopsis' => 'For the agent known as "Twilight," no order is too tall if it is for the sake of peace. Operating as Westalis\' master spy, Twilight works tirelessly to prevent extremists from sparking a war with neighboring country Ostania. For his latest mission, he must investigate Ostanian politician Donovan Desmond by infiltrating his son\'s school: the prestigious Eden Academy. Thus, the agent faces the most difficult task of his career: get married, have a child, and play family. Twilight, or "Loid Forger," quickly adopts the unassuming orphan Anya to play the role of a six-year-old daughter and prospective Eden Academy student. For a wife, he comes across Yor Briar, an absent-minded office worker who needs a pretend partner of her own to impress her friends. However, Loid is not the only one with a hidden nature. Yor moonlights as the lethal assassin "Thorn Princess." For her, marrying Loid creates the perfect cover. Meanwhile, Anya is not the ordinary girl she appears to be; she is an esper, the product of secret experiments that allow her to read minds. Although she uncovers their true identities, Anya is thrilled that her new parents are cool secret agents! She would never tell them, of course. That would ruin the fun. Under the guise of "The Forgers," the spy, the assassin, and the esper must act as a family while carrying out their own agendas. Although these liars and misfits are only playing parts, they soon find that family is about far more than blood relations.',
                    'image' => 'https://cdn.myanimelist.net/images/manga/3/255895l.jpg'
                ],
                [
                    'id' => 3,
                    'publisher_id' => 1,
                    'title' => 'Vinland Saga',
                    'author' => 'Makoto Yukimura',
                    'year' => 2005,
                    'synopsis' => 'Thorfinn, son of one of the Vikings\' greatest warriors, is among the finest fighters in the merry band of mercenaries run by the cunning Askeladd, an impressive feat for a person his age. However, Thorfinn is not part of the group for the plunder it entails—instead, for having caused his family great tragedy, the boy has vowed to kill Askeladd in a fair duel. Not yet skilled enough to defeat him, but unable to abandon his vengeance, Thorfinn spends his boyhood with the mercenary crew, honing his skills on the battlefield among the war-loving Danes, where killing is just another pleasure of life. One day, when Askeladd receives word that Danish prince Canute has been taken hostage, he hatches an ambitious plot—one that will decide the next King of England and drastically alter the lives of Thorfinn, Canute, and himself. Set in 11th-century Europe, Vinland Saga tells a bloody epic in an era where violence, madness, and injustice are inescapable, providing a paradise for the battle-crazed and utter hell for the rest who live in it.',
                    'image' => 'https://cdn.myanimelist.net/images/manga/2/188925l.jpg'
                ],
                [
                    'id' => 4,
                    'publisher_id' => 1,
                    'title' => 'Houseki no Kuni',
                    'author' => 'Haruko Ichikawa',
                    'year' => 2012,
                    'synopsis' => 'Long ago, Earth was struck by six meteorites, creating six moons and leaving a lone island in their wake. Those who could not make it to the island sank to the bottom of the ocean, where, over time, they slowly turned to crystal. As countless millennia passed, 28 of these crystallized lifeforms, known as the Lustrous, rose from the depths and resided on the island. Led by the wise Kongou-sensei, they must defend themselves against the seemingly infinite number of Lunarians, inhabitants of the moons who seek to harvest their valuable bodies for crafting weapons and jewelry. Houseki no Kuni centers around Phosphophyllite, a young gem about to turn three hundred years old. Clumsy, extremely fragile, and having no visible talent, they are one of the weakest gems around, unable to help in the fight against the Lunarians in any meaningful way. But as the battle with the otherworldly invaders rages on, they soon learn that power comes at a cost that no one should have to pay.',
                    'image' => 'https://cdn.myanimelist.net/images/manga/2/115445l.jpg'
                ],
                [
                    'id' => 5,
                    'publisher_id' => 2,
                    'title' => 'Kaguya-sama wa Kokurasetai',
                    'author' => 'Aka Akasaka',
                    'year' => 2015,
                    'synopsis' => 'Considered a genius due to having the highest grades in the country, Miyuki Shirogane leads the prestigious Shuchiin Academy\'s student council as its president, working alongside the beautiful and wealthy vice president Kaguya Shinomiya. The two are often regarded as the perfect couple by students despite them not being in any sort of romantic relationship. However, the truth is that after spending so much time together, the two have developed feelings for one another; unfortunately, neither is willing to confess, as doing so would be a sign of weakness. With their pride as elite students on the line, Miyuki and Kaguya embark on a quest to do whatever is necessary to get a confession out of the other. Through their daily antics, the battle of love begins!',
                    'image' => 'https://cdn.myanimelist.net/images/manga/3/188896l.jpg'
                ],
                [
                    'id' => 6,
                    'publisher_id' => 3,
                    'title' => 'Karakai Jouzu no Takagi-san',
                    'author' => 'Souichirou Yamamoto',
                    'year' => 2012,
                    'synopsis' => 'With a smirk, the mischievous middle school boy Nishikata glances over at Takagi, the girl seated next to him in class. He has just devised a master plan to finally get back at her for all the merciless teasing inflicted upon him. As he is about to set his plan into motion, Takagi intervenes with a single comment that halts Nishikata right in his tracks. She had turned the tables on him yet again. "If you blush, you lose." That has been the unwritten rule set between the two ever since they encountered one another in middle school. Day after day, loss after loss, Nishikata strives to see Takagi red with embarrassment, but his futile attempts are only met by further ridicule. Beyond this vicious cycle of trying to outwit one another, will their relationship ever evolve?',
                    'image' => 'https://cdn.myanimelist.net/images/manga/3/136045l.jpg'
                ]
            ]
        );
    }
}
