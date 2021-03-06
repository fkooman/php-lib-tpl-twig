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

use Twig_SimpleFilter;
use PHPUnit_Framework_TestCase;

class TwigTemplateManagerTest extends PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $t = new TwigTemplateManager(
            array(__DIR__.'/data')
        );
        $this->assertSame('bar', $t->render('1', array('foo' => 'bar')));
    }

    public function testSetDefault()
    {
        $t = new TwigTemplateManager(
            array(__DIR__.'/data')
        );
        $t->setDefault(array('foo' => 'bar'));
        $this->assertSame('barbaz', $t->render('2', array('bar' => 'baz')));
    }

    public function testAddDefault()
    {
        $t = new TwigTemplateManager(
            array(__DIR__.'/data')
        );
        $t->setDefault(array('foo' => 'bar'));
        $t->addDefault(array('bar' => 'baz'));
        $this->assertSame('barbazfooz', $t->render('4', array('baz' => 'fooz')));
    }

    public function testOverride()
    {
        $t = new TwigTemplateManager(
            array(__DIR__.'/data', __DIR__.'/data2')
        );
        $t->setDefault(array('foo' => 'bar'));
        $this->assertSame('override barbaz', $t->render('2', array('bar' => 'baz')));
    }

    public function testAddFilter()
    {
        $t = new TwigTemplateManager(
            array(__DIR__.'/data')
        );
        $t->addFilter(new Twig_SimpleFilter('rot13', 'str_rot13'));
        $this->assertSame('one', $t->render('3', array('foo' => 'bar')));
    }
}
