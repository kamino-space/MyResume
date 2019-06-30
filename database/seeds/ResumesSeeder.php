<?php

use Illuminate\Database\Seeder;

class ResumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resumes')->insert([
            'key' => 'alibaba',
            'template' => 'default',
            'style'=>'default',
            'data'=>json_encode(['job'=>'ceo']),
        ]);
        DB::table('resumes')->insert([
            'key' => 'tencent',
            'template' => 'default',
            'style'=>'default',
            'data'=>json_encode(['job'=>'cto']),
        ]);
    }
}
