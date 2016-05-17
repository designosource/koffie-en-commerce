<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('videos')->delete();

        $videos = [
            [
                'speaker_id' => '2',
                'title' => 'video 1',
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
                'vimeo' => '89493177',
                'slug' => 'video-1',
            ],
            [
                'speaker_id' => '1',
                'title' => 'video 2',
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
                'vimeo' => '89493177',
                'slug' => 'video-2',
            ],
            [
                'speaker_id' => '3',
                'title' => 'video 3',
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
                'vimeo' => '89493177',
                'slug' => 'video-3',
            ],
            [
                'speaker_id' => '2',
                'title' => 'video 4',
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
                'vimeo' => '89493177',
                'slug' => 'video-4',
            ],
            [
                'speaker_id' => '1',
                'title' => 'video 5',
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
                'vimeo' => '89493177',
                'slug' => 'video-5',
            ],
            [
                'speaker_id' => '1',
                'title' => 'video 6',
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
                'vimeo' => '89493177',
                'slug' => 'video-6',
            ],
            [
                'speaker_id' => '3',
                'title' => 'video 7',
                'short_description' => 'Lucas ipsum dolor sit amet neimoidia tchuukthai gotal hutt boltrunians derlin ismaren y bith skywalker ackbar. Evazan zannah organa conan. Tapani shaak hapan roonan ongree. Kal rishi beru aayla terrik selkath boba. Muunilinst obi-wan mantell solo. Solo drovian shaak kendal balosar chagrian secura moff darth.',
                'long_description' => 'Durron wharl sykes breha aramandi tagge xting. Darth bib su amanin klivian gerb cracken. Ponda grodin utapaun lars darth joruus. Gank finis kubaz shiido anakin naboo codru-ji sith. Wirutid talortai freedon nien solo zeltron zorba huk. Tahiri moff hutt qui-gon djo. Whaladon grievous boba aparo wedge nunb piett antilles. Kal derek corran hobbie conan. Drall ysanne joh plo b4-d4 derek besalisk. Saurin nosaurian utapau poggle ponda castell bimm wroonian saleucami. Saleucami huk vor quence. Crynyd jabba conan crynyd djo klivian r5-d4 depa conan.',
                'vimeo' => '89493177',
                'slug' => 'video-7',
            ],
        ];

        DB::table('videos')->insert($videos);
    }
}
