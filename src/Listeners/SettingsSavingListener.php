<?php

namespace Madeyedeer\AvatarTools\Listeners;

use Flarum\Settings\Event\Saving;
use Illuminate\Validation\ValidationException;
use Madeyedeer\AvatarTools\Validators\SettingsValidator;
use Madeyedeer\AvatarTools\ExtensionSettings;

class SettingsSavingListener
{
    protected $validator;

    public function __construct(SettingsValidator $validator)
    {
        $this->validator = $validator;
    }

    public function handle(Saving $event)
    {
        $validator = $this->validator->validate($event->settings);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
