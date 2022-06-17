<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\TransCode;
use Carbon\Carbon;

class TransCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transCodes = [
            [
                'trans_code' => Str::random(5),
                'description' => 'Penarikan',
                'trans_type' => 'debet',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'trans_code' => Str::random(5),
                'description' => 'Setoran',
                'trans_type' => 'kredit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        TransCode::insert($transCodes);
    }
}
