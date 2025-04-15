<?php

declare(strict_types = 1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap/app.php',
        __DIR__ . '/database',
        __DIR__ . '/tests',
        __DIR__ . '/routes',
    ])//caminhos e arquivos para o rector verificar (somente os informados aqui)
    // uncomment to reach your current PHP version
    ->withPreparedSets(
        deadCode: true,//remover código inutilizado
        codeQuality: true,//qualidade de código
        typeDeclarations: true,//força tipagem em declarações
        privatization: true,//definir elementos privados (não entendi)
        earlyReturn: true,//buscar retorna o mais rápido possível (evita muitos if e elses)
        strictBooleans: true// use boleano na aplicação
    )//
    ->withPhpSets();//pega a configuração padrão do compose
