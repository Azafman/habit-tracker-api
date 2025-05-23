<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitLog extends Model
{
    /** @use HasFactory<\Database\Factories\HabitLogFactory> */
    use HasFactory;//this called trait
}
