<?php

namespace EAvis\Online;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class EAvisServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        include __DIR__ . '/routes/api.php';
    }

}
