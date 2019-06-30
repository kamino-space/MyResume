<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $configs = [
            ['name', 'kamino'],
            ['mail', 'kamino@imea.me'],
            ['school', 'sdut'],
            ['major', 'ck'],
            ['wechat', 'chen1019728153'],
            ['QQ', '1019728153'],
            ['sex', '男'],
            ['blog','https://blog.aikamino.cn'],
            ['Github','https://github.com/kamino-space']
        ];
        foreach ($configs as $config) {
            DB::table('configs')->insert([
                'name' => $config[0],
                'value' => $config[1],
            ]);
        };
    }
}
