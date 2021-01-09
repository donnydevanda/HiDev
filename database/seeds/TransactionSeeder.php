<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Transactions')->insert([
            [
                'users_id' => '3',
                'jobs_id' => '1',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '3',
                'jobs_id' => '4',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '4',
                'jobs_id' => '2',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '4',
                'jobs_id' => '5',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '5',
                'jobs_id' => '3',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '5',
                'jobs_id' => '6',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '6',
                'jobs_id' => '2',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '6',
                'jobs_id' => '5',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '7',
                'jobs_id' => '3',
                'status' => 'Waiting'
            ],
            [
                'users_id' => '7',
                'jobs_id' => '4',
                'status' => 'Waiting'
            ],
        ]);
    }
}
