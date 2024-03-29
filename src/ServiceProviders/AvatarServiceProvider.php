<?php
namespace Madeyedeer\AvatarTools\ServiceProviders;

use Flarum\Foundation\AbstractServiceProvider;
use Flarum\User\AvatarValidator;
use Madeyedeer\AvatarTools\Validators\AvatarValidator as CustomAvatarValidator;

class AvatarServiceProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->container->bind(AvatarValidator::class, CustomAvatarValidator::class);
    }
}
