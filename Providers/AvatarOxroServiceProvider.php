<?php

namespace Modules\AvatarOxro\Providers;


use Illuminate\Support\ServiceProvider;
use Modules\AvatarOxro\Services\AvatarOxroService;
use Modules\BaseCore\Contracts\Services\AvatarContract;

class AvatarOxroServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'AvatarOxro';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'avataroxro';

    public function register()
    {
        $this->app->singleton(AvatarContract::class, AvatarOxroService::class);
    }


}
