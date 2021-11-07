<?php


namespace Modules\AvatarOxro\Services;


use Modules\BaseCore\Contracts\Services\AvatarContract;

/**
 * Connection a l'api avatar oxro
 */
class AvatarOxroService implements AvatarContract
{

    public function getAvatarUrl(string $initial): string
    {
        return "https://avatar.oxro.io/avatar.svg?name=".$initial;
    }
}
