<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Neighbourhood;
use App\Models\PropertyActionType;
use App\Models\PropertyType;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
            'name'     => 'Hussein Alsheikh',
            'username' => 'husseinSheikh93',
            'email'    => 'hussein.alsheikh@syestate.com',
            'password' => Hash::make('abc123'),
         ]);
        $this->seedStates();
        $this->seedCities();
        $this->seedNeighbourhoods();
        $this->seedPropertyTypes();
        $this->seedPropertyActionTypes();
    }

    //------------------
    protected function seedPropertyTypes()
    {
        $propertyTypesCounts    = PropertyType::count();
        if ($propertyTypesCounts > 0) {
            return true;
        }
        $PropertyTypes = require __DIR__ . '/../SeedsTemplates/PropertyTypes.php';
        foreach (collect($PropertyTypes)->chunk(250) as $key => $_250) {
            PropertyType::insert($_250->toArray());
        }
    }
    //------------------
    protected function seedPropertyActionTypes()
    {
        $propertyActionTypesCounts    = PropertyActionType::count();
        if ($propertyActionTypesCounts > 0) {
            return true;
        }
        $PropertyActionTypes                = require __DIR__ . '/../SeedsTemplates/PropertyActionTypes.php';
        foreach (collect($PropertyActionTypes)->chunk(250) as $key => $_250) {
            PropertyActionType::insert($_250->toArray());
        }
    }
    //------------------
    protected function seedCities()
    {
        $citiesCounts    = City::count();
        if ($citiesCounts > 0) {
            return true;
        }
        $Cities                = require __DIR__ . '/../SeedsTemplates/Cities.php';
        foreach (collect($Cities)->chunk(250) as $key => $_250) {
            City::insert($_250->toArray());
        }
    }
    //------------------
    protected function seedStates()
    {
        $statesCounts    = State::count();
        if ($statesCounts > 0) {
            return true;
        }
        $States                = require __DIR__ . '/../SeedsTemplates/States.php';
        foreach (collect($States)->chunk(250) as $key => $_250) {
            State::insert($_250->toArray());
        }
    }
    //------------------
    protected function seedNeighbourhoods()
    {
        $neighbourhoodsCounts    = Neighbourhood::count();
        if ($neighbourhoodsCounts > 0) {
            return true;
        }
        $neighbourhoods                = require __DIR__ . '/../SeedsTemplates/Neighbourhoods.php';
        foreach (collect($neighbourhoods)->chunk(250) as $key => $_250) {
            Neighbourhood::insert($_250->toArray());
        }
    }
    //-------------
}
