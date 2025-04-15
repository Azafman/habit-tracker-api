<?php

declare(strict_types = 1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    #[\Override]
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        //desabilita a observação do atributo $fillable nos models para operações no banco de dados
        //Exemplo de caso, ao adicionar nova coluna nuva tabela, caso não adicionar o nome da coluna no atributo $fillable no model representativo da tabela, será gerado erro
        //Como iremos trabalhar com formRequest, teremos controle de todos os campos que serão utililzados, então esse desabilitar o $fillable não seria um problema
    }
}
