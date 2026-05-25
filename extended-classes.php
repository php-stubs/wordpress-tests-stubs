<?php

namespace {

    interface PHPUnit_Framework_TestListener {}
    class PHPUnit_Framework_Exception {}

    class WP_Block_Type {}
    class wpdb {}
    class WP_Ability {}
    class WP_Filesystem_Base {}
    class WP_Image_Editor {}
    class WP_REST_Controller {}
    class WP_REST_Search_Handler {}
    class WP_REST_Server {}
    class WP_Sitemaps_Provider {}

    class WP_PHPMailer extends \PHPMailer\PHPMailer\PHPMailer {}
}

namespace PHPMailer\PHPMailer {

    class PHPMailer {}

}

// Needed since WordPress 5.9.
namespace Yoast\PHPUnitPolyfills\TestCases {

    class TestCase {}

}

// Needed since WordPress 7.0.
namespace WordPress\AiClient\Providers {
    
    abstract class AbstractProvider {}
}

namespace WordPress\AiClient\Providers\Contracts {

    interface ModelMetadataDirectoryInterface {}
    interface ProviderAvailabilityInterface {}
}