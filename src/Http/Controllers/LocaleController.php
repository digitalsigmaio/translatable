<?php
/**
 * User: Manson
 * Date: 11/29/2018
 * Time: 2:59 PM
 */

namespace Digitalsigma\Translatable\Http\Controllers;

class LocaleController
{
    public function changeLocale(string $locale)
    {
        if (in_array($locale, config('translatable.locales'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}