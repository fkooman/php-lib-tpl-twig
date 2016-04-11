[![Build Status](https://travis-ci.org/fkooman/php-lib-tpl-twig.svg)](https://travis-ci.org/fkooman/php-lib-tpl-twig)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fkooman/php-lib-tpl-twig/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fkooman/php-lib-tpl-twig/?branch=master)

# Introduction

Twig implemention for `fkooman/tpl`.

# Internationalization

Next to simple templates in one language, it is also possible to support 
translations on the template level. See the Twig i19n extension 
[documention](http://twig.sensiolabs.org/doc/extensions/i18n.html) for more 
information.

## How to Use

    <?php

    $t = new TwigTemplateManager(
        array(__DIR__.'/views')
    );

    $localeDir = __DIR__.'/locale';
    $t->setI18n('MyApp', 'nl_NL', $localeDir);
    $this->assertSame('Hallo World!', $t->render('1', array('name' => 'World')));

This requires the `MyApp.mo` file to be present at 
`__DIR__.'/locale/nl_NL/LC_MESSAGES/MyApp.mo`.

More documentation on generating `MyApp.mo` from `MyApp.po` and how everything
fits together see the Wikipedia page on 
[gettext](https://en.wikipedia.org/wiki/Gettext). Together with the Twig 
documentation on i18n that should be all you need to know.

