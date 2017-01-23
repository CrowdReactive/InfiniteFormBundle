<?php

/*
 * (c) Infinite Networks <http://www.infinite.net.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Infinite\FormBundle\Tests\DependencyInjection;

use Infinite\FormBundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Processor;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array());

        $this->assertEquals($config, self::getBundleDefaultConfig());
    }

    public function testNullAttachmentConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array('attachment' => null));

        $this->assertEquals($config, self::getBundleDefaultConfig());
    }

    public function testNullCheckboxConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array('checkbox_grid' => null));

        $this->assertEquals($config, self::getBundleDefaultConfig());
    }

    public function testNullEntitySearchConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array('entity_search' => null));

        $this->assertEquals($config, self::getBundleDefaultConfig());
    }

    public function testNullPolycollectionConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array('polycollection' => null));

        $this->assertEquals($config, self::getBundleDefaultConfig());
    }

    public function testNullTwigConfig()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array('twig' => null));

        $this->assertEquals($config, self::getBundleDefaultConfig());
    }

    protected static function getBundleDefaultConfig()
    {
        return array(
            'attachment' => true,
            'checkbox_grid' => true,
            'entity_search' => true,
            'polycollection' => true,
            'twig' => true,
        );
    }
}
