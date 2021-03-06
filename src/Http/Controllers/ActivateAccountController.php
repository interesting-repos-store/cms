<?php

namespace Statamic\Http\Controllers;

use Illuminate\Support\Facades\Password;
use Statamic\Auth\Passwords\PasswordReset;

class ActivateAccountController extends ResetPasswordController
{
    protected function resetFormAction()
    {
        return route('statamic.account.activate.action');
    }

    protected function resetFormTitle()
    {
        return __('Activate Account');
    }

    public function broker()
    {
        return Password::broker(PasswordReset::BROKER_ACTIVATIONS);
    }
}
