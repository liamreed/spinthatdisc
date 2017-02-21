<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Crystal Castles - Amnesty 12" Vinyl',
            'slug' => 'crystalcastles-amnesty12',
            'type' => 'vinyl',
            'catalogue' => 'AMNESTY02',
            'genre' => 'Electronic',
            'label' => 'Fiction Records',
            'tracklist' => 'A1 - Femen, A2 - Fleece, A3 - Char, A4 - Enth, A5 - Sadist, A6 - Teach Her How To Hunt, B1 - Chloroform, B2 - Frail, B3 - Concrete, B4 - Ornament, B5 - Kept, B6 - Their Kindness Is Charade',
            'description' => 'Crystal Castles are an experimental electronic band formed in 2003 in Toronto, Ontario by songwriter/producer Ethan
Kath. Crystal Castles are known for their chaotic live shows and lo-fi melancholic homemade productions. They released
many limited vinyl singles between 2006 and 2007 before releasing a trilogy of critically acclaimed albums between 2008
and 2012. Their debut album, Crystal Castles, was released in 2008 and was listed on NME\'s "Top 100 Greatest Albums of
the Decade" list at # 39. In 2010 their second album, titled (II), charted on the Billboard 200, and includes their
first worldwide charting single, “Not In Love" featuring vocalist Robert Smith of The Cure. Their third album, (III),
was released on November 12, 2012 and was the # 1 album of 2012 on Tumblr and also on Hype Machine. The album included 4
singles: “Plague", "Wrath of God", "Sad Eyes" and "Affection".

Glass announced her departure from the band in October 2014, citing personal and professional reasons. In April 2015,
Ethan Kath released a new Crystal Castles track, "Frail", featuring a new singer, Edith Frances. He also announced they
are writing and recording a new album, and here it is !',
            'price' => 15.41,
            'image' => 'crystalcastles-amnesty12.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Xbox One',
            'slug' => 'xbox-one',
            'type' => 'equipment',
            'catalogue' => '',
            'genre' => '',
            'label' => '',
            'description' => 'description goes here',
            'price' => 449.99,
            'image' => 'xbox-one.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Apple Macbook Pro',
            'slug' => 'macbook-pro',
            'type' => 'equipment',
            'catalogue' => '',
            'genre' => '',
            'label' => '',
            'description' => 'description goes here',
            'price' => 2299.99,
            'image' => 'macbook-pro.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPad Retina',
            'slug' => 'ipad-retina',
            'type' => 'equipment',
            'catalogue' => '',
            'genre' => '',
            'label' => '',
            'description' => 'description goes here',
            'price' => 799.99,
            'image' => 'ipad-retina.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Acoustic Guitar',
            'slug' => 'acoustic-guitar',
            'type' => 'equipment',
            'catalogue' => '',
            'genre' => '',
            'label' => '',
            'description' => 'description goes here',
            'price' => 699.99,
            'image' => 'acoustic.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Electric Guitar',
            'slug' => 'electric-guitar',
            'type' => 'equipment',
            'catalogue' => '',
            'genre' => '',
            'label' => '',
            'description' => 'description goes here',
            'price' => 899.99,
            'image' => 'electric.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Headphones',
            'slug' => 'headphones',
            'type' => 'equipment',
            'catalogue' => '',
            'genre' => '',
            'label' => '',
            'description' => 'description goes here',
            'price' => 99.99,
            'image' => 'headphones.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Speakers',
            'slug' => 'speakers',
            'type' => 'equipment',
            'catalogue' => '',
            'genre' => '',
            'label' => '',
            'description' => 'description goes here',
            'price' => 499.99,
            'image' => 'speakers.jpg',
        ]);
    }
}
