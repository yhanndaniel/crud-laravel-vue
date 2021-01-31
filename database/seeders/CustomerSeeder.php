<?php

namespace Database\Seeders;

use App\Models\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->fill([
            'name'      => 'Larissa Laura Corte Real',
            'city_id'   => '1',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Danilo Raimundo Bernardo Brito',
            'city_id'   => '2',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Levi Diogo da Paz',
            'city_id'   => '3',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Danilo Emanuel Gonçalves',
            'city_id'   => '4',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Carlos Eduardo Caleb Roberto Alves',
            'city_id'   => '5',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Jaqueline Jennifer Rocha',
            'city_id'   => '6',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Ricardo Anthony Cardoso',
            'city_id'   => '7',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Elaine Alícia Pires',
            'city_id'   => '8',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Samuel Theo Porto',
            'city_id'   => '9',
        ])->save();

        $customer = new Customer();
        $customer->fill([
            'name'      => 'Leandro Miguel Porto',
            'city_id'   => '10',
        ])->save();
    }
}
