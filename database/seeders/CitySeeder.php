<?php

namespace Database\Seeders;

use App\Models\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->fill([ 'city' => 'Belo Horizonte' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Brasília' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Curitiba' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Florianópolis' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Fortaleza' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Goiânia' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'João Pessoa' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Manaus' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Natal' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Porto Alegre' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Recife' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Rio de Janeiro' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Salvador' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'São Paulo' ])->save();

        $city = new City();
        $city->fill([ 'city' => 'Teresina' ])->save();
    }
}
