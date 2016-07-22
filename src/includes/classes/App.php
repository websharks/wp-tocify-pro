<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\WPTocify\Pro\Classes;

use WebSharks\WpSharks\WPTocify\Pro\Classes;
use WebSharks\WpSharks\WPTocify\Pro\Interfaces;
use WebSharks\WpSharks\WPTocify\Pro\Traits;
#
use WebSharks\WpSharks\WPTocify\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\WPTocify\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WPTocify\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * App class.
 *
 * @since 16xxxx Initial release.
 */
class App extends SCoreClasses\App
{
    /**
     * Version.
     *
     * @since 16xxxx
     *
     * @type string Version.
     */
    const VERSION = '160715.31930'; //v//

    /**
     * Constructor.
     *
     * @since 16xxxx Initial release.
     *
     * @param array $instance Instance args.
     */
    public function __construct(array $instance = [])
    {
        $instance_base = [
            '©di' => [
                '©default_rule' => [
                    'new_instances' => [
                    ],
                ],
            ],

            '§specs' => [
                '§in_wp'           => false,
                '§is_network_wide' => false,

                '§type' => 'plugin',
                '§file' => dirname(__FILE__, 4).'/plugin.php',
            ],
            '©brand' => [
                '©acronym' => 'WPTOC',
                '©name'    => 'WP Tocify',

                '©slug' => 'wp-tocify',
                '©var'  => 'wp_tocify',

                '©short_slug' => 'wp-toc',
                '©short_var'  => 'wp_toc',

                '©text_domain' => 'wp-tocify',
            ],

            '§pro_option_keys' => [],
            '§default_options' => [],
        ];
        parent::__construct($instance_base, $instance);
    }

    /**
     * Early hook setup handler.
     *
     * @since 16xxxx Initial release.
     */
    protected function onSetupEarlyHooks()
    {
        parent::onSetupEarlyHooks();
    }

    /**
     * Other hook setup handler.
     *
     * @since 16xxxx Initial release.
     */
    protected function onSetupOtherHooks()
    {
        parent::onSetupOtherHooks();
    }
}
