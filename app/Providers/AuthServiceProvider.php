<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(){
        $this->registerPolicies();

  /*      ResetPassword::toMailUsing(function($notifiable, $url) {
            $expires = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
            return(new MailMessage)
            ->subject('Notificação de Alterar Senha')
            ->line('Se você esta recebendo este email, é porque foi solicitado a alteração de senha')
            ->action('Alterar Senha', $url)
            ->line('Este link irá expirar em '.$expires. '.')
            ->line('Se você não solicitou este serviço, ignore esta mensagem.');
        });*/
    }
}
