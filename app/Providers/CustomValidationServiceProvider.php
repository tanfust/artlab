<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class CustomValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('end_date_after_start', function ($attribute, $value, $parameters, $validator) {
            $startDate = $validator->getData()[$parameters[0]]; // Get the value of the start date input
            return strtotime($value) > strtotime($startDate);
        });

        Validator::replacer('end_date_after_start', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':other', $parameters[0], $message);
        });
    }

    public function register()
    {
        //
    }
}
