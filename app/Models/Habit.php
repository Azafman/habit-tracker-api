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
    public function getRouteKeyName()
    {
        return 'uuid';
    }//use column uuid to do Implicit Binding
    //see in documentation https://laravel.com/docs/12.x/routing#customizing-the-default-key-name
}
