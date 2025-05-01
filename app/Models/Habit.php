<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    /** @use HasFactory<\Database\Factories\HabitFactory> */
    use HasFactory;//this called trait
    //assim HabitFactory será utilizado ao usar Habit::factory
}
