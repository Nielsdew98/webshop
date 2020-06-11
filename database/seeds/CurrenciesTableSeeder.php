<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $currencies = ['USD','EUR','GBP'];
        foreach ($currencies as $currency){
            \App\Currency::create(['iso'=>$currency]);
        }
    }
}
