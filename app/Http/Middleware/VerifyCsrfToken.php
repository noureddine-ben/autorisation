<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'ajouter_auto',
        'ajouter_emploi',
        'editemploi',
        'edit_auto',
        'ajouter_houraire',
        'pointer'

        //
    ];
}
