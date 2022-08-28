<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class Vullnerabilitie extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'description'];
    protected $appends = ['short','published'];

    protected function short() : Attribute
    {
        return Attribute::make(
            get: fn ($value, $attribute) => Str::words($attribute['description'], 8)
        );
    }

    protected function published() : Attribute
    {
        return Attribute::make(
            get: fn ($value, $attribute) => (new Carbon($attribute['created_at']))->format('d M Y')
        );
    }
}
