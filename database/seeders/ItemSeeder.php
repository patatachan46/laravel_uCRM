<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ダミーデータ作成
        DB::table('items')->insert([
            [
              'name' => 'お肉',
              'memo' => '熊本産',
              'price' => 999
            ],
            [
              'name' => 'お刺身',
              'memo' => '熊本産',
              'price' => 499
            ],
            [            
              'name' => '唐揚げ弁当',
              'memo' => '当店でお肉揚げました！',
              'price' => 699
            ],
            [            
              'name' => 'シャインマスカット',
              'memo' => '熊本産',
              'price' => 1499
            ],
      ]);
  }
}
