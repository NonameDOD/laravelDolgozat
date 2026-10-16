<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name','time','address'])]
class events extends Model
{
    /** @use HasFactory<\Database\Factories\EventsFactory> */
    use HasFactory;
}
