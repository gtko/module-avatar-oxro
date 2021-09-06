<?php


namespace Modules\AvatarOxro\Services;


use Modules\BaseCore\Contracts\Services\AvatarContract;

class AvatarOxroService implements AvatarContract
{

    public function getAvatarUrl(string $initial): string
    {
        return "https://avatar.oxro.io/avatar.svg?name=".$initial;
    }
}
