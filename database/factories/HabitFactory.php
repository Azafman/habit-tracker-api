<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            "Acordar cedo",
            "Meditar diariamente",
            "Ler todos os dias",
            "Fazer exercícios físicos",
            "Beber bastante água",
            "Planejar o dia",
            "Evitar redes sociais ao acordar",
            "Manter a casa organizada",
            "Dormir cedo",
            "Evitar açúcar em excesso",
            "Anotar tarefas",
            "Aprender algo novo",
            "Evitar procrastinação",
            "Praticar gratidão",
            "Economizar dinheiro",
            "Comer alimentos saudáveis",
            "Fazer pausas durante o trabalho",
            "Revisar metas semanalmente",
            "Cuidar da saúde mental",
            "Focar em uma tarefa por vez",
            "Limitar tempo de tela",
            "Praticar empatia",
            "Cuidar da higiene pessoal",
            "Evitar fofocas",
            "Ouvir mais do que falar",
            "Cultivar bons relacionamentos",
            "Fazer alongamentos",
            "Evitar multitarefas",
            "Celebrar pequenas conquistas",
            "Estudar todos os dias",
        ];

        return [
            'user_id' => User::factory(),
            //se nenhum valor for passado para user_id, o factory()->create será (mesmo usando o método make())
            //executado e o usuário então criado será utilizado para user_id
            //exemplo de valor passado veja HabitSeeder.php
            'uuid'  => fake()->unique()->uuid(),
            'title' => fake()->randomElement($habits),
            //seleciona um item aleatorio de $habits
        ];
    }
}
