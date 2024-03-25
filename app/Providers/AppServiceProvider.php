<?php

namespace App\Providers;

use App\Models\Passport\Client;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::hashClientSecrets();
        Passport::tokensExpireIn(now()->addDays(15));
        Passport::refreshTokensExpireIn(now()->addDays(30));
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));
        Passport::useClientModel(Client::class);
        Passport::enablePasswordGrant();
        Passport::enableImplicitGrant();

        Passport::tokensCan([
            // Api Transactions -----------------------------------
            'panel.transaction.index'   => 'Lista de Transações',
            'api.transaction.index'     => 'Lista de Transações',
            'api.transaction.store'     => 'Inserir Transação',
            'api.transaction.show'      => 'Visualizar um transação',
            'api.transaction.update'    => 'Editar Transação',
            'api.transaction.destroy'   => 'Deletar Transação',
            'api.transaction.datatable' => 'Tabela Transação',
        ]);

        /* Passport::setDefaultScope([
             'teste1',
             'teste2',
         ]);*/
    }
}
