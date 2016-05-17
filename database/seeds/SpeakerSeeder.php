<?php

use Illuminate\Database\Seeder;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('speakers')->delete();

        $speaker = [
            [
                'name' => 'Marijn',
                'title' => 'CEO',
                'email' => 'rut@mar.be',
                'avatar' => null,
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
            ],
            [
                'name' => 'Sara',
                'title' => 'specialist',
                'email' => 'riano@sara.be',
                'avatar' => null,
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
            ],
            [
                'name' => 'Jasper De Smet',
                'title' => 'CTO',
                'email' => 'hello@jasperdesmet.be',
                'avatar' => null,
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
            ]
        ];

        DB::table('speakers')->insert($speaker);
    }
}
