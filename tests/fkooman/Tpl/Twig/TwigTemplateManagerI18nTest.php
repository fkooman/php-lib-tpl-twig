<?php

/**
 * Copyright 2015 François Kooman <fkooman@tuxed.net>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace fkooman\Tpl\Twig;

use PHPUnit_Framework_TestCase;

class TwigTemplateManagerI18nTest extends PHPUnit_Framework_TestCase
{
    public function testDutch()
    {
        $t = new TwigTemplateManager(
            array(__DIR__.'/i18n')
        );

        $localeDir = __DIR__.'/i18n/locale';
        $t->setI18n('MyApp', 'nl_NL.UTF-8', $localeDir);
        $this->assertSame('Hallo World!', $t->render('1', array('name' => 'World')));
    }

    public function testFrench()
    {
        $t = new TwigTemplateManager(
            array(__DIR__.'/i18n')
        );

        $localeDir = __DIR__.'/i18n/locale';

        $t->setI18n('MyApp', 'fr_FR.UTF-8', $localeDir);
        $this->assertSame('Bonjour World!', $t->render('1', array('name' => 'World')));
    }
}
