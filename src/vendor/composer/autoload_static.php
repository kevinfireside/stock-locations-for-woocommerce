<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36
{
    public static $files = array (
        '4a6a586c2a198135debe2a301a011fd8' => __DIR__ . '/../..' . '/src/helpers/helper-slw-views.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SLW\\SRC\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SLW\\SRC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'SLW\\SRC\\Classes\\SlwAdminNotice' => __DIR__ . '/../..' . '/src/classes/class-slw-admin-notice.php',
        'SLW\\SRC\\Classes\\SlwBarcodesTab' => __DIR__ . '/../..' . '/src/classes/class-slw-barcodes-tab.php',
        'SLW\\SRC\\Classes\\SlwCart' => __DIR__ . '/../..' . '/src/classes/class-slw-cart.php',
        'SLW\\SRC\\Classes\\SlwOrderItem' => __DIR__ . '/../..' . '/src/classes/class-slw-order-item.php',
        'SLW\\SRC\\Classes\\SlwProductListing' => __DIR__ . '/../..' . '/src/classes/class-slw-product-listing.php',
        'SLW\\SRC\\Classes\\SlwProductRest' => __DIR__ . '/../..' . '/src/classes/class-slw-rest.php',
        'SLW\\SRC\\Classes\\SlwProductTaxonomy' => __DIR__ . '/../..' . '/src/classes/class-slw-product-taxonomy.php',
        'SLW\\SRC\\Classes\\SlwSettings' => __DIR__ . '/../..' . '/src/classes/class-slw-settings.php',
        'SLW\\SRC\\Classes\\SlwShortcodes' => __DIR__ . '/../..' . '/src/classes/class-slw-shortcodes.php',
        'SLW\\SRC\\Classes\\SlwStockLocationsTab' => __DIR__ . '/../..' . '/src/classes/class-slw-stock-locations-tab.php',
        'SLW\\SRC\\Helpers\\SlwOrderItemHelper' => __DIR__ . '/../..' . '/src/helpers/helper-slw-order-item.php',
        'SLW\\SRC\\Helpers\\SlwStockAllocationHelper' => __DIR__ . '/../..' . '/src/helpers/helper-slw-stock-allocation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3b005ccfb4ccbe1db7437bf2d108a36::$classMap;

        }, null, ClassLoader::class);
    }
}
