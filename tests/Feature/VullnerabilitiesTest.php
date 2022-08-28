<?php

use App\Models\Vullnerabilitie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\VullnerabilitiesSeeder;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

use function Pest\Laravel\deleteJson;
use function Pest\Laravel\postJson;

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
    $this->get(route('vullnerabilities.show', 0))->assertStatus(Response::HTTP_NOT_FOUND);
});

it('will be deleted', function(){
    $vullnerability = Vullnerabilitie::factory()->create();
    deleteJson(route('vullnerabilities.destroy', $vullnerability->id))->assertStatus(Response::HTTP_OK);
});

test('cant deleted because not found', function(){
    $this->delete(route('vullnerabilities.destroy', 0))->assertStatus(Response::HTTP_NOT_FOUND);
});

it('should create', function(){
    $vullnerability = postJson(route('vullnerabilities.store'), [
        'name'  => 'test',
        'description'   => 'lorem ipsume dolar'
    ])->assertStatus(Response::HTTP_FOUND);
});