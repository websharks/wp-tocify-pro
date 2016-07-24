<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpTocify\Pro\Classes;

use WebSharks\WpSharks\WpTocify\Pro\Classes;
use WebSharks\WpSharks\WpTocify\Pro\Interfaces;
use WebSharks\WpSharks\WpTocify\Pro\Traits;
#
use WebSharks\WpSharks\WpTocify\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\WpTocify\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WpTocify\Pro\Classes\CoreFacades as c;
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
    const VERSION = '160724.1881'; //v//

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
            '§default_options' => [
                'meta_box_default_enable' => '1',
                'context'                 => '.entry-content, .hentry, #content',

                'anchor_symbol' => '#', 'toc_symbol' => '#',

                'custom_styles' => '.wp-tocify-heading {}'."\n".
                                   '.wp-tocify-anchor {}'."\n".
                                   '.wp-tocify-toc {}',

                'include_post_types' => [],
                'exclude_post_types' => [
                    'attachment',
                    'revision',
                    'nav_menu_item',
                ],
            ],
        ];
        parent::__construct($instance_base, $instance);
    }

    /**
     * Other hook setup handler.
     *
     * @since 16xxxx Initial release.
     */
    protected function onSetupOtherHooks()
    {
        parent::onSetupOtherHooks();

        if ($this->Wp->is_admin) {
            add_action('admin_menu', [$this->Utils->MenuPage, 'onAdminMenu']);
            add_action('admin_init', [$this->Utils->PostMetaBox, 'onAdminInit']);
        }
        add_filter('body_class', [$this->Utils->ScriptsStyles, 'onBodyClass']);
        add_action('wp_enqueue_scripts', [$this->Utils->ScriptsStyles, 'onWpEnqueueScripts']);
        add_shortcode('toc', [$this->Utils->Shortcode, 'onShortcode']);
    }
}