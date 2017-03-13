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
        DB::table('products')->delete();
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
            'featured' => true,
            'image' => 'crystalcastles-amnesty12.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Chemical Brothers - Push The Button 12" Vinyl',
            'slug' => 'chemicalbrothers-pushthebutton12',
            'type' => 'vinyl',
            'catalogue' => '5633021',
            'genre' => 'Breaks',
            'label' => 'Freestyle Dust',
            'description' => 'As we move through the millennial years, so to The Chemical Brothers accompanied us on our musical journey. Onto album
number five, and it\'s another winner, jam packed with breaks, hybrids, crossovers and collaborations. Opening with the
monster new cut "Galvanize", featuring a killer rap by Q-Tip (and reaching no. 3 in the charts - their highest since
"Hey Boy, Hey Girl"). Next came "The Boxer", featuring Tim Burgess again, but this time ditching the \'weedy\' (his words)
approach, for a more ballsy, anthemic chorus. "Push The Button" positioned itself at the top of the pile of heavyweight
breaks-crossover LPs. While Fatboy Slim floundered and The Prodigy got all electroclash on us, The Chems stuck to what
they did best; making block-rocking, chunky tracks (which have hooks!), either on a breakbeat tip, mellower moments or
4/4 electronic drivers (techno had, of course, began to take over breakbeat as the nightclub sound of choice), all of
which create a proper, cohesive LP rather than a collection of singles and fillers. Other headlining colabs crop up:
Kele Okereke (Bloc Party), Anna-Lynne Williams (Trespassers William), The Magic Numbers, Anwar Superstar (Mos Def\'s
bro\') all stepping up to the mic to contribute. By now they were global superstars, but they still had a foot in the
underground club scene, and were still a formidable force live. One of the truly great British bands.',
            'price' => 19.99,
            'featured' => true,
            'image' => 'chemicalbrothers-pushthebutton12.jpg',
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
            'featured' => false,
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
            'featured' => false,
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
            'featured' => false,
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
            'featured' => true,
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
            'featured' => false,
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
            'featured' => true,
            'image' => 'speakers.jpg',
        ]);
    }
}
