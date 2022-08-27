<?php

use App\Models\Vullnerabilitie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\VullnerabilitiesSeeder;

uses(RefreshDatabase::class);

beforeEach(function(){
    $this->seed(VullnerabilitiesSeeder::class);
});

it('can display the list of vullnerabilities', function(){
    $this->get(route('vullnerabilities.index'))->assertOk();
});

it('has vullnerabilities name [A01:2021-Broken Access Control]')->assertDatabaseHas('vullnerabilities', [
    'name' => 'A01:2021-Broken Access Control'
]);

test('count vullnerabilities if is 10')->assertDatabaseCount('vullnerabilities', 10);

test('check if vullnerability exist', function(){
    $this->get(route('vullnerabilities.index', Vullnerabilitie::inRandomOrder()->first()->id))->assertOk();
});

test('check if vullnerability not exits', function(){
    $this->get(route('vullnerabilities.show', 0))->assertStatus(404);
});

it('will be deleted', function(){
    $item = Vullnerabilitie::first();

    $this->delete(route('vullnerabilities.destroy', $item->id))->assertOk();
});

test('cant deleted because not found', function(){
    $this->delete(route('vullnerabilities.destroy', 0))->assertStatus(404);
});