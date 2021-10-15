<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('songs')->insert([
            'title' => 'title1',
            'singer' => 'singer1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('songs')->insert([
              'title' => 'title2',
              'singer' => 'singer2',
              'created_at' => Carbon::now(),
              'updated_at' => Carbon::now()
          ]);
          DB::table('songs')->insert([
                'title' => 'title3',
                'singer' => 'singer3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            DB::table('songs')->insert([
                  'title' => 'title4',
                  'singer' => 'singer4',
                  'created_at' => Carbon::now(),
                  'updated_at' => Carbon::now()
              ]);
              DB::table('songs')->insert([
                    'title' => 'title5',
                    'singer' => 'singer5',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);

    }
}
