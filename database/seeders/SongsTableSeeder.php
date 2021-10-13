<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate/Support/Facades/DB;
use Carbon/carbon;

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
          'title' => 'Ik ga zwemmen',
          'singer' => 'Mart Hoogkamer',
          'created_at' => Carbon::now,
          'updated_at' => Carbon::now'
      ]);
    }
}
