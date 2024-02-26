<?php
/**
 * Generated stub declarations for WordPress Tests.
 * @see https://wordpress.org
 * @see https://github.com/php-stubs/wordpress-tests-stubs
 */

/**
 * PHPUnit adapter layer.
 *
 * This class enhances the PHPUnit native `TestCase` with polyfills
 * for assertions and expectation methods added between PHPUnit 4.8 - 9.5.
 *
 * Additionally, the Polyfill TestCase offers a workaround for the addition
 * of the `void` return type to PHPUnit fixture methods by providing
 * overloadable snake_case versions of the typical fixture method names and
 * ensuring that PHPUnit handles those correctly.
 *
 * See {@link https://github.com/Yoast/PHPUnit-Polyfills} for full
 * documentation on the available polyfills and other features.
 */
abstract class PHPUnit_Adapter_TestCase extends \Yoast\PHPUnitPolyfills\TestCases\TestCase
{
}
/**
 * Defines a basic fixture to run multiple tests.
 *
 * Resets the state of the WordPress installation before and after every test.
 *
 * Includes utility functions and assertions useful for testing WordPress.
 *
 * All WordPress unit tests should inherit from this class.
 */
abstract class WP_UnitTestCase_Base extends \PHPUnit_Adapter_TestCase
{
    protected static $forced_tickets = array();
    protected $expected_deprecated = array();
    protected $caught_deprecated = array();
    protected $expected_doing_it_wrong = array();
    protected $caught_doing_it_wrong = array();
    protected static $hooks_saved = array();
    protected static $ignore_files;
    /**
     * Fixture factory.
     *
     * @deprecated 6.1.0 Use the WP_UnitTestCase_Base::factory() method instead.
     *
     * @var WP_UnitTest_Factory
     */
    protected $factory;
    /**
     * Fetches the factory object for generating WordPress fixtures.
     *
     * @return WP_UnitTest_Factory The fixture factory.
     */
    protected static function factory()
    {
    }
    /**
     * Retrieves the name of the class the static method is called in.
     *
     * @deprecated 5.3.0 Use the PHP native get_called_class() function instead.
     *
     * @return string The class name.
     */
    public static function get_called_class()
    {
    }
    /**
     * Runs the routine before setting up all tests.
     */
    public static function set_up_before_class()
    {
    }
    /**
     * Runs the routine after all tests have been run.
     */
    public static function tear_down_after_class()
    {
    }
    /**
     * Runs the routine before each test is executed.
     */
    public function set_up()
    {
    }
    /**
     * After a test method runs, resets any state in WordPress the test method might have changed.
     */
    public function tear_down()
    {
    }
    /**
     * Cleans the global scope (e.g `$_GET` and `$_POST`).
     */
    public function clean_up_global_scope()
    {
    }
    /**
     * Allows tests to be skipped on some automated runs.
     *
     * For test runs on GitHub Actions for something other than trunk,
     * we want to skip tests that only need to run for trunk.
     */
    public function skipOnAutomatedBranches()
    {
    }
    /**
     * Allows tests to be skipped when Multisite is not in use.
     *
     * Use in conjunction with the ms-required group.
     */
    public function skipWithoutMultisite()
    {
    }
    /**
     * Allows tests to be skipped when Multisite is in use.
     *
     * Use in conjunction with the ms-excluded group.
     */
    public function skipWithMultisite()
    {
    }
    /**
     * Allows tests to be skipped if the HTTP request times out.
     *
     * @param array|WP_Error $response HTTP response.
     */
    public function skipTestOnTimeout($response)
    {
    }
    /**
     * Reset the lazy load meta queue.
     */
    protected function reset_lazyload_queue()
    {
    }
    /**
     * Unregisters existing post types and register defaults.
     *
     * Run before each test in order to clean up the global scope, in case
     * a test forgets to unregister a post type on its own, or fails before
     * it has a chance to do so.
     */
    protected function reset_post_types()
    {
    }
    /**
     * Unregisters existing taxonomies and register defaults.
     *
     * Run before each test in order to clean up the global scope, in case
     * a test forgets to unregister a taxonomy on its own, or fails before
     * it has a chance to do so.
     */
    protected function reset_taxonomies()
    {
    }
    /**
     * Unregisters non-built-in post statuses.
     */
    protected function reset_post_statuses()
    {
    }
    /**
     * Resets `$_SERVER` variables
     */
    protected function reset__SERVER()
    {
    }
    /**
     * Saves the hook-related globals so they can be restored later.
     *
     * Stores $wp_filter, $wp_actions, $wp_filters, and $wp_current_filter
     * on a class variable so they can be restored on tear_down() using _restore_hooks().
     *
     * @global array $wp_filter
     * @global array $wp_actions
     * @global array $wp_filters
     * @global array $wp_current_filter
     */
    protected function _backup_hooks()
    {
    }
    /**
     * Restores the hook-related globals to their state at set_up()
     * so that future tests aren't affected by hooks set during this last test.
     *
     * @global array $wp_filter
     * @global array $wp_actions
     * @global array $wp_filters
     * @global array $wp_current_filter
     */
    protected function _restore_hooks()
    {
    }
    /**
     * Flushes the WordPress object cache.
     */
    public static function flush_cache()
    {
    }
    /**
     * Cleans up any registered meta keys.
     *
     * @since 5.1.0
     *
     * @global array $wp_meta_keys
     */
    public function unregister_all_meta_keys()
    {
    }
    /**
     * Starts a database transaction.
     */
    public function start_transaction()
    {
    }
    /**
     * Commits the queries in a transaction.
     *
     * @since 4.1.0
     */
    public static function commit_transaction()
    {
    }
    /**
     * Replaces the `CREATE TABLE` statement with a `CREATE TEMPORARY TABLE` statement.
     *
     * @param string $query The query to replace the statement for.
     * @return string The altered query.
     */
    public function _create_temporary_tables($query)
    {
    }
    /**
     * Replaces the `DROP TABLE` statement with a `DROP TEMPORARY TABLE` statement.
     *
     * @param string $query The query to replace the statement for.
     * @return string The altered query.
     */
    public function _drop_temporary_tables($query)
    {
    }
    /**
     * Retrieves the `wp_die()` handler.
     *
     * @param callable $handler The current die handler.
     * @return callable The test die handler.
     */
    public function get_wp_die_handler($handler)
    {
    }
    /**
     * Throws an exception when called.
     *
     * @since UT (3.7.0)
     * @since 5.9.0 Added the `$title` and `$args` parameters.
     *
     * @throws WPDieException Exception containing the message and the response code.
     *
     * @param string|WP_Error $message The `wp_die()` message or WP_Error object.
     * @param string          $title   The `wp_die()` title.
     * @param string|array    $args    The `wp_die()` arguments.
     */
    public function wp_die_handler($message, $title, $args)
    {
    }
    /**
     * Sets up the expectations for testing a deprecated call.
     *
     * @since 3.7.0
     */
    public function expectDeprecated()
    {
    }
    /**
     * Handles a deprecated expectation.
     *
     * The DocBlock should contain `@expectedDeprecated` to trigger this.
     *
     * @since 3.7.0
     * @since 6.1.0 Includes the actual unexpected `_doing_it_wrong()` message
     *              or deprecation notice in the output if one is encountered.
     */
    public function expectedDeprecated()
    {
    }
    /**
     * Detects post-test failure conditions.
     *
     * We use this method to detect expectedDeprecated and expectedIncorrectUsage annotations.
     *
     * @since 4.2.0
     */
    protected function assert_post_conditions()
    {
    }
    /**
     * Declares an expected `_deprecated_function()` or `_deprecated_argument()` call from within a test.
     *
     * @since 4.2.0
     *
     * @param string $deprecated Name of the function, method, class, or argument that is deprecated.
     *                           Must match the first parameter of the `_deprecated_function()`
     *                           or `_deprecated_argument()` call.
     */
    public function setExpectedDeprecated($deprecated)
    {
    }
    /**
     * Declares an expected `_doing_it_wrong()` call from within a test.
     *
     * @since 4.2.0
     *
     * @param string $doing_it_wrong Name of the function, method, or class that appears in
     *                               the first argument of the source `_doing_it_wrong()` call.
     */
    public function setExpectedIncorrectUsage($doing_it_wrong)
    {
    }
    /**
     * Redundant PHPUnit 6+ compatibility shim. DO NOT USE!
     *
     * This method is only left in place for backward compatibility reasons.
     *
     * @since 4.8.0
     * @deprecated 5.9.0 Use the PHPUnit native expectException*() methods directly.
     *
     * @param mixed      $exception
     * @param string     $message
     * @param int|string $code
     */
    public function setExpectedException($exception, $message = '', $code = \null)
    {
    }
    /**
     * Adds a deprecated function to the list of caught deprecated calls.
     *
     * @since 3.7.0
     * @since 6.1.0 Added the `$replacement`, `$version`, and `$message` parameters.
     *
     * @param string $function_name The deprecated function.
     * @param string $replacement   The function that should have been called.
     * @param string $version       The version of WordPress that deprecated the function.
     * @param string $message       Optional. A message regarding the change.
     */
    public function deprecated_function_run($function_name, $replacement, $version, $message = '')
    {
    }
    /**
     * Adds a function called in a wrong way to the list of `_doing_it_wrong()` calls.
     *
     * @since 3.7.0
     * @since 6.1.0 Added the `$message` and `$version` parameters.
     *
     * @param string $function_name The function to add.
     * @param string $message       A message explaining what has been done incorrectly.
     * @param string $version       The version of WordPress where the message was added.
     */
    public function doing_it_wrong_run($function_name, $message, $version)
    {
    }
    /**
     * Asserts that the given value is an instance of WP_Error.
     *
     * @param mixed  $actual  The value to check.
     * @param string $message Optional. Message to display when the assertion fails.
     */
    public function assertWPError($actual, $message = '')
    {
    }
    /**
     * Asserts that the given value is not an instance of WP_Error.
     *
     * @param mixed  $actual  The value to check.
     * @param string $message Optional. Message to display when the assertion fails.
     */
    public function assertNotWPError($actual, $message = '')
    {
    }
    /**
     * Asserts that the given value is an instance of IXR_Error.
     *
     * @param mixed  $actual  The value to check.
     * @param string $message Optional. Message to display when the assertion fails.
     */
    public function assertIXRError($actual, $message = '')
    {
    }
    /**
     * Asserts that the given value is not an instance of IXR_Error.
     *
     * @param mixed  $actual  The value to check.
     * @param string $message Optional. Message to display when the assertion fails.
     */
    public function assertNotIXRError($actual, $message = '')
    {
    }
    /**
     * Asserts that the given fields are present in the given object.
     *
     * @since UT (3.7.0)
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param object $actual  The object to check.
     * @param array  $fields  The fields to check.
     * @param string $message Optional. Message to display when the assertion fails.
     */
    public function assertEqualFields($actual, $fields, $message = '')
    {
    }
    /**
     * Asserts that two values are equal, with whitespace differences discarded.
     *
     * @since UT (3.7.0)
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param mixed  $expected The expected value.
     * @param mixed  $actual   The actual value.
     * @param string $message  Optional. Message to display when the assertion fails.
     */
    public function assertDiscardWhitespace($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that two values have the same type and value, with EOL differences discarded.
     *
     * @since 5.6.0
     * @since 5.8.0 Added support for nested arrays.
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param mixed  $expected The expected value.
     * @param mixed  $actual   The actual value.
     * @param string $message  Optional. Message to display when the assertion fails.
     */
    public function assertSameIgnoreEOL($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that two values are equal, with EOL differences discarded.
     *
     * @since 5.4.0
     * @since 5.6.0 Turned into an alias for `::assertSameIgnoreEOL()`.
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param mixed  $expected The expected value.
     * @param mixed  $actual   The actual value.
     * @param string $message  Optional. Message to display when the assertion fails.
     */
    public function assertEqualsIgnoreEOL($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of two un-keyed, single arrays are the same, without accounting for the order of elements.
     *
     * @since 5.6.0
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param array  $expected Expected array.
     * @param array  $actual   Array to check.
     * @param string $message  Optional. Message to display when the assertion fails.
     */
    public function assertSameSets($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of two un-keyed, single arrays are equal, without accounting for the order of elements.
     *
     * @since 3.5.0
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param array  $expected Expected array.
     * @param array  $actual   Array to check.
     * @param string $message  Optional. Message to display when the assertion fails.
     */
    public function assertEqualSets($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of two keyed, single arrays are the same, without accounting for the order of elements.
     *
     * @since 5.6.0
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param array  $expected Expected array.
     * @param array  $actual   Array to check.
     * @param string $message  Optional. Message to display when the assertion fails.
     */
    public function assertSameSetsWithIndex($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the contents of two keyed, single arrays are equal, without accounting for the order of elements.
     *
     * @since 4.1.0
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param array  $expected Expected array.
     * @param array  $actual   Array to check.
     * @param string $message  Optional. Message to display when the assertion fails.
     */
    public function assertEqualSetsWithIndex($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that the given variable is a multidimensional array, and that all arrays are non-empty.
     *
     * @since 4.8.0
     * @since 5.9.0 Added the `$message` parameter.
     *
     * @param array  $actual  Array to check.
     * @param string $message Optional. Message to display when the assertion fails.
     */
    public function assertNonEmptyMultidimensionalArray($actual, $message = '')
    {
    }
    /**
     * Checks each of the WP_Query is_* functions/properties against expected boolean value.
     *
     * Any properties that are listed by name as parameters will be expected to be true; all others are
     * expected to be false. For example, assertQueryTrue( 'is_single', 'is_feed' ) means is_single()
     * and is_feed() must be true and everything else must be false to pass.
     *
     * @since 2.5.0
     * @since 3.8.0 Moved from `Tests_Query_Conditionals` to `WP_UnitTestCase`.
     * @since 5.3.0 Formalized the existing `...$prop` parameter by adding it
     *              to the function signature.
     *
     * @param string ...$prop Any number of WP_Query properties that are expected to be true for the current request.
     */
    public function assertQueryTrue(...$prop)
    {
    }
    /**
     * Helper function to convert a single-level array containing text strings to a named data provider.
     *
     * The value of the data set will also be used as the name of the data set.
     *
     * Typical usage of this method:
     *
     *     public function data_provider_for_test_name() {
     *         $array = array(
     *             'value1',
     *             'value2',
     *         );
     *
     *         return $this->text_array_to_dataprovider( $array );
     *     }
     *
     * The returned result will look like:
     *
     *     array(
     *         'value1' => array( 'value1' ),
     *         'value2' => array( 'value2' ),
     *     )
     *
     * @since 6.1.0
     *
     * @param array $input Input array.
     * @return array Array which is usable as a test data provider with named data sets.
     */
    public static function text_array_to_dataprovider($input)
    {
    }
    /**
     * Sets the global state to as if a given URL has been requested.
     *
     * This sets:
     * - The super globals.
     * - The globals.
     * - The query variables.
     * - The main query.
     *
     * @since 3.5.0
     *
     * @param string $url The URL for the request.
     */
    public function go_to($url)
    {
    }
    /**
     * Allows tests to be skipped on single or multisite installs by using @group annotations.
     *
     * This is a custom extension of the PHPUnit requirements handling.
     *
     * @since 3.5.0
     * @deprecated 5.9.0 This method has not been functional since PHPUnit 7.0.
     */
    protected function checkRequirements()
    {
    }
    /**
     * Skips the current test if there is an open Trac ticket associated with it.
     *
     * @since 3.5.0
     *
     * @param int $ticket_id Ticket number.
     */
    public function knownWPBug($ticket_id)
    {
    }
    /**
     * Skips the current test if there is an open Unit Test Trac ticket associated with it.
     *
     * @since 3.5.0
     * @deprecated No longer used since the Unit Test Trac was merged into the Core Trac.
     *
     * @param int $ticket_id Ticket number.
     */
    public function knownUTBug($ticket_id)
    {
    }
    /**
     * Skips the current test if there is an open Plugin Trac ticket associated with it.
     *
     * @since 3.5.0
     *
     * @param int $ticket_id Ticket number.
     */
    public function knownPluginBug($ticket_id)
    {
    }
    /**
     * Adds a Trac ticket number to the `$forced_tickets` property.
     *
     * @since 3.5.0
     *
     * @param int $ticket Ticket number.
     */
    public static function forceTicket($ticket)
    {
    }
    /**
     * Custom preparations for the PHPUnit process isolation template.
     *
     * When restoring global state between tests, PHPUnit defines all the constants that were already defined, and then
     * includes included files. This does not work with WordPress, as the included files define the constants.
     *
     * This method defines the constants after including files.
     *
     * @param Text_Template $template The template to prepare.
     */
    public function prepareTemplate(\Text_Template $template)
    {
    }
    /**
     * Creates a unique temporary file name.
     *
     * The directory in which the file is created depends on the environment configuration.
     *
     * @since 3.5.0
     *
     * @return string|bool Path on success, else false.
     */
    public function temp_filename()
    {
    }
    /**
     * Selectively deletes a file.
     *
     * Does not delete a file if its path is set in the `$ignore_files` property.
     *
     * @param string $file File path.
     */
    public function unlink($file)
    {
    }
    /**
     * Selectively deletes files from a directory.
     *
     * Does not delete files if their paths are set in the `$ignore_files` property.
     *
     * @since 4.0.0
     *
     * @param string $path Directory path.
     */
    public function rmdir($path)
    {
    }
    /**
     * Deletes files added to the `uploads` directory during tests.
     *
     * This method works in tandem with the `set_up()` and `rmdir()` methods:
     * - `set_up()` scans the `uploads` directory before every test, and stores
     *   its contents inside of the `$ignore_files` property.
     * - `rmdir()` and its helper methods only delete files that are not listed
     *   in the `$ignore_files` property. If called during `tear_down()` in tests,
     *   this will only delete files added during the previously run test.
     */
    public function remove_added_uploads()
    {
    }
    /**
     * Returns a list of all files contained inside a directory.
     *
     * @since 4.0.0
     *
     * @param string $dir Path to the directory to scan.
     * @return array List of file paths.
     */
    public function files_in_dir($dir)
    {
    }
    /**
     * Returns a list of all files contained inside the `uploads` directory.
     *
     * @since 4.0.0
     *
     * @return array List of file paths.
     */
    public function scan_user_uploads()
    {
    }
    /**
     * Deletes all directories contained inside a directory.
     *
     * @since 4.1.0
     *
     * @param string $path Path to the directory to scan.
     */
    public function delete_folders($path)
    {
    }
    /**
     * Retrieves all directories contained inside a directory.
     * Hidden directories are ignored.
     *
     * This is a helper for the `delete_folders()` method.
     *
     * @since 4.1.0
     * @since 6.1.0 No longer sets a (dynamic) property to keep track of the directories,
     *              but returns an array of the directories instead.
     *
     * @param string $dir Path to the directory to scan.
     * @return string[] List of directories.
     */
    public function scandir($dir)
    {
    }
    /**
     * Converts a microtime string into a float.
     *
     * @since 4.1.0
     *
     * @param string $microtime Time string generated by `microtime()`.
     * @return float `microtime()` output as a float.
     */
    protected function _microtime_to_float($microtime)
    {
    }
    /**
     * Deletes a user from the database in a Multisite-agnostic way.
     *
     * @since 4.3.0
     *
     * @param int $user_id User ID.
     * @return bool True if the user was deleted.
     */
    public static function delete_user($user_id)
    {
    }
    /**
     * Resets permalinks and flushes rewrites.
     *
     * @since 4.4.0
     *
     * @global WP_Rewrite $wp_rewrite
     *
     * @param string $structure Optional. Permalink structure to set. Default empty.
     */
    public function set_permalink_structure($structure = '')
    {
    }
    /**
     * Creates an attachment post from an uploaded file.
     *
     * @since 4.4.0
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param array $upload         Array of information about the uploaded file, provided by wp_upload_bits().
     * @param int   $parent_post_id Optional. Parent post ID.
     * @return int|WP_Error The attachment ID on success, WP_Error object on failure.
     */
    public function _make_attachment($upload, $parent_post_id = 0)
    {
    }
    /**
     * Updates the modified and modified GMT date of a post in the database.
     *
     * @since 4.8.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int    $post_id Post ID.
     * @param string $date    Post date, in the format YYYY-MM-DD HH:MM:SS.
     * @return int|false 1 on success, or false on error.
     */
    protected function update_post_modified($post_id, $date)
    {
    }
    /**
     * Touches the given file and its directory if it doesn't already exist.
     *
     * This can be used to ensure a file that is implictly relied on in a test exists
     * without it having to be built.
     *
     * @param string $file The file name.
     */
    public static function touch($file)
    {
    }
}
/**
 * A class to handle additional command line arguments passed to the script.
 *
 * If it is determined that phpunit was called with a --group that corresponds
 * to an @ticket annotation (such as `phpunit --group 12345` for bugs marked
 * as #WP12345), then it is assumed that known bugs should not be skipped.
 *
 * If WP_TESTS_FORCE_KNOWN_BUGS is already set in wp-tests-config.php, then
 * how you call phpunit has no effect.
 */
class WP_PHPUnit_Util_Getopt
{
    public function __construct($argv)
    {
    }
}
/**
 * Unit Tests: Basic_Object cloass
 *
 * @package WordPress
 * @subpackage UnitTests
 * @since 4.7.0
 */
/**
 * Class used to test accessing methods and properties
 *
 * @since 4.0.0
 */
class Basic_Object
{
    public function __get($name)
    {
    }
    public function __set($name, $value)
    {
    }
    public function __isset($name)
    {
    }
    public function __unset($name)
    {
    }
    public function __call($name, $arguments)
    {
    }
}
/**
 * Class used to test accessing methods and properties.
 *
 * @since 4.0.0
 */
class Basic_Subclass extends \Basic_Object
{
}
/**
 * Unit Tests: JsonSerializable_Object
 *
 * @package WordPress
 * @subpackage UnitTests
 * @since 5.3.0
 */
class JsonSerializable_Object implements \JsonSerializable
{
    public function __construct($data)
    {
    }
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
    }
}
/**
 * WP_Fake_Block_Type for testing
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.0.0
 */
/**
 * Test class extending WP_Block_Type
 *
 * @since 5.0.0
 */
class WP_Fake_Block_Type extends \WP_Block_Type
{
    /**
     * Render the fake block.
     *
     * @param array  $attributes Optional. Block attributes. Default empty array.
     * @param string $content    Optional. Block content. Default empty string.
     * @return string Rendered block HTML.
     */
    public function render($attributes = array(), $content = '')
    {
    }
}
/**
 * Unit tests covering WP_REST_Controller functionality using a flexible schema.
 *
 * @package WordPress
 * @subpackage REST API
 * @since 5.4.0
 */
/**
 * WP_REST_Test_Configurable_Controller class.
 *
 * @group restapi
 *
 * @since 5.4.0
 */
class WP_REST_Test_Configurable_Controller extends \WP_REST_Controller
{
    /**
     * Test schema.
     *
     * @since 5.4.0
     *
     * @var array $test_schema
     */
    protected $test_schema;
    /**
     * Class constructor.
     *
     * @since 5.4.0
     *
     * @param array $test_schema Schema for use in testing.
     */
    public function __construct($test_schema)
    {
    }
    /**
     * Provides the test schema.
     *
     * @since 5.4.0
     *
     * @return array Test schema.
     */
    public function get_test_schema()
    {
    }
    /**
     * Get the item's schema, conforming to JSON Schema.
     *
     * @since 5.4.0
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}
/**
 * REST API: WP_REST_Test_Search_Handler class
 *
 * @package WordPress
 * @subpackage REST_API
 */
/**
 * Test class extending WP_REST_Search_Handler
 */
class WP_REST_Test_Search_Handler extends \WP_REST_Search_Handler
{
    protected $items = array();
    public function __construct($amount = 10)
    {
    }
    public function search_items(\WP_REST_Request $request)
    {
    }
    public function prepare_item($id, array $fields)
    {
    }
    public function prepare_item_links($id)
    {
    }
}
/**
 * Class WP_Sitemaps_Empty_Test_Provider.
 *
 * Provides test data for additional registered providers.
 */
class WP_Sitemaps_Empty_Test_Provider extends \WP_Sitemaps_Provider
{
    /**
     * WP_Sitemaps_Empty_Test_Provider constructor.
     *
     * @param string $object_type Optional. Object type name to use. Default 'test'.
     */
    public function __construct($object_type = 'test')
    {
    }
    /**
     * Gets a URL list for a sitemap.
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Query for determining the number of pages.
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
}
/**
 * Class WP_Sitemaps_Large_Test_Provider.
 *
 * Provides test data for additional registered providers.
 */
class WP_Sitemaps_Large_Test_Provider extends \WP_Sitemaps_Provider
{
    /**
     * Number of entries in the sitemap the provider produces.
     *
     * @var integer
     */
    public $num_entries = 1;
    /**
     * WP_Sitemaps_Large_Test_Provider constructor.
     *
     * @param int $num_entries Optional. Number of entries in in the sitemap.
     */
    public function __construct($num_entries = 50001)
    {
    }
    /**
     * Gets a URL list for a sitemap.
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Lists sitemap pages exposed by this provider.
     *
     * The returned data is used to populate the sitemap entries of the index.
     *
     * @return array[] Array of sitemap entries.
     */
    public function get_sitemap_entries()
    {
    }
    /**
     * Query for determining the number of pages.
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
}
/**
 * Class WP_Sitemaps_Test_Provider.
 *
 * Provides test data for additional registered providers.
 */
class WP_Sitemaps_Test_Provider extends \WP_Sitemaps_Provider
{
    /**
     * WP_Sitemaps_Posts constructor.
     *
     * @param string $object_type Optional. Object type name to use. Default 'test'.
     */
    public function __construct($object_type = 'test')
    {
    }
    /**
     * Return the public post types, which excludes nav_items and similar types.
     * Attachments are also excluded. This includes custom post types with public = true
     *
     * @return array Map of object subtype objects (WP_Post_Type) keyed by their name.
     */
    public function get_object_subtypes()
    {
    }
    /**
     * Gets a URL list for a sitemap.
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Query for determining the number of pages.
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
}
/**
 * Class WP_Test_Stream.
 *
 * An in-memory streamWrapper implementation for testing streams.  Writes to a
 * stream URL like "protocol://bucket/foo" will be stored in the static
 * variable WP_Test_Stream::$data['bucket']['/foo'].
 *
 * Creating a directory at "protocol://bucket/foo" will store the string
 * 'DIRECTORY' to the static variable WP_Test_Stream::$data['bucket']['/foo/']
 * (note the trailing slash).
 *
 * This class can be used to test that code works with basic read/write streams.
 *
 * This class does not register itself as a stream handler: test fixtures
 * should make the appropriate call to stream_wrapper_register().
 */
class WP_Test_Stream
{
    const FILE_MODE = 0100666;
    const DIRECTORY_MODE = 040777;
    /**
     * In-memory storage for files and directories simulated by this wrapper.
     */
    public static $data = array();
    public $position;
    public $file;
    public $bucket;
    public $data_ref;
    /**
     * The current context.
     *
     * @link https://www.php.net/manual/en/class.streamwrapper.php
     *
     * @var resource|null
     */
    public $context;
    /**
     * Opens a URL.
     *
     * @see streamWrapper::stream_open
     */
    public function stream_open($path, $mode, $options, &$opened_path)
    {
    }
    /**
     * Reads from a stream.
     *
     * @see streamWrapper::stream_read
     */
    public function stream_read($count)
    {
    }
    /**
     * Writes to a stream.
     *
     * @see streamWrapper::stream_write
     */
    public function stream_write($data)
    {
    }
    /**
     * Seeks to specific location in a stream.
     *
     * @see streamWrapper::stream_seek
     *
     * @param int $offset The stream offset to seek to.
     * @param int $whence Optional. Seek position.
     * @return bool Returns true when position is updated, else false.
     */
    public function stream_seek($offset, $whence = \SEEK_SET)
    {
    }
    /**
     * Retrieves the current position of a stream.
     *
     * @see streamWrapper::stream_tell
     */
    public function stream_tell()
    {
    }
    /**
     * Tests for end-of-file.
     *
     * @see streamWrapper::stream_eof
     */
    public function stream_eof()
    {
    }
    /**
     * Change stream metadata.
     *
     * @see streamWrapper::stream_metadata
     */
    public function stream_metadata($path, $option, $value)
    {
    }
    /**
     * Creates a directory.
     *
     * @see streamWrapper::mkdir
     */
    public function mkdir($path, $mode, $options)
    {
    }
    /**
     * Retrieves information about a file.
     *
     * @see streamWrapper::stream_stat
     */
    public function stream_stat()
    {
    }
    /**
     * Retrieves information about a file.
     *
     * @see streamWrapper::url_stat
     */
    public function url_stat($path, $flags)
    {
    }
    /**
     * Deletes a file.
     *
     * @see streamWrapper::unlink
     */
    public function unlink($path)
    {
    }
}
class WP_Tests_Exception extends \PHPUnit_Framework_Exception
{
}
/**
 * General exception for wp_die().
 */
class WPDieException extends \Exception
{
}
/**
 * Exception for cases of wp_die(), for Ajax tests.
 *
 * This means there was an error (no output, and a call to wp_die).
 *
 * @package    WordPress
 * @subpackage Unit Tests
 * @since      3.4.0
 */
class WPAjaxDieStopException extends \WPDieException
{
}
/**
 * Exception for cases of wp_die(), for Ajax tests.
 *
 * This means the execution of the Ajax function should be halted, but the unit test
 * can continue. The function finished normally and there was no error (output happened,
 * but wp_die was called to end execution). This is used with WP_Ajax_Response::send().
 *
 * @package    WordPress
 * @subpackage Unit Tests
 * @since      3.4.0
 */
class WPAjaxDieContinueException extends \WPDieException
{
}
class WP_UnitTest_Factory_Callback_After_Create
{
    /**
     * @var callable
     */
    public $callback;
    /**
     * WP_UnitTest_Factory_Callback_After_Create constructor.
     *
     * @since UT (3.7.0)
     *
     * @param callable $callback A callback function.
     */
    public function __construct($callback)
    {
    }
    /**
     * Calls the set callback on a given object.
     *
     * @since UT (3.7.0)
     *
     * @param int $object_id ID of the object to apply the callback on.
     *
     * @return mixed Updated object field.
     */
    public function call($object_id)
    {
    }
}
/**
 * An abstract class that serves as a basis for all WordPress object-type factory classes.
 */
abstract class WP_UnitTest_Factory_For_Thing
{
    public $default_generation_definitions;
    public $factory;
    /**
     * Creates a new factory, which will create objects of a specific Thing.
     *
     * @since UT (3.7.0)
     *
     * @param object $factory                       Global factory that can be used to create other objects
     *                                              on the system.
     * @param array $default_generation_definitions Defines what default values should the properties
     *                                              of the object have. The default values can be generators --
     *                                              an object with the next() method.
     *                                              There are some default generators:
     *                                               - {@link WP_UnitTest_Generator_Sequence}
     *                                               - {@link WP_UnitTest_Generator_Locale_Name}
     *                                               - {@link WP_UnitTest_Factory_Callback_After_Create}
     */
    public function __construct($factory, $default_generation_definitions = array())
    {
    }
    /**
     * Creates an object and returns its ID.
     *
     * @since UT (3.7.0)
     *
     * @param array $args The arguments.
     *
     * @return int|WP_Error The object ID on success, WP_Error object on failure.
     */
    public abstract function create_object($args);
    /**
     * Updates an existing object.
     *
     * @since UT (3.7.0)
     *
     * @param int   $object_id The object ID.
     * @param array $fields    The values to update.
     *
     * @return int|WP_Error The object ID on success, WP_Error object on failure.
     */
    public abstract function update_object($object_id, $fields);
    /**
     * Creates an object and returns its ID.
     *
     * @since UT (3.7.0)
     *
     * @param array $args                   Optional. The arguments for the object to create.
     *                                      Default empty array.
     * @param null  $generation_definitions Optional. The default values for the object.
     *                                      Default null.
     *
     * @return int|WP_Error The object ID on success, WP_Error object on failure.
     */
    public function create($args = array(), $generation_definitions = \null)
    {
    }
    /**
     * Creates and returns an object.
     *
     * @since UT (3.7.0)
     *
     * @param array $args                   Optional. The arguments for the object to create.
     *                                      Default empty array.
     * @param null  $generation_definitions Optional. The default values for the object.
     *                                      Default null.
     *
     * @return mixed The created object. Can be anything. WP_Error object on failure.
     */
    public function create_and_get($args = array(), $generation_definitions = \null)
    {
    }
    /**
     * Retrieves an object by ID.
     *
     * @since UT (3.7.0)
     *
     * @param int $object_id The object ID.
     *
     * @return mixed The object. Can be anything.
     */
    public abstract function get_object_by_id($object_id);
    /**
     * Creates multiple objects.
     *
     * @since UT (3.7.0)
     *
     * @param int   $count                  Amount of objects to create.
     * @param array $args                   Optional. The arguments for the object to create.
     *                                      Default empty array.
     * @param null  $generation_definitions Optional. The default values for the object.
     *                                      Default null.
     *
     * @return array
     */
    public function create_many($count, $args = array(), $generation_definitions = \null)
    {
    }
    /**
     * Combines the given arguments with the generation_definitions (defaults) and applies
     * possibly set callbacks on it.
     *
     * @since UT (3.7.0)
     *
     * @param array       $args                   Optional. The arguments to combine with defaults.
     *                                            Default empty array.
     * @param array|null  $generation_definitions Optional. The defaults. Default null.
     * @param array|null  $callbacks              Optional. Array with callbacks to apply on the fields.
     *                                            Default null.
     *
     * @return array|WP_Error Combined array on success. WP_Error when default value is incorrent.
     */
    public function generate_args($args = array(), $generation_definitions = \null, &$callbacks = \null)
    {
    }
    /**
     * Applies the callbacks on the created object.
     *
     * @since UT (3.7.0)
     *
     * @param WP_UnitTest_Factory_Callback_After_Create[] $callbacks Array with callback functions.
     * @param int                                         $object_id ID of the object to apply callbacks for.
     *
     * @return array The altered fields.
     */
    public function apply_callbacks($callbacks, $object_id)
    {
    }
    /**
     * Instantiates a callback object for the given function name.
     *
     * @since UT (3.7.0)
     *
     * @param callable $callback The callback function.
     *
     * @return WP_UnitTest_Factory_Callback_After_Create
     */
    public function callback($callback)
    {
    }
    /**
     * Adds slashes to the given value.
     *
     * @since UT (3.7.0)
     *
     * @param array|object|string|mixed $value The value to add slashes to.
     *
     * @return array|string The value with the possibly applied slashes.
     */
    public function addslashes_deep($value)
    {
    }
}
/**
 * Unit test factory for posts.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int|WP_Error     create( $args = array(), $generation_definitions = null )
 * @method WP_Post|WP_Error create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Post extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Creates a post object.
     *
     * @since UT (3.7.0)
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param array $args Array with elements for the post.
     *
     * @return int|WP_Error The post ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates an existing post object.
     *
     * @since UT (3.7.0)
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param int   $post_id ID of the post to update.
     * @param array $fields  Post data.
     *
     * @return int|WP_Error The post ID on success, WP_Error object on failure.
     */
    public function update_object($post_id, $fields)
    {
    }
    /**
     * Retrieves a post by a given ID.
     *
     * @since UT (3.7.0)
     *
     * @param int $post_id ID of the post to retrieve.
     *
     * @return WP_Post|null WP_Post object on success, null on failure.
     */
    public function get_object_by_id($post_id)
    {
    }
}
/**
 * Unit test factory for attachments.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int|WP_Error     create( $args = array(), $generation_definitions = null )
 * @method WP_Post|WP_Error create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Attachment extends \WP_UnitTest_Factory_For_Post
{
    /**
     * Create an attachment fixture.
     *
     * @since UT (3.7.0)
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param array $args {
     *     Array of arguments. Accepts all arguments that can be passed to
     *     wp_insert_attachment(), in addition to the following:
     *     @type int    $post_parent ID of the post to which the attachment belongs.
     *     @type string $file        Path of the attached file.
     * }
     * @param int   $legacy_parent Deprecated.
     * @param array $legacy_args   Deprecated.
     *
     * @return int|WP_Error The attachment ID on success, WP_Error object on failure.
     */
    public function create_object($args, $legacy_parent = 0, $legacy_args = array())
    {
    }
    /**
     * Saves an attachment.
     *
     * @since 4.4.0
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param string $file           The file name to create attachment object for.
     * @param int    $parent_post_id ID of the post to attach the file to.
     *
     * @return int|WP_Error The attachment ID on success, WP_Error object on failure.
     */
    public function create_upload_object($file, $parent_post_id = 0)
    {
    }
}
/**
 * Unit test factory for sites on a multisite network.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int|WP_Error     create( $args = array(), $generation_definitions = null )
 * @method WP_Site|WP_Error create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Blog extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Creates a site object.
     *
     * @param array $args Arguments for the site object.
     *
     * @return int|WP_Error The site ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates a site object. Not implemented.
     *
     * @param int   $blog_id ID of the site to update.
     * @param array $fields  The fields to update.
     *
     * @return void
     */
    public function update_object($blog_id, $fields)
    {
    }
    /**
     * Retrieves a site by a given ID.
     *
     * @param int $blog_id ID of the site to retrieve.
     *
     * @return WP_Site|null The site object on success, null on failure.
     */
    public function get_object_by_id($blog_id)
    {
    }
}
/**
 * Factory for creating fixtures for the deprecated Links/Bookmarks API.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @since 4.6.0
 *
 * @method int|WP_Error     create( $args = array(), $generation_definitions = null )
 * @method object|WP_Error  create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Bookmark extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Creates a link object.
     *
     * @since 4.6.0
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param array $args Arguments for the link object.
     *
     * @return int|WP_Error The link ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates a link object.
     *
     * @since 4.6.0
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param int   $link_id ID of the link to update.
     * @param array $fields  The fields to update.
     *
     * @return int|WP_Error The link ID on success, WP_Error object on failure.
     */
    public function update_object($link_id, $fields)
    {
    }
    /**
     * Retrieves a link by a given ID.
     *
     * @since 4.6.0
     *
     * @param int $link_id ID of the link to retrieve.
     *
     * @return object|null The link object on success, null on failure.
     */
    public function get_object_by_id($link_id)
    {
    }
}
/**
 * Unit test factory for comments.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int|WP_Error        create( $args = array(), $generation_definitions = null )
 * @method WP_Comment|WP_Error create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[]    create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Comment extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Inserts a comment.
     *
     * @since UT (3.7.0)
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $args The comment details.
     *
     * @return int|WP_Error The comment ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates a comment.
     *
     * @since UT (3.7.0)
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param int   $comment_id The comment ID.
     * @param array $fields     The comment details.
     *
     * @return int|WP_Error The value 1 if the comment was updated, 0 if not updated.
     *                      WP_Error object on failure.
     */
    public function update_object($comment_id, $fields)
    {
    }
    /**
     * Creates multiple comments on a given post.
     *
     * @since UT (3.7.0)
     *
     * @param int   $post_id                ID of the post to create comments for.
     * @param int   $count                  Total amount of comments to create.
     * @param array $args                   The comment details.
     * @param null  $generation_definitions Default values.
     *
     * @return int[] Array with the comment IDs.
     */
    public function create_post_comments($post_id, $count = 1, $args = array(), $generation_definitions = \null)
    {
    }
    /**
     * Retrieves a comment by a given ID.
     *
     * @since UT (3.7.0)
     *
     * @param int $comment_id ID of the comment to retrieve.
     *
     * @return WP_Comment|null WP_Comment object on success, null on failure.
     */
    public function get_object_by_id($comment_id)
    {
    }
}
/**
 * Unit test factory for networks.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int|WP_Error        create( $args = array(), $generation_definitions = null )
 * @method WP_Network|WP_Error create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[]    create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Network extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Creates a network object.
     *
     * @since 3.9.0
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param array $args Arguments for the network object.
     *
     * @return int|WP_Error The network ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates a network object. Not implemented.
     *
     * @since 3.9.0
     *
     * @param int   $network_id ID of the network to update.
     * @param array $fields  The fields to update.
     *
     * @return void
     */
    public function update_object($network_id, $fields)
    {
    }
    /**
     * Retrieves a network by a given ID.
     *
     * @since 3.9.0
     *
     * @param int $network_id ID of the network to retrieve.
     *
     * @return WP_Network|null The network object on success, null on failure.
     */
    public function get_object_by_id($network_id)
    {
    }
}
/**
 * Unit test factory for terms.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int|WP_Error          create( $args = array(), $generation_definitions = null )
 * @method WP_Term|WP_Error|null create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[]      create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Term extends \WP_UnitTest_Factory_For_Thing
{
    const DEFAULT_TAXONOMY = 'post_tag';
    public function __construct($factory = \null, $taxonomy = \null)
    {
    }
    /**
     * Creates a term object.
     *
     * @since UT (3.7.0)
     *
     * @param array $args Array of arguments for inserting a term.
     *
     * @return int|WP_Error The term ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates the term.
     *
     * @since UT (3.7.0)
     * @since 6.2.0 Returns a WP_Error object on failure.
     *
     * @param int|object $term   The term to update.
     * @param array      $fields Array of arguments for updating a term.
     *
     * @return int|WP_Error The term ID on success, WP_Error object on failure.
     */
    public function update_object($term, $fields)
    {
    }
    /**
     * Attach terms to the given post.
     *
     * @since UT (3.7.0)
     *
     * @param int          $post_id  The post ID.
     * @param string|array $terms    An array of terms to set for the post, or a string of terms
     *                               separated by commas. Hierarchical taxonomies must always pass IDs rather
     *                               than names so that children with the same names but different parents
     *                               aren't confused.
     * @param string       $taxonomy Taxonomy name.
     * @param bool         $append   Optional. If true, don't delete existing terms, just add on. If false,
     *                               replace the terms with the new terms. Default true.
     *
     * @return array|false|WP_Error Array of term taxonomy IDs of affected terms. WP_Error or false on failure.
     */
    public function add_post_terms($post_id, $terms, $taxonomy, $append = \true)
    {
    }
    /**
     * Create a term and returns it as an object.
     *
     * @since 4.3.0
     *
     * @param array $args                   Array or string of arguments for inserting a term.
     * @param null  $generation_definitions The default values.
     *
     * @return WP_Term|WP_Error|null WP_Term on success. WP_Error if taxonomy does not exist. Null for miscellaneous failure.
     */
    public function create_and_get($args = array(), $generation_definitions = \null)
    {
    }
    /**
     * Retrieves the term by a given ID.
     *
     * @since UT (3.7.0)
     *
     * @param int $term_id ID of the term to retrieve.
     *
     * @return WP_Term|WP_Error|null WP_Term on success. WP_Error if taxonomy does not exist. Null for miscellaneous failure.
     */
    public function get_object_by_id($term_id)
    {
    }
}
/**
 * Unit test factory for users.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int|WP_Error     create( $args = array(), $generation_definitions = null )
 * @method WP_User|WP_Error create_and_get( $args = array(), $generation_definitions = null )
 * @method (int|WP_Error)[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_User extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Inserts an user.
     *
     * @since UT (3.7.0)
     *
     * @param array $args The user data to insert.
     *
     * @return int|WP_Error The user ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates the user data.
     *
     * @since UT (3.7.0)
     *
     * @param int   $user_id ID of the user to update.
     * @param array $fields  The user data to update.
     *
     * @return int|WP_Error The user ID on success, WP_Error object on failure.
     */
    public function update_object($user_id, $fields)
    {
    }
    /**
     * Retrieves the user for a given ID.
     *
     * @since UT (3.7.0)
     *
     * @param int $user_id ID of the user ID to retrieve.
     *
     * @return WP_User The user object.
     */
    public function get_object_by_id($user_id)
    {
    }
}
/**
 * A factory for making WordPress data with a cross-object type API.
 *
 * Tests should use this factory to generate test fixtures.
 */
class WP_UnitTest_Factory
{
    /**
     * Generates post fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Post
     */
    public $post;
    /**
     * Generates attachment fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Attachment
     */
    public $attachment;
    /**
     * Generates comment fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Comment
     */
    public $comment;
    /**
     * Generates user fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_User
     */
    public $user;
    /**
     * Generates taxonomy term fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Term
     */
    public $term;
    /**
     * Generates category fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Term
     */
    public $category;
    /**
     * Generates tag fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Term
     */
    public $tag;
    /**
     * Generates bookmark (link) fixtures for use in tests.
     *
     * @since 4.6.0
     * @var WP_UnitTest_Factory_For_Bookmark
     */
    public $bookmark;
    /**
     * Generates blog (site) fixtures for use in Multisite tests.
     *
     * @var WP_UnitTest_Factory_For_Blog
     */
    public $blog;
    /**
     * Generates network fixtures for use in Multisite tests.
     *
     * @var WP_UnitTest_Factory_For_Network
     */
    public $network;
    public function __construct()
    {
    }
}
class WP_UnitTest_Generator_Sequence
{
    public static $incr = -1;
    public $next;
    public $template_string;
    public function __construct($template_string = '%s', $start = \null)
    {
    }
    public function next()
    {
    }
    /**
     * Get the incrementor.
     *
     * @since 4.6.0
     *
     * @return int
     */
    public function get_incr()
    {
    }
    /**
     * Get the template string.
     *
     * @since 4.6.0
     *
     * @return string
     */
    public function get_template_string()
    {
    }
}
class WP_Filesystem_MockFS extends \WP_Filesystem_Base
{
    public $verbose = \false;
    // Enable to debug WP_Filesystem_Base::find_folder() / etc.
    public $errors = array();
    public $method = 'MockFS';
    public function __construct()
    {
    }
    public function connect()
    {
    }
    // Copy of core's function, but accepts a path.
    public function abspath($path = \false)
    {
    }
    // Mock FS-specific functions:
    /**
     * Sets initial filesystem environment and/or clears the current environment.
     * Can also be passed the initial filesystem to be setup which is passed to self::setfs()
     */
    public function init($paths = '', $home_dir = '/')
    {
    }
    /**
     * "Bulk Loads" a filesystem into the internal virtual filesystem
     */
    public function setfs($paths)
    {
    }
    // Here starteth the WP_Filesystem functions.
    public function mkdir(
        $path,
        /* Optional args are ignored */
        $chmod = \false,
        $chown = \false,
        $chgrp = \false
    )
    {
    }
    public function put_contents($path, $contents = '', $mode = \null)
    {
    }
    public function get_contents($file)
    {
    }
    public function cwd()
    {
    }
    public function chdir($path)
    {
    }
    public function exists($path)
    {
    }
    public function is_file($file)
    {
    }
    public function is_dir($path)
    {
    }
    public function dirlist($path = '.', $include_hidden = \true, $recursive = \false)
    {
    }
}
class MockFS_Node
{
    public $name;
    // The "name" of the entry, does not include a slash (exception, root).
    public $type;
    // The type of the entry 'f' for file, 'd' for directory.
    public $path;
    // The full path to the entry.
    public function __construct($path)
    {
    }
    public function is_file()
    {
    }
    public function is_dir()
    {
    }
}
class MockFS_Directory_Node extends \MockFS_Node
{
    public $type = 'd';
    public $children = array();
    // The child nodes of this directory.
}
class MockFS_File_Node extends \MockFS_Node
{
    public $type = 'f';
    public $contents = '';
    // The contents of the file.
    public function __construct($path, $contents = '')
    {
    }
}
class WP_Image_Editor_Mock extends \WP_Image_Editor
{
    public static $load_return = \true;
    public static $test_return = \true;
    public static $save_return = array();
    public static $spy = array();
    public static $edit_return = array();
    public static $size_return = \null;
    // Allow testing of jpeg_quality filter.
    public function set_mime_type($mime_type = \null)
    {
    }
    public function load()
    {
    }
    public static function test($args = array())
    {
    }
    public static function supports_mime_type($mime_type)
    {
    }
    public function resize($max_w, $max_h, $crop = \false)
    {
    }
    public function multi_resize($sizes)
    {
    }
    public function crop($src_x, $src_y, $src_w, $src_h, $dst_w = \null, $dst_h = \null, $src_abs = \false)
    {
    }
    public function rotate($angle)
    {
    }
    public function flip($horz, $vert)
    {
    }
    public function save($destfilename = \null, $mime_type = \null)
    {
    }
    public function stream($mime_type = \null)
    {
    }
    public function get_size()
    {
    }
}
/**
 * File for Mock_Invokable class.
 *
 * @package WordPress
 * @subpackage UnitTests
 */
/**
 * Class Mock_Invokable.
 *
 * This class is used to mock a class that has an `__invoke` method.
 */
class Mock_Invokable
{
    public function __invoke()
    {
    }
}
class MockPHPMailer extends \PHPMailer\PHPMailer\PHPMailer
{
    public $mock_sent = array();
    public function preSend()
    {
    }
    /**
     * Override postSend() so mail isn't actually sent.
     */
    public function postSend()
    {
    }
    /**
     * Decorator to return the information for a sent mock.
     *
     * @since 4.5.0
     *
     * @param int $index Optional. Array index of mock_sent value.
     * @return object
     */
    public function get_sent($index = 0)
    {
    }
    /**
     * Get a recipient for a sent mock.
     *
     * @since 4.5.0
     *
     * @param string $address_type    The type of address for the email such as to, cc or bcc.
     * @param int    $mock_sent_index Optional. The sent_mock index we want to get the recipient for.
     * @param int    $recipient_index Optional. The recipient index in the array.
     * @return bool|object Returns object on success, or false if any of the indices don't exist.
     */
    public function get_recipient($address_type, $mock_sent_index = 0, $recipient_index = 0)
    {
    }
}
// phpcs:disable WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
class WP_Object_Cache
{
    /**
     * Holds the Memcached object.
     *
     * @var Memcached
     */
    public $m;
    /**
     * Hold the Memcached server details.
     *
     * @var array
     */
    public $servers;
    /**
     * Holds the non-Memcached objects.
     *
     * @var array
     */
    public $cache = array();
    /**
     * List of global groups.
     *
     * @var array
     */
    public $global_groups = array();
    /**
     * List of groups not saved to Memcached.
     *
     * @var array
     */
    public $no_mc_groups = array();
    /**
     * Prefix used for global groups.
     *
     * @var string
     */
    public $global_prefix = '';
    /**
     * Prefix used for non-global groups.
     *
     * @var string
     */
    public $blog_prefix = '';
    /**
     * Thirty days in seconds.
     *
     * @var int
     */
    public $thirty_days;
    /**
     * Current unix time stamp.
     *
     * @var int
     */
    public $now;
    /**
     * Instantiates the Memcached class.
     *
     * Instantiates the Memcached class and returns adds the servers specified
     * in the $memcached_servers global array.
     *
     * @link https://www.php.net/manual/en/memcached.construct.php
     *
     * @param null $persistent_id To create an instance that persists between requests,
     *                            use persistent_id to specify a unique ID for the instance.
     */
    public function __construct($persistent_id = \null)
    {
    }
    /**
     * Adds a value to cache.
     *
     * If the specified key already exists, the value is not stored and the function
     * returns false.
     *
     * @link https://www.php.net/manual/en/memcached.add.php
     *
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @param string $server_key The key identifying the server to store the value on.
     * @param bool   $by_key     True to store in internal cache by key; false to not store by key.
     * @return bool True on success, false on failure.
     */
    public function add($key, $value, $group = 'default', $expiration = 0, $server_key = '', $by_key = \false)
    {
    }
    /**
     * Adds a value to cache on a specific server.
     *
     * Using a server_key value, the object can be stored on a specified server as opposed
     * to a random server in the stack. Note that this method will add the key/value to the
     * _cache object as part of the runtime cache. It will add it to an array for the
     * specified server_key.
     *
     * @link https://www.php.net/manual/en/memcached.addbykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @return bool True on success, false on failure.
     */
    public function addByKey($server_key, $key, $value, $group = 'default', $expiration = 0)
    {
    }
    /**
     * Adds multiple values to cache.
     *
     * @param array  $items      Array of keys and values to be added.
     * @param string $group      Optional. Where the cache contents are grouped. Default empty.
     * @param int    $expiration Optional. When to expire the cache contents, in seconds.
     *                           Default 0 (no expiration).
     * @return bool[] Array of return values, grouped by key. Each value is either
     *                true on success, or false if cache key and group already exist.
     */
    public function addMultiple(array $items, $group = '', $expiration = 0)
    {
    }
    /**
     * Adds a single server to the list of Memcached servers.
     *
     * @link https://www.php.net/manual/en/memcached.addserver.php
     *
     * @param string $host   The hostname of the memcache server.
     * @param int    $port   The port on which memcache is running.
     * @param int    $weight The weight of the server relative to the total weight
     *                       of all the servers in the pool.
     * @return bool True on success, false on failure.
     */
    public function addServer($host, $port, $weight = 0)
    {
    }
    /**
     * Adds an array of servers to the pool.
     *
     * Each individual server in the array must include a domain and port, with an optional
     * weight value: $servers = array( array( '127.0.0.1', 11211, 0 ) );
     *
     * @link https://www.php.net/manual/en/memcached.addservers.php
     *
     * @param array $servers Array of server to register.
     * @return bool True on success, false on failure.
     */
    public function addServers($servers)
    {
    }
    /**
     * Appends data to an existing item.
     *
     * This method should throw an error if it is used with compressed data.
     * This is an expected behavior. Memcached casts the value to be appended to the initial value
     * to the type of the initial value. Be careful as this leads to unexpected behavior at times.
     * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce
     * similar results and improve consistency. It is recommended that appends only occur with data of
     * the same type.
     *
     * @link https://www.php.net/manual/en/memcached.append.php
     *
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      Must be string as appending mixed values is not well-defined.
     * @param string $group      The group value appended to the $key.
     * @param string $server_key The key identifying the server to store the value on.
     * @param bool   $by_key     True to store in internal cache by key; false to not store by key.
     * @return bool True on success, false on failure.
     */
    public function append($key, $value, $group = 'default', $server_key = '', $by_key = \false)
    {
    }
    /**
     * Appends data to an existing item by server key.
     *
     * This method should throw an error if it is used with compressed data.
     * This is an expected behavior. Memcached casts the value to be appended to the initial value
     * to the type of the initial value. Be careful as this leads to unexpected behavior at times.
     * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce
     * similar results and improve consistency. It is recommended that appends only occur with data of
     * the same type.
     *
     * @link https://www.php.net/manual/en/memcached.appendbykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      Must be string as appending mixed values is not well-defined.
     * @param string $group      The group value appended to the $key.
     * @return bool True on success, false on failure.
     */
    public function appendByKey($server_key, $key, $value, $group = 'default')
    {
    }
    /**
     * Performs a "check and set" to store data.
     *
     * The set will be successful only if the no other request has updated the value
     * since it was fetched by this request.
     *
     * @link https://www.php.net/manual/en/memcached.cas.php
     *
     * @param float  $cas_token  Unique value associated with the existing item. Generated by memcached.
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @param string $server_key The key identifying the server to store the value on.
     * @param bool   $by_key     True to store in internal cache by key; false to not store by key.
     * @return bool True on success, false on failure.
     */
    public function cas($cas_token, $key, $value, $group = 'default', $expiration = 0, $server_key = '', $by_key = \false)
    {
    }
    /**
     * Performs a "check and set" to store data with a server key.
     *
     * The set will be successful only if the no other request has updated the value
     * since it was fetched by this request.
     *
     * @link https://www.php.net/manual/en/memcached.casbykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param float  $cas_token  Unique value associated with the existing item. Generated by memcached.
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @return bool True on success, false on failure.
     */
    public function casByKey($cas_token, $server_key, $key, $value, $group = 'default', $expiration = 0)
    {
    }
    /**
     * Decrements a numeric item's value.
     *
     * @link https://www.php.net/manual/en/memcached.decrement.php
     *
     * @param string $key    The key under which to store the value.
     * @param int    $offset The amount by which to decrement the item's value.
     * @param string $group  The group value appended to the $key.
     * @return int|bool Item's new value on success, false on failure.
     */
    public function decrement($key, $offset = 1, $group = 'default')
    {
    }
    /**
     * Decrements a numeric item's value.
     *
     * Alias for $this->decrement(). Other caching backends use this abbreviated form
     * of the function. It *may* cause breakage somewhere, so it is nice to have.
     * This function will also allow the core unit tests to pass.
     *
     * @param string $key    The key under which to store the value.
     * @param int    $offset The amount by which to decrement the item's value.
     * @param string $group  The group value appended to the $key.
     * @return int|bool Item's new value on success, false on failure.
     */
    public function decr($key, $offset = 1, $group = 'default')
    {
    }
    /**
     * Removes the item from the cache.
     *
     * Removes an item from memcached with identified by $key after $time seconds.
     * The $time parameter allows an object to be queued for deletion without
     * immediately deleting. Between the time that it is queued and the time it's deleted,
     * add, replace, and get will fail, but set will succeed.
     *
     * @link https://www.php.net/manual/en/memcached.delete.php
     *
     * @param string $key        The key under which to store the value.
     * @param string $group      The group value appended to the $key.
     * @param int    $time       The amount of time the server will wait to delete the item in seconds.
     * @param string $server_key The key identifying the server to store the value on.
     * @param bool   $by_key     True to store in internal cache by key; false to not store by key.
     * @return bool True on success, false on failure.
     */
    public function delete($key, $group = 'default', $time = 0, $server_key = '', $by_key = \false)
    {
    }
    /**
     * Removes the item from the cache by server key.
     *
     * Removes an item from memcached with identified by $key after $time seconds.
     * The $time parameter allows an object to be queued for deletion without
     * immediately deleting. Between the time that it is queued and the time it's deleted,
     * add, replace, and get will fail, but set will succeed.
     *
     * @link https://www.php.net/manual/en/memcached.deletebykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param string $key        The key under which to store the value.
     * @param string $group      The group value appended to the $key.
     * @param int    $time       The amount of time the server will wait to delete the item in seconds.
     * @return bool True on success, false on failure.
     */
    public function deleteByKey($server_key, $key, $group = 'default', $time = 0)
    {
    }
    /**
     * Removes multiple items from the cache.
     *
     * @param array  $keys  Array of keys under which the cache to deleted.
     * @param string $group Optional. Where the cache contents are grouped. Default empty.
     * @return bool[] Array of return values, grouped by key. Each value is either
     *                true on success, or false if the contents were not deleted.
     */
    public function deleteMultiple($keys, $group)
    {
    }
    /**
     * Fetches the next result.
     *
     * @link https://www.php.net/manual/en/memcached.fetch.php
     *
     * @return array|false The next result on success, false on failure.
     */
    public function fetch()
    {
    }
    /**
     * Fetches all remaining results from the last request.
     *
     * @link https://www.php.net/manual/en/memcached.fetchall.php
     *
     * @return array|false The results on success, false on failure.
     */
    public function fetchAll()
    {
    }
    /**
     * Invalidates all items in the cache.
     *
     * @link https://www.php.net/manual/en/memcached.flush.php
     *
     * @param int $delay Number of seconds to wait before invalidating the items.
     * @return bool True on success, false on failure.
     */
    public function flush($delay = 0)
    {
    }
    /**
     * Clears the in-memory cache of all data leaving the external cache untouched.
     *
     * @return bool Always returns true.
     */
    public function flush_runtime()
    {
    }
    /**
     * Retrieves object from cache.
     *
     * Gets an object from cache based on $key and $group. In order to fully support
     * the $cache_cb and $cas_token parameters, the runtime cache is ignored by this function
     * if either of those values are set. In that case, the request is made directly
     * to the memcached server for proper handling of the callback and/or token.
     * Note that the $cas_token variable cannot be directly passed to the function.
     * The variable needs to be first defined with a non-null value.
     *
     * If using the $cache_cb argument, the new value will always have an expiration
     * of time of 0 (forever). This is a limitation of the Memcached PECL extension.
     *
     * @link https://www.php.net/manual/en/memcached.get.php
     *
     * @param string        $key        The key under which to store the value.
     * @param string        $group      The group value appended to the $key.
     * @param bool          $force      Whether or not to force a cache invalidation.
     * @param null|bool     $found      Variable passed by reference to determine if the value was found or not.
     * @param string        $server_key The key identifying the server to store the value on.
     * @param bool          $by_key     True to store in internal cache by key; false to not store by key.
     * @param null|callable $cache_cb   Read-through caching callback.
     * @param null|float    $cas_token  The variable to store the CAS token in.
     * @return bool|mixed Cached object value.
     */
    public function get($key, $group = 'default', $force = \false, &$found = \null, $server_key = '', $by_key = \false, $cache_cb = \null, &$cas_token = \null)
    {
    }
    /**
     * Retrieves object from cache from specified server.
     *
     * Gets an object from cache based on $key and $group, and $server_key. In order to fully support
     * the $cache_cb and $cas_token parameters, the runtime cache is ignored by this function
     * if either of those values are set. In that case, the request is made directly
     * to the memcached server for proper handling of the callback and/or token.
     * Note that the $cas_token variable cannot be directly passed to the function.
     * The variable needs to be first defined with a non-null value.
     *
     * If using the $cache_cb argument, the new value will always have an expiration
     * of time of 0 (forever). This is a limitation of the Memcached PECL extension.
     *
     * @link https://www.php.net/manual/en/memcached.getbykey.php
     *
     * @param string      $server_key The key identifying the server to store the value on.
     * @param string      $key        The key under which to store the value.
     * @param string      $group      The group value appended to the $key.
     * @param bool        $force      Whether or not to force a cache invalidation.
     * @param null|bool   $found      Variable passed by reference to determine if the value was found or not.
     * @param null|string $cache_cb   Read-through caching callback.
     * @param null|float  $cas_token  The variable to store the CAS token in.
     * @return bool|mixed Cached object value.
     */
    public function getByKey($server_key, $key, $group = 'default', $force = \false, &$found = \null, $cache_cb = \null, &$cas_token = \null)
    {
    }
    /**
     * Requests multiple keys without blocking.
     *
     * @link https://www.php.net/manual/en/memcached.getdelayed.php
     *
     * @param string|array $keys     Array or string of key(s) to request.
     * @param string|array $groups   Array or string of group(s) for the key(s).
     *                               See buildKeys for more on how these are handled.
     * @param bool         $with_cas Whether to request CAS token values also.
     * @param null         $value_cb The result callback or null.
     * @return bool True on success, false on failure.
     */
    public function getDelayed($keys, $groups = 'default', $with_cas = \false, $value_cb = \null)
    {
    }
    /**
     * Requests multiple keys without blocking from a specified server.
     *
     * @link https://www.php.net/manual/en/memcached.getdelayed.php
     *
     * @param string       $server_key The key identifying the server to store the value on.
     * @param string|array $keys       Array or string of key(s) to request.
     * @param string|array $groups     Array or string of group(s) for the key(s).
     *                                 See buildKeys for more on how these are handled.
     * @param bool         $with_cas   Whether to request CAS token values also.
     * @param null         $value_cb   The result callback or null.
     * @return bool True on success, false on failure.
     */
    public function getDelayedByKey($server_key, $keys, $groups = 'default', $with_cas = \false, $value_cb = \null)
    {
    }
    /**
     * Gets multiple values from memcached in one request.
     *
     * See the buildKeys method definition to understand the $keys/$groups parameters.
     *
     * @link https://www.php.net/manual/en/memcached.getmulti.php
     *
     * @param array        $keys       Array of keys to retrieve.
     * @param string|array $groups     If string, used for all keys.
     *                                 If arrays, corresponds with the $keys array.
     * @param string       $server_key The key identifying the server to store the value on.
     * @param null|array   $cas_tokens The variable to store the CAS tokens for the found items.
     * @param int          $flags      The flags for the get operation.
     * @return bool|array The array of found items on success, false on failure.
     */
    public function getMulti($keys, $groups = 'default', $server_key = '', &$cas_tokens = \null, $flags = \null)
    {
    }
    /**
     * Gets multiple values from memcached in one request by specified server key.
     *
     * See the buildKeys method definition to understand the $keys/$groups parameters.
     *
     * @link https://www.php.net/manual/en/memcached.getmultibykey.php
     *
     * @param string       $server_key The key identifying the server to store the value on.
     * @param array        $keys       Array of keys to retrieve.
     * @param string|array $groups     If string, used for all keys.
     *                                 If arrays, corresponds with the $keys array.
     * @param null|array   $cas_tokens The variable to store the CAS tokens for the found items.
     * @param int          $flags      The flags for the get operation.
     * @return bool|array The array of found items on success, false on failure.
     */
    public function getMultiByKey($server_key, $keys, $groups = 'default', &$cas_tokens = \null, $flags = \null)
    {
    }
    /**
     * Get multiple items from the cache.
     *
     * @param array  $keys  Array of keys under which the cache contents are stored.
     * @param string $group Optional. Where the cache contents are grouped. Default empty.
     * @param bool   $force Optional. Whether to force an update of the local cache
     *                      from the persistent cache. Default false.
     * @return array Array of return values, grouped by key. Each value is either
     *               the cache contents on success, or false on failure.
     */
    public function getMultiple($keys, $group = '', $force = \false)
    {
    }
    /**
     * Retrieves a Memcached option value.
     *
     * @link https://www.php.net/manual/en/memcached.getoption.php
     *
     * @param int $option One of the Memcached::OPT_* constants.
     * @return mixed The value of the requested option on success, false on failure.
     */
    public function getOption($option)
    {
    }
    /**
     * Returns the result code of the last option.
     *
     * @link https://www.php.net/manual/en/memcached.getresultcode.php
     *
     * @return int Result code of the last Memcached operation.
     */
    public function getResultCode()
    {
    }
    /**
     * Return the message describing the result of the last operation.
     *
     * @link https://www.php.net/manual/en/memcached.getresultmessage.php
     *
     * @return string Message describing the result of the last Memcached operation.
     */
    public function getResultMessage()
    {
    }
    /**
     * Gets server information by key.
     *
     * @link https://www.php.net/manual/en/memcached.getserverbykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @return array Array with host, post, and weight on success, false on failure.
     */
    public function getServerByKey($server_key)
    {
    }
    /**
     * Gets the list of servers in the pool.
     *
     * @link https://www.php.net/manual/en/memcached.getserverlist.php
     *
     * @return array The list of all servers in the server pool.
     */
    public function getServerList()
    {
    }
    /**
     * Gets server pool statistics.
     *
     * @link https://www.php.net/manual/en/memcached.getstats.php
     *
     * @return array Array of server statistics, one entry per server.
     */
    public function getStats()
    {
    }
    /**
     * Gets server pool memcached version information.
     *
     * @link https://www.php.net/manual/en/memcached.getversion.php
     *
     * @return array Array of server versions, one entry per server.
     */
    public function getVersion()
    {
    }
    /**
     * Increments a numeric item's value.
     *
     * @link https://www.php.net/manual/en/memcached.increment.php
     *
     * @param string $key    The key under which to store the value.
     * @param int    $offset The amount by which to increment the item's value.
     * @param string $group  The group value appended to the $key.
     * @return int|bool Item's new value on success, false on failure.
     */
    public function increment($key, $offset = 1, $group = 'default')
    {
    }
    /**
     * Alias for $this->incr().
     *
     * Certain plugins expect an "incr" method on the $wp_object_cache object (e.g., Batcache).
     * Since the original version of this library matched names to the memcached methods,
     * the "incr" method was missing. Adding this method restores compatibility with plugins
     * expecting an "incr" method.
     *
     * @param string $key    The key under which to store the value.
     * @param int    $offset The amount by which to increment the item's value.
     * @param string $group  The group value appended to the $key.
     * @return int|bool Item's new value on success, false on failure.
     */
    public function incr($key, $offset = 1, $group = 'default')
    {
    }
    /**
     * Prepends data to an existing item.
     *
     * This method should throw an error if it is used with compressed data. This is an expected behavior.
     * Memcached casts the value to be prepended to the initial value to the type of the initial value.
     * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23
     * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer"
     * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been
     * mimicked in the internal cache to produce similar results and improve consistency. It is recommended
     * that prepends only occur with data of the same type.
     *
     * @link https://www.php.net/manual/en/memcached.prepend.php
     *
     * @param string $key        The key under which to store the value.
     * @param string $value      Must be string as prepending mixed values is not well-defined.
     * @param string $group      The group value prepended to the $key.
     * @param string $server_key The key identifying the server to store the value on.
     * @param bool   $by_key     True to store in internal cache by key; false to not store by key.
     * @return bool True on success, false on failure.
     */
    public function prepend($key, $value, $group = 'default', $server_key = '', $by_key = \false)
    {
    }
    /**
     * Appends data to an existing item by server key.
     *
     * This method should throw an error if it is used with compressed data. This is an expected behavior.
     * Memcached casts the value to be prepended to the initial value to the type of the initial value.
     * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23
     * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer"
     * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been
     * mimicked in the internal cache to produce similar results and improve consistency. It is recommended
     * that prepends only occur with data of the same type.
     *
     * @link https://www.php.net/manual/en/memcached.prependbykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param string $key        The key under which to store the value.
     * @param string $value      Must be string as prepending mixed values is not well-defined.
     * @param string $group      The group value prepended to the $key.
     * @return bool True on success, false on failure.
     */
    public function prependByKey($server_key, $key, $value, $group = 'default')
    {
    }
    /**
     * Replaces a value in cache.
     *
     * This method is similar to "add"; however, is does not successfully set a value
     * if the object's key is not already set in cache.
     *
     * @link https://www.php.net/manual/en/memcached.replace.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param bool   $by_key     True to store in internal cache by key; false to not store by key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @return bool True on success, false on failure.
     */
    public function replace($key, $value, $group = 'default', $expiration = 0, $server_key = '', $by_key = \false)
    {
    }
    /**
     * Replaces a value in cache on a specific server.
     *
     * This method is similar to "addByKey"; however, is does not successfully set a value
     * if the object's key is not already set in cache.
     *
     * @link https://www.php.net/manual/en/memcached.addbykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @return bool True on success, false on failure.
     */
    public function replaceByKey($server_key, $key, $value, $group = 'default', $expiration = 0)
    {
    }
    /**
     * Sets a value in cache.
     *
     * The value is set whether or not this key already exists in memcached.
     *
     * @link https://www.php.net/manual/en/memcached.set.php
     *
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @param string $server_key The key identifying the server to store the value on.
     * @param bool   $by_key     True to store in internal cache by key; false to not store by key.
     * @return bool True on success, false on failure.
     */
    public function set($key, $value, $group = 'default', $expiration = 0, $server_key = '', $by_key = \false)
    {
    }
    /**
     * Sets a value in cache on a specific server.
     *
     * The value is set whether or not this key already exists in memcached.
     *
     * @link https://www.php.net/manual/en/memcached.setbykey.php
     *
     * @param string $server_key The key identifying the server to store the value on.
     * @param string $key        The key under which to store the value.
     * @param mixed  $value      The value to store.
     * @param string $group      The group value appended to the $key.
     * @param int    $expiration The expiration time, defaults to 0.
     * @return bool True on success, false on failure.
     */
    public function setByKey($server_key, $key, $value, $group = 'default', $expiration = 0)
    {
    }
    /**
     * Sets multiple values to cache at once.
     *
     * By sending an array of $items to this function, all values are saved at once to
     * memcached, reducing the need for multiple requests to memcached. The $items array
     * keys and values are what are stored to memcached. The keys in the $items array
     * are merged with the $groups array/string value via buildKeys to determine the
     * final key for the object.
     *
     * @link https://www.php.net/manual/en/memcached.setmulti.php
     *
     * @param array        $items      An array of key/value pairs to store on the server.
     * @param string|array $groups     Group(s) to merge with key(s) in $items.
     * @param int          $expiration The expiration time, defaults to 0.
     * @param string       $server_key The key identifying the server to store the value on.
     * @param bool         $by_key     True to store in internal cache by key; false to not store by key.
     * @return bool True on success, false on failure.
     */
    public function setMulti($items, $groups = 'default', $expiration = 0, $server_key = '', $by_key = \false)
    {
    }
    /**
     * Sets multiple values to cache at once on specified server.
     *
     * By sending an array of $items to this function, all values are saved at once to
     * memcached, reducing the need for multiple requests to memcached. The $items array
     * keys and values are what are stored to memcached. The keys in the $items array
     * are merged with the $groups array/string value via buildKeys to determine the
     * final key for the object.
     *
     * @link https://www.php.net/manual/en/memcached.setmultibykey.php
     *
     * @param string       $server_key  The key identifying the server to store the value on.
     * @param array        $items       An array of key/value pairs to store on the server.
     * @param string|array $groups      Group(s) to merge with key(s) in $items.
     * @param int          $expiration  The expiration time, defaults to 0.
     * @return bool True on success, false on failure.
     */
    public function setMultiByKey($server_key, $items, $groups = 'default', $expiration = 0)
    {
    }
    /**
     * Sets multiple values in cache.
     *
     * @param array  $items      Array of keys and values to be set.
     * @param string $group      Optional. Where the cache contents are grouped. Default empty.
     * @param int    $expiration Optional. When to expire the cache contents, in seconds.
     *                           Default 0 (no expiration).
     * @return bool[] Array of return values, grouped by key. Each value is either
     *                true on success, or false on failure.
     */
    public function setMultiple(array $items, $group = '', $expiration = 0)
    {
    }
    /**
     * Sets a Memcached option.
     *
     * @link https://www.php.net/manual/en/memcached.setoption.php
     *
     * @param int   $option Option name.
     * @param mixed $value  Option value.
     * @return bool True on success, false on failure.
     */
    public function setOption($option, $value)
    {
    }
    /**
     * Builds a key for the cached object using the blog_id, key, and group values.
     *
     * This function is inspired by the original WP Memcached Object cache.
     *
     * @author Ryan Boren
     * @link http://wordpress.org/extend/plugins/memcached/
     *
     * @param string $key   The key under which to store the value.
     * @param string $group The group value appended to the $key.
     * @return string
     */
    public function buildKey($key, $group = 'default')
    {
    }
    /**
     * Creates an array of keys from passed key(s) and group(s).
     *
     * This function takes a string or array of key(s) and group(s) and combines them into a single dimensional
     * array that merges the keys and groups. If the same number of keys and groups exist, the final keys will
     * append $groups[n] to $keys[n]. If there are more keys than groups and the $groups parameter is an array,
     * $keys[n] will be combined with $groups[n] until $groups runs out of values. 'default' will be used for remaining
     * values. If $keys is an array and $groups is a string, all final values will append $groups to $keys[n].
     * If both values are strings, they will be combined into a single string. Note that if more $groups are received
     * than $keys, the method will return an empty array. This method is primarily a helper method for methods
     * that call memcached with an array of keys.
     *
     * @param string|array $keys   Key(s) to merge with group(s).
     * @param string|array $groups Group(s) to merge with key(s).
     * @return array Array that combines keys and groups into a single set of memcached keys.
     */
    public function buildKeys($keys, $groups = 'default')
    {
    }
    /**
     * Ensures that a proper expiration time is set.
     *
     * Memcached treats any value over 30 days as a timestamp. If a developer sets the expiration
     * for greater than 30 days or less than the current timestamp, the timestamp is in the past
     * and the value isn't cached. This function detects values in that range and corrects them.
     *
     * @param string|int $expiration The dirty expiration time.
     * @return string|int The sanitized expiration time.
     */
    public function sanitize_expiration($expiration)
    {
    }
    /**
     * Concatenates two values and casts to type of the first value.
     *
     * This is used in append and prepend operations to match how these functions are handled
     * by memcached. In both cases, whichever value is the original value in the combined value
     * will dictate the type of the combined value.
     *
     * @param mixed  $original  Original value that dictates the combined type.
     * @param mixed  $pended    Value to combine with original value.
     * @param string $direction Either 'pre' or 'app'.
     * @return mixed Combined value casted to the type of the first value.
     */
    public function combine_values($original, $pended, $direction)
    {
    }
    /**
     * Simple wrapper for saving object to the internal cache.
     *
     * @param string $derived_key Key to save value under.
     * @param mixed  $value       Object value.
     */
    public function add_to_internal_cache($derived_key, $value)
    {
    }
    /**
     * Determines if a no_mc_group exists in a group of groups.
     *
     * @param mixed $groups The groups to search.
     * @return bool True if a no_mc_group is present; false if a no_mc_group is not present.
     */
    public function contains_no_mc_group($groups)
    {
    }
    /**
     * Adds global groups.
     *
     * This function comes straight from the original WP Memcached Object cache.
     *
     * @author Ryan Boren
     * @link http://wordpress.org/extend/plugins/memcached/
     *
     * @param array $groups Array of groups.
     * @return void
     */
    public function add_global_groups($groups)
    {
    }
    /**
     * Adds non-persistent groups.
     *
     * This function comes straight from the original WP Memcached Object cache.
     *
     * @author Ryan Boren
     * @link http://wordpress.org/extend/plugins/memcached/
     *
     * @param array $groups Array of groups.
     * @return void
     */
    public function add_non_persistent_groups($groups)
    {
    }
    /**
     * Gets a value specifically from the internal, run-time cache, not memcached.
     *
     * @param int|string $key   Key value.
     * @param int|string $group Group that the value belongs to.
     * @return bool|mixed Value on success, false on failure.
     */
    public function get_from_runtime_cache($key, $group)
    {
    }
    /**
     * Switches blog prefix, which changes the cache that is accessed.
     *
     * @param int $blog_id Blog to switch to.
     * @return void
     */
    public function switch_to_blog($blog_id)
    {
    }
}
class Spy_REST_Server extends \WP_REST_Server
{
    public $sent_headers = array();
    public $sent_body = '';
    public $last_request = \null;
    public $override_by_default = \false;
    public $status = \null;
    /**
     * Gets the raw $endpoints data from the server.
     *
     * @return array
     */
    public function get_raw_endpoint_data()
    {
    }
    /**
     * Allow calling protected methods from tests.
     *
     * @param string $method Method to call.
     * @param array  $args   Arguments to pass to the method.
     * @return mixed
     */
    public function __call($method, $args)
    {
    }
    /**
     * Adds a header to the list of sent headers.
     *
     * @param string $header Header name.
     * @param string $value  Header value.
     */
    public function send_header($header, $value)
    {
    }
    /**
     * Removes a header from the list of sent headers.
     *
     * @param string $header Header name.
     */
    public function remove_header($header)
    {
    }
    /**
     * Stores last set status.
     *
     * @param int $code HTTP status.
     */
    public function set_status($status)
    {
    }
    /**
     * Overrides the dispatch method so we can get a handle on the request object.
     *
     * @param  WP_REST_Request $request Request to attempt dispatching.
     * @return WP_REST_Response Response returned by the callback.
     */
    public function dispatch($request)
    {
    }
    /**
     * Overrides the register_route method so we can re-register routes internally if needed.
     *
     * @param string $route_namespace Namespace.
     * @param string $route           The REST route.
     * @param array  $route_args      Route arguments.
     * @param bool   $override        Optional. Whether the route should be overridden if it already exists.
     *                                Default false. Also set `$GLOBALS['wp_rest_server']->override_by_default = true`
     *                                to set overrides when you don't have access to the caller context.
     */
    public function register_route($route_namespace, $route, $route_args, $override = \false)
    {
    }
    /**
     * Serves the request and returns the result.
     *
     * @param string $path Optional. The request route. If not set, `$_SERVER['PATH_INFO']` will be used.
     *                     Default null.
     * @return null|false Null if not served and a HEAD request, false otherwise.
     */
    public function serve_request($path = \null)
    {
    }
}
/**
 * Basic abstract test class.
 *
 * All WordPress unit tests should inherit from this class.
 */
abstract class WP_UnitTestCase extends \WP_UnitTestCase_Base
{
}
/**
 * Ajax test case class
 *
 * @package    WordPress
 * @subpackage UnitTests
 * @since      3.4.0
 */
abstract class WP_Ajax_UnitTestCase extends \WP_UnitTestCase
{
    /**
     * Last Ajax response. This is set via echo -or- wp_die.
     *
     * @var string
     */
    protected $_last_response = '';
    /**
     * List of Ajax actions called via GET.
     *
     * @var array
     */
    protected static $_core_actions_get = array('fetch-list', 'ajax-tag-search', 'wp-compression-test', 'imgedit-preview', 'oembed-cache', 'autocomplete-user', 'dashboard-widgets', 'logged-in');
    /**
     * Saved error reporting level.
     *
     * @var int
     */
    protected $_error_level = 0;
    /**
     * List of Ajax actions called via POST.
     *
     * @var array
     */
    protected static $_core_actions_post = array('oembed_cache', 'image-editor', 'delete-comment', 'delete-tag', 'delete-link', 'delete-meta', 'delete-post', 'trash-post', 'untrash-post', 'delete-page', 'dim-comment', 'add-link-category', 'add-tag', 'get-tagcloud', 'get-comments', 'replyto-comment', 'edit-comment', 'add-menu-item', 'add-meta', 'add-user', 'closed-postboxes', 'hidden-columns', 'update-welcome-panel', 'menu-get-metabox', 'wp-link-ajax', 'menu-locations-save', 'menu-quick-search', 'meta-box-order', 'get-permalink', 'sample-permalink', 'inline-save', 'inline-save-tax', 'find_posts', 'widgets-order', 'save-widget', 'set-post-thumbnail', 'date_format', 'time_format', 'wp-fullscreen-save-post', 'wp-remove-post-lock', 'dismiss-wp-pointer', 'send-attachment-to-editor', 'heartbeat', 'nopriv_heartbeat', 'get-revision-diffs', 'save-user-color-scheme', 'update-widget', 'query-themes', 'parse-embed', 'set-attachment-thumbnail', 'parse-media-shortcode', 'destroy-sessions', 'install-plugin', 'update-plugin', 'press-this-save-post', 'press-this-add-category', 'crop-image', 'generate-password', 'save-wporg-username', 'delete-plugin', 'search-plugins', 'search-install-plugins', 'activate-plugin', 'update-theme', 'delete-theme', 'install-theme', 'get-post-thumbnail-html', 'wp-privacy-export-personal-data', 'wp-privacy-erase-personal-data');
    public static function set_up_before_class()
    {
    }
    /**
     * Sets up the test fixture.
     *
     * Overrides wp_die(), pretends to be Ajax, and suppresses E_WARNINGs.
     */
    public function set_up()
    {
    }
    /**
     * Tears down the test fixture.
     *
     * Resets $_POST, removes the wp_die() override, restores error reporting.
     */
    public function tear_down()
    {
    }
    /**
     * Clears login cookies, unsets the current user.
     */
    public function logout()
    {
    }
    /**
     * Returns our callback handler
     *
     * @return callback
     */
    public function getDieHandler()
    {
    }
    /**
     * Handler for wp_die().
     *
     * Save the output for analysis, stop execution by throwing an exception.
     *
     * Error conditions (no output, just die) will throw <code>WPAjaxDieStopException( $message )</code>.
     * You can test for this with:
     * <code>
     * $this->expectException( 'WPAjaxDieStopException' );
     * $this->expectExceptionMessage( 'something contained in $message' );
     * </code>
     *
     * Normal program termination (wp_die called at the end of output) will throw <code>WPAjaxDieContinueException( $message )</code>.
     * You can test for this with:
     * <code>
     * $this->expectException( 'WPAjaxDieContinueException' );
     * $this->expectExceptionMessage( 'something contained in $message' );
     * </code>
     *
     * @param string $message The message to set.
     *
     * @throws WPAjaxDieStopException     Thrown to stop further execution.
     * @throws WPAjaxDieContinueException Thrown to stop execution of the Ajax function,
     *                                    but continue the unit test.
     */
    public function dieHandler($message)
    {
    }
    /**
     * Switches between user roles.
     *
     * E.g. administrator, editor, author, contributor, subscriber.
     *
     * @param string $role The role to set.
     */
    protected function _setRole($role)
    {
    }
    /**
     * Mimics the Ajax handling of admin-ajax.php.
     *
     * Captures the output via output buffering, and if there is any,
     * stores it in $this->_last_response.
     *
     * @param string $action The action to handle.
     */
    protected function _handleAjax($action)
    {
    }
}
abstract class WP_Canonical_UnitTestCase extends \WP_UnitTestCase
{
    public static $old_current_user;
    public static $author_id;
    public static $post_ids = array();
    public static $comment_ids = array();
    public static $term_ids = array();
    public static $terms = array();
    public static $old_options = array();
    /**
     * This can be defined in a subclass of this class which contains its own data() method.
     * Those tests will be run against the specified permastruct.
     */
    public $structure = '/%year%/%monthnum%/%day%/%postname%/';
    public static function wpSetUpBeforeClass(\WP_UnitTest_Factory $factory)
    {
    }
    public static function wpTearDownAfterClass()
    {
    }
    public function set_up()
    {
    }
    /**
     * Generate fixtures to be shared between canonical tests.
     *
     * Abstracted here because it's invoked by wpSetUpBeforeClass() in more than one class.
     *
     * @since 4.1.0
     */
    public static function generate_shared_fixtures(\WP_UnitTest_Factory $factory)
    {
    }
    /**
     * Clean up shared fixtures.
     *
     * @since 4.1.0
     */
    public static function delete_shared_fixtures()
    {
    }
    /**
     * Assert that a given URL is the same a the canonical URL generated by WP.
     *
     * @since 4.1.0
     *
     * @param string $test_url                Raw URL that will be run through redirect_canonical().
     * @param string $expected                Expected string.
     * @param int    $ticket                  Optional. Trac ticket number.
     * @param array  $expected_doing_it_wrong Array of class/function names expected to throw _doing_it_wrong() notices.
     */
    public function assertCanonical($test_url, $expected, $ticket = 0, $expected_doing_it_wrong = array())
    {
    }
    /**
     * Get the canonical URL given a raw URL.
     *
     * @param string $test_url Should be relative to the site "front", ie /category/uncategorized/
     *                         as opposed to http://example.com/category/uncategorized/
     * @return $can_url Returns the original $test_url if no canonical can be generated, otherwise returns
     *                  the fully-qualified URL as generated by redirect_canonical().
     */
    public function get_canonical($test_url)
    {
    }
}
abstract class WP_Test_REST_TestCase extends \WP_UnitTestCase
{
    protected function assertErrorResponse($code, $response, $status = \null)
    {
    }
}
abstract class WP_Test_REST_Controller_Testcase extends \WP_Test_REST_TestCase
{
    protected $server;
    public function set_up()
    {
    }
    public function tear_down()
    {
    }
    public abstract function test_register_routes();
    public abstract function test_context_param();
    public abstract function test_get_items();
    public abstract function test_get_item();
    public abstract function test_create_item();
    public abstract function test_update_item();
    public abstract function test_delete_item();
    public abstract function test_prepare_item();
    public abstract function test_get_item_schema();
    public function filter_rest_url_for_leading_slash($url, $path)
    {
    }
}
abstract class WP_Test_REST_Post_Type_Controller_Testcase extends \WP_Test_REST_Controller_Testcase
{
    protected function check_post_data($post, $data, $context, $links)
    {
    }
    protected function check_get_posts_response($response, $context = 'view')
    {
    }
    protected function check_get_post_response($response, $context = 'view')
    {
    }
    protected function check_create_post_response($response)
    {
    }
    protected function check_update_post_response($response)
    {
    }
    protected function set_post_data($args = array())
    {
    }
    protected function set_raw_post_data($args = array())
    {
    }
    /**
     * Overwrite the default protected title format.
     *
     * By default WordPress will show password protected posts with a title of
     * "Protected: %s", as the REST API communicates the protected status of a post
     * in a machine readable format, we remove the "Protected: " prefix.
     *
     * @return string
     */
    public function protected_title_format()
    {
    }
}
abstract class WP_Test_XML_TestCase extends \WP_UnitTestCase
{
    /**
     * Load XML from a string.
     *
     * @param string $xml
     * @param int    $options Bitwise OR of the {@link https://www.php.net/manual/en/libxml.constants.php libxml option constants}.
     *                        Default is 0.
     * @return DOMDocument The DOMDocument object loaded from the XML.
     */
    public function loadXML($xml, $options = 0)
    {
    }
    /**
     * Normalize an XML document to make comparing two documents easier.
     *
     * @param string $xml
     * @param int    $options Bitwise OR of the {@link https://www.php.net/manual/en/libxml.constants.php libxml option constants}.
     *                        Default is 0.
     * @return string The normalized form of `$xml`.
     */
    public function normalizeXML($xml, $options = 0)
    {
    }
    /**
     * Reports an error identified by `$message` if the namespace normalized form of the XML document in `$actualXml`
     * is equal to the namespace normalized form of the XML document in `$expectedXml`.
     *
     * This is similar to {@link https://phpunit.de/manual/6.5/en/appendixes.assertions.html#appendixes.assertions.assertXmlStringEqualsXmlString assertXmlStringEqualsXmlString()}
     * except that differences in namespace prefixes are normalized away, such that given
     * `$actualXml = "<root xmlns='urn:wordpress.org'><child/></root>";` and
     * `$expectedXml = "<ns0:root xmlns:ns0='urn:wordpress.org'><ns0:child></ns0:root>";`
     * then `$this->assertXMLEquals( $expectedXml, $actualXml )` will succeed.
     *
     * @param string $expectedXml
     * @param string $actualXml
     * @param string $message   Optional. Message to display when the assertion fails.
     */
    public function assertXMLEquals($expectedXml, $actualXml, $message = '')
    {
    }
    /**
     * Reports an error identified by `$message` if the namespace normalized form of the XML document in `$actualXml`
     * is not equal to the namespace normalized form of the XML document in `$expectedXml`.
     *
     * This is similar to {@link https://phpunit.de/manual/6.5/en/appendixes.assertions.html#appendixes.assertions.assertXmlStringEqualsXmlString assertXmlStringNotEqualsXmlString()}
     * except that differences in namespace prefixes are normalized away, such that given
     * `$actualXml = "<root xmlns='urn:wordpress.org'><child></root>";` and
     * `$expectedXml = "<ns0:root xmlns:ns0='urn:wordpress.org'><ns0:child/></ns0:root>";`
     * then `$this->assertXMLNotEquals( $expectedXml, $actualXml )` will fail.
     *
     * @param string $expectedXml
     * @param string $actualXml
     * @param string $message   Optional. Message to display when the assertion fails.
     */
    public function assertXMLNotEquals($expectedXml, $actualXml, $message = '')
    {
    }
}
abstract class WP_XMLRPC_UnitTestCase extends \WP_UnitTestCase
{
    /**
     * @var wp_xmlrpc_server
     */
    protected $myxmlrpcserver;
    public function set_up()
    {
    }
    public function tear_down()
    {
    }
    protected static function make_user_by_role($role)
    {
    }
}
class TracTickets
{
    /**
     * When open tickets for a Trac installation is requested, the results are stored here.
     *
     * @var array
     */
    protected static $trac_ticket_cache = array();
    /**
     * Checks if Trac ticket #$ticket_id is resolved.
     *
     * @return bool|null True if the ticket is resolved, false if not resolved, null on error.
     */
    public static function isTracTicketClosed($trac_url, $ticket_id)
    {
    }
    // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
    public static function usingLocalCache()
    {
    }
    // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
    public static function forcingKnownBugs()
    {
    }
}
/*
 * Helper class for testing code that involves actions and filters.
 *
 * Typical use:
 *
 *     $ma = new MockAction();
 *     add_action( 'foo', array( &$ma, 'action' ) );
 *
 * @since UT (3.7.0)
 */
class MockAction
{
    public $events;
    public $debug;
    /**
     * PHP5 constructor.
     *
     * @since UT (3.7.0)
     */
    public function __construct($debug = 0)
    {
    }
    /**
     * @since UT (3.7.0)
     */
    public function reset()
    {
    }
    /**
     * @since UT (3.7.0)
     */
    public function current_filter()
    {
    }
    /**
     * @since UT (3.7.0)
     */
    public function action($arg)
    {
    }
    /**
     * @since UT (3.7.0)
     */
    public function action2($arg)
    {
    }
    /**
     * @since UT (3.7.0)
     */
    public function filter($arg)
    {
    }
    /**
     * @since UT (3.7.0)
     */
    public function filter2($arg)
    {
    }
    /**
     * @since UT (3.7.0)
     */
    public function filter_append($arg)
    {
    }
    /**
     * Does not return the result, so it's safe to use with the 'all' filter.
     *
     * @since UT (3.7.0)
     */
    public function filterall($hook_name, ...$args)
    {
    }
    /**
     * Returns a list of all the actions, hook names and args.
     *
     * @since UT (3.7.0)
     */
    public function get_events()
    {
    }
    /**
     * Returns a count of the number of times the action was called since the last reset.
     *
     * @since UT (3.7.0)
     */
    public function get_call_count($hook_name = '')
    {
    }
    /**
     * Returns an array of the hook names that triggered calls to this action.
     *
     * @since 6.1.0
     */
    public function get_hook_names()
    {
    }
    /**
     * Returns an array of the hook names that triggered calls to this action.
     *
     * @since UT (3.7.0)
     * @since 6.1.0 Turned into an alias for ::get_hook_names().
     */
    public function get_tags()
    {
    }
    /**
     * Returns an array of args passed in calls to this action.
     *
     * @since UT (3.7.0)
     */
    public function get_args()
    {
    }
}
// Convert valid XML to an array tree structure.
// Kinda lame, but it works with a default PHP 4 installation.
class TestXMLParser
{
    public $xml;
    public $data = array();
    /**
     * PHP5 constructor.
     */
    public function __construct($in)
    {
    }
    public function parse($in)
    {
    }
    public function start_handler($parser, $name, $attributes)
    {
    }
    public function data_handler($parser, $data)
    {
    }
    public function end_handler($parser, $name)
    {
    }
}
/**
 * Use to create objects by yourself.
 */
class MockClass extends \stdClass
{
}
/**
 * Special class for exposing protected wpdb methods we need to access
 */
class WpdbExposedMethodsForTesting extends \wpdb
{
    public function __construct()
    {
    }
    public function __call($name, $arguments)
    {
    }
}
/*
 * A simple manually-instrumented profiler for WordPress.
 *
 * This records basic execution time, and a summary of the actions and SQL queries run within each block.
 *
 * start() and stop() must be called in pairs, for example:
 *
 *     function something_to_profile() {
 *         wppf_start( __FUNCTION__ );
 *         do_stuff();
 *         wppf_stop();
 *     }
 *
 * Multiple profile blocks are permitted, and they may be nested.
 */
class WPProfiler
{
    public $stack;
    public $profile;
    /**
     * PHP5 constructor.
     */
    public function __construct()
    {
    }
    public function start($name)
    {
    }
    public function stop()
    {
    }
    public function microtime($since = 0.0)
    {
    }
    public function log_filter($tag)
    {
    }
    public function log_action($tag)
    {
    }
    public function _current_action()
    {
    }
    public function results()
    {
    }
    public function _query_summary($queries, &$out)
    {
    }
    public function _query_count($queries)
    {
    }
    public function _dirty_objects_count($dirty_objects)
    {
    }
    public function array_add($a, $b)
    {
    }
    public function array_sub($a, $b)
    {
    }
    public function print_summary()
    {
    }
}
function wp_tests_options($value)
{
}
/**
 * Retrieves PHPUnit runner version.
 *
 * @return double The version number.
 */
function tests_get_phpunit_version()
{
}
/**
 * Resets various `$_SERVER` variables that can get altered during tests.
 */
function tests_reset__SERVER()
{
}
/**
 * Adds hooks before loading WP.
 *
 * @since UT (3.7.0)
 *
 * @see add_filter()
 * @global WP_Hook[] $wp_filter A multidimensional array of all hooks and the callbacks hooked to them.
 *
 * @param string   $hook_name     The name of the filter to add the callback to.
 * @param callable $callback      The callback to be run when the filter is applied.
 * @param int      $priority      Optional. Used to specify the order in which the functions
 *                                associated with a particular action are executed.
 *                                Lower numbers correspond with earlier execution,
 *                                and functions with the same priority are executed
 *                                in the order in which they were added to the action. Default 10.
 * @param int      $accepted_args Optional. The number of arguments the function accepts. Default 1.
 * @return true Always returns true.
 */
function tests_add_filter($hook_name, $callback, $priority = 10, $accepted_args = 1)
{
}
/**
 * Generates a unique function ID based on the given arguments.
 *
 * @since UT (3.7.0)
 *
 * @see _wp_filter_build_unique_id()
 *
 * @param string                $hook_name Unused. The name of the filter to build ID for.
 * @param callable|string|array $callback  The callback to generate ID for. The callback may
 *                                         or may not exist.
 * @param int                   $priority  Unused. The order in which the functions
 *                                         associated with a particular action are executed.
 * @return string Unique function ID for usage as array key.
 */
function _test_filter_build_unique_id($hook_name, $callback, $priority)
{
}
/**
 * Deletes all data from the database.
 */
function _delete_all_data()
{
}
/**
 * Deletes all posts from the database.
 */
function _delete_all_posts()
{
}
/**
 * Handles the WP die handler by outputting the given values as text.
 *
 * @since UT (3.7.0)
 * @since 6.1.0 The `$message` parameter can accept a `WP_Error` object.
 *
 * @param string|WP_Error $message Error message or WP_Error object.
 * @param string          $title   Error title.
 * @param array           $args    Arguments passed to wp_die().
 */
function _wp_die_handler($message, $title = '', $args = array())
{
}
/**
 * Disables the WP die handler.
 *
 * @since UT (3.7.0)
 */
function _disable_wp_die()
{
}
/**
 * Enables the WP die handler.
 *
 * @since UT (3.7.0)
 */
function _enable_wp_die()
{
}
/**
 * Returns the die handler.
 *
 * @since UT (3.7.0)
 *
 * @return string The die handler.
 */
function _wp_die_handler_filter()
{
}
/**
 * Returns the die handler.
 *
 * @since 4.9.0
 *
 * @return string The die handler.
 */
function _wp_die_handler_filter_exit()
{
}
/**
 * Dies without an exit.
 *
 * @since 4.0.0
 * @since 6.1.0 The `$message` parameter can accept a `WP_Error` object.
 *
 * @param string|WP_Error $message Error message or WP_Error object.
 * @param string          $title   Error title.
 * @param array           $args    Arguments passed to wp_die().
 */
function _wp_die_handler_txt($message, $title, $args)
{
}
/**
 * Dies with an exit.
 *
 * @since 4.9.0
 * @since 6.1.0 The `$message` parameter can accept a `WP_Error` object.
 *
 * @param string|WP_Error $message Error message or WP_Error object.
 * @param string          $title   Error title.
 * @param array           $args    Arguments passed to wp_die().
 */
function _wp_die_handler_exit($message, $title, $args)
{
}
/**
 * Set a permalink structure.
 *
 * Hooked as a callback to the 'populate_options' action, we use this function to set a permalink structure during
 * `wp_install()`, so that WP doesn't attempt to do a time-consuming remote request.
 *
 * @since 4.2.0
 */
function _set_default_permalink_structure_for_tests()
{
}
/**
 * Helper used with the `upload_dir` filter to remove the /year/month sub directories from the uploads path and URL.
 *
 * @return array The altered array.
 */
function _upload_dir_no_subdir($uploads)
{
}
/**
 * Helper used with the `upload_dir` filter to set https upload URL.
 *
 * @return array The altered array.
 */
function _upload_dir_https($uploads)
{
}
/**
 * Use the Spy_REST_Server class for the REST server.
 *
 * @return string The server class name.
 */
function _wp_rest_server_class_filter()
{
}
/**
 * After the init action has been run once, trying to re-register block types can cause
 * _doing_it_wrong warnings. To avoid this, unhook the block registration functions.
 *
 * @since 5.0.0
 */
function _unhook_block_registration()
{
}
/**
 * Helper method to return the global phpmailer instance defined in the bootstrap
 *
 * @since 4.4.0
 *
 * @return MockPHPMailer|false
 */
function tests_retrieve_phpmailer_instance()
{
}
/**
 * Helper method to reset the phpmailer instance.
 *
 * @since 4.6.0
 *
 * @return bool
 */
function reset_phpmailer_instance()
{
}
/**
 * Adds a value to cache.
 *
 * If the specified key already exists, the value is not stored and the function
 * returns false.
 *
 * @link https://www.php.net/manual/en/memcached.add.php
 *
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_add($key, $value, $group = '', $expiration = 0)
{
}
/**
 * Adds a value to cache on a specific server.
 *
 * Using a server_key value, the object can be stored on a specified server as opposed
 * to a random server in the stack. Note that this method will add the key/value to the
 * _cache object as part of the runtime cache. It will add it to an array for the
 * specified server_key.
 *
 * @link https://www.php.net/manual/en/memcached.addbykey.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_add_by_key($server_key, $key, $value, $group = '', $expiration = 0)
{
}
/**
 * Adds multiple values to the cache in one call, if the cache keys don't already exist.
 *
 * @param array  $items      Array of keys and values to be added.
 * @param string $group      Optional. Where the cache contents are grouped. Default empty.
 * @param int    $expiration Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool[] Array of return values, grouped by key. Each value is either
 *                true on success, or false if cache key and group already exist.
 */
function wp_cache_add_multiple(array $items, $group = '', $expiration = 0)
{
}
/**
 * Adds a single server to the list of Memcached servers.
 *
 * @link https://www.php.net/manual/en/memcached.addserver.php
 *
 * @param string $host   The hostname of the memcache server.
 * @param int    $port   The port on which memcache is running.
 * @param int    $weight The weight of the server relative to the total weight
 *                       of all the servers in the pool.
 * @return bool True on success, false on failure.
 */
function wp_cache_add_server($host, $port, $weight = 0)
{
}
/**
 * Adds an array of servers to the pool.
 *
 * Each individual server in the array must include a domain and port, with an optional
 * weight value: $servers = array( array( '127.0.0.1', 11211, 0 ) );
 *
 * @link https://www.php.net/manual/en/memcached.addservers.php
 *
 * @param array $servers Array of server to register.
 * @return bool True on success, false on failure.
 */
function wp_cache_add_servers($servers)
{
}
/**
 * Appends data to an existing item.
 *
 * This method should throw an error if it is used with compressed data.
 * This is an expected behavior. Memcached casts the value to be appended to the initial value
 * to the type of the initial value. Be careful as this leads to unexpected behavior at times.
 * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce
 * similar results and improve consistency. It is recommended that appends only occur with data of
 * the same type.
 *
 * @link https://www.php.net/manual/en/memcached.append.php
 *
 * @param string $key   The key under which to store the value.
 * @param mixed  $value Must be string as appending mixed values is not well-defined.
 * @param string $group The group value appended to the $key.
 * @return bool True on success, false on failure.
 */
function wp_cache_append($key, $value, $group = '')
{
}
/**
 * Appends data to an existing item by server key.
 *
 * This method should throw an error if it is used with compressed data.
 * This is an expected behavior. Memcached casts the value to be appended to the initial value
 * to the type of the initial value. Be careful as this leads to unexpected behavior at times.
 * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce
 * similar results and improve consistency. It is recommended that appends only occur with data of
 * the same type.
 *
 * @link https://www.php.net/manual/en/memcached.appendbykey.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      Must be string as appending mixed values is not well-defined.
 * @param string $group      The group value appended to the $key.
 * @return bool True on success, false on failure.
 */
function wp_cache_append_by_key($server_key, $key, $value, $group = '')
{
}
/**
 * Performs a "check and set" to store data.
 *
 * The set will be successful only if the no other request has updated the value
 * since it was fetched by this request.
 *
 * @link https://www.php.net/manual/en/memcached.cas.php
 *
 * @param float  $cas_token  Unique value associated with the existing item. Generated by memcached.
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_cas($cas_token, $key, $value, $group = '', $expiration = 0)
{
}
/**
 * Performs a "check and set" to store data with a server key.
 *
 * The set will be successful only if the no other request has updated the value
 * since it was fetched by this request.
 *
 * @link https://www.php.net/manual/en/memcached.casbykey.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @param float  $cas_token  Unique value associated with the existing item. Generated by memcached.
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_cas_by_key($cas_token, $server_key, $key, $value, $group = '', $expiration = 0)
{
}
/**
 * Closes the cache.
 *
 * This function has ceased to do anything since WordPress 2.5.
 * The functionality was removed along with the rest of the persistent cache.
 * This does not mean that plugins can't implement this function when they need
 * to make sure that the cache is cleaned up after WordPress no longer needs it.
 *
 * @since 2.0.0
 *
 * @return bool Always returns true.
 */
function wp_cache_close()
{
}
/**
 * Decrements a numeric item's value.
 *
 * @link https://www.php.net/manual/en/memcached.decrement.php
 *
 * @param string $key    The key under which to store the value.
 * @param int    $offset The amount by which to decrement the item's value.
 * @param string $group  The group value appended to the $key.
 * @return int|bool Item's new value on success, false on failure.
 */
function wp_cache_decrement($key, $offset = 1, $group = '')
{
}
/**
 * Decrements a numeric item's value.
 *
 * This is the same as wp_cache_decrement(), but kept for backward compatibility.
 * The original WordPress caching backends use wp_cache_decr().
 *
 * @link https://www.php.net/manual/en/memcached.decrement.php
 *
 * @param string $key    The key under which to store the value.
 * @param int    $offset The amount by which to decrement the item's value.
 * @param string $group  The group value appended to the $key.
 * @return int|bool Item's new value on success, false on failure.
 */
function wp_cache_decr($key, $offset = 1, $group = '')
{
}
/**
 * Removes the item from the cache.
 *
 * Removes an item from memcached with identified by $key after $time seconds.
 * The $time parameter allows an object to be queued for deletion without
 * immediately deleting. Between the time that it is queued and the time it's deleted,
 * add, replace, and get will fail, but set will succeed.
 *
 * @link https://www.php.net/manual/en/memcached.delete.php
 *
 * @param string $key   The key under which to store the value.
 * @param string $group The group value appended to the $key.
 * @param int    $time  The amount of time the server will wait to delete the item in seconds.
 * @return bool True on success, false on failure.
 */
function wp_cache_delete($key, $group = '', $time = 0)
{
}
/**
 * Removes the item from the cache by server key.
 *
 * Removes an item from memcached with identified by $key after $time seconds.
 * The $time parameter allows an object to be queued for deletion without
 * immediately deleting. Between the time that it is queued and the time it's deleted,
 * add, replace, and get will fail, but set will succeed.
 *
 * @link https://www.php.net/manual/en/memcached.deletebykey.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @param string $key        The key under which to store the value.
 * @param string $group      The group value appended to the $key.
 * @param int    $time       The amount of time the server will wait to delete the item in seconds.
 * @return bool True on success, false on failure.
 */
function wp_cache_delete_by_key($server_key, $key, $group = '', $time = 0)
{
}
/**
 * Deletes multiple values from the cache in one call.
 *
 * @param array  $keys  Array of keys under which the cache to deleted.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @return bool[] Array of return values, grouped by key. Each value is either
 *                true on success, or false if the contents were not deleted.
 */
function wp_cache_delete_multiple(array $keys, $group = '')
{
}
/**
 * Fetches the next result.
 *
 * @link https://www.php.net/manual/en/memcached.fetch.php
 *
 * @return array|false The next result on success, false on failure.
 */
function wp_cache_fetch()
{
}
/**
 * Fetches all remaining results from the last request.
 *
 * @link https://www.php.net/manual/en/memcached.fetchall.php
 *
 * @return array|false The results on success, false on failure.
 */
function wp_cache_fetch_all()
{
}
/**
 * Invalidates all items in the cache.
 *
 * @link https://www.php.net/manual/en/memcached.flush.php
 *
 * @param int $delay Number of seconds to wait before invalidating the items.
 * @return bool True on success, false on failure.
 */
function wp_cache_flush($delay = 0)
{
}
/**
 * Removes all cache items from the in-memory runtime cache.
 *
 * @return bool True on success, false on failure.
 */
function wp_cache_flush_runtime()
{
}
/**
 * Determines whether the object cache implementation supports a particular feature.
 *
 * @since 6.1.0
 *
 * @param string $feature Name of the feature to check for. Possible values include:
 *                        'add_multiple', 'set_multiple', 'get_multiple', 'delete_multiple',
 *                        'flush_runtime', 'flush_group'.
 * @return bool True if the feature is supported, false otherwise.
 */
function wp_cache_supports($feature)
{
}
/**
 * Retrieves object from cache.
 *
 * Gets an object from cache based on $key and $group. In order to fully support
 * the $cache_cb and $cas_token parameters, the runtime cache is ignored by this function
 * if either of those values are set. In that case, the request is made directly
 * to the memcached server for proper handling of the callback and/or token.
 *
 * Note that the $deprecated and $found args are only here for compatibility
 * with the native wp_cache_get() function.
 *
 * @link https://www.php.net/manual/en/memcached.get.php
 *
 * @param string      $key       The key under which to store the value.
 * @param string      $group     The group value appended to the $key.
 * @param bool        $force     Whether or not to force a cache invalidation.
 * @param null|bool   $found     Variable passed by reference to determine if the value was found or not.
 * @param null|string $cache_cb  Read-through caching callback.
 * @param null|float  $cas_token The variable to store the CAS token in.
 * @return bool|mixed Cached object value.
 */
function wp_cache_get($key, $group = '', $force = \false, &$found = \null, $cache_cb = \null, &$cas_token = \null)
{
}
/**
 * Retrieves object from cache from specified server.
 *
 * Gets an object from cache based on $key, $group, and $server_key. In order to fully support
 * the $cache_cb and $cas_token parameters, the runtime cache is ignored by this function
 * if either of those values are set. In that case, the request is made directly
 * to the memcached server for proper handling of the callback and/or token.
 *
 * @link https://www.php.net/manual/en/memcached.getbykey.php
 *
 * @param string      $server_key The key identifying the server to store the value on.
 * @param string      $key        The key under which to store the value.
 * @param string      $group      The group value appended to the $key.
 * @param bool        $force      Whether or not to force a cache invalidation.
 * @param null|bool   $found      Variable passed by reference to determine if the value was found or not.
 * @param null|string $cache_cb   Read-through caching callback.
 * @param null|float  $cas_token  The variable to store the CAS token in.
 * @return bool|mixed Cached object value.
 */
function wp_cache_get_by_key($server_key, $key, $group = '', $force = \false, &$found = \null, $cache_cb = \null, &$cas_token = \null)
{
}
/**
 * Requests multiple keys without blocking.
 *
 * @link https://www.php.net/manual/en/memcached.getdelayed.php
 *
 * @param string|array $keys     Array or string of key(s) to request.
 * @param string|array $groups   Array or string of group(s) for the key(s).
 *                               See buildKeys for more on how these are handled.
 * @param bool         $with_cas Whether to request CAS token values also.
 * @param null         $value_cb The result callback or null.
 * @return bool True on success, false on failure.
 */
function wp_cache_get_delayed($keys, $groups = '', $with_cas = \false, $value_cb = \null)
{
}
/**
 * Requests multiple keys without blocking from a specified server.
 *
 * @link https://www.php.net/manual/en/memcached.getdelayed.php
 *
 * @param string       $server_key The key identifying the server to store the value on.
 * @param string|array $keys       Array or string of key(s) to request.
 * @param string|array $groups     Array or string of group(s) for the key(s).
 *                                 See buildKeys for more on how these are handled.
 * @param bool         $with_cas   Whether to request CAS token values also.
 * @param null         $value_cb   The result callback or null.
 * @return bool True on success, false on failure.
 */
function wp_cache_get_delayed_by_key($server_key, $keys, $groups = '', $with_cas = \false, $value_cb = \null)
{
}
/**
 * Gets multiple values from memcached in one request.
 *
 * See the buildKeys method definition to understand the $keys/$groups parameters.
 *
 * @link https://www.php.net/manual/en/memcached.getmulti.php
 *
 * @param array        $keys       Array of keys to retrieve.
 * @param string|array $groups     If string, used for all keys.
 *                                 If arrays, corresponds with the $keys array.
 * @param null|array   $cas_tokens The variable to store the CAS tokens for the found items.
 * @param int          $flags      The flags for the get operation.
 * @return bool|array The array of found items on success, false on failure.
 */
function wp_cache_get_multi($keys, $groups = '', &$cas_tokens = \null, $flags = \null)
{
}
/**
 * Gets multiple values from memcached in one request by specified server key.
 *
 * See the buildKeys method definition to understand the $keys/$groups parameters.
 *
 * @link https://www.php.net/manual/en/memcached.getmultibykey.php
 *
 * @param string       $server_key The key identifying the server to store the value on.
 * @param array        $keys       Array of keys to retrieve.
 * @param string|array $groups     If string, used for all keys.
 *                                 If arrays, corresponds with the $keys array.
 * @param null|array   $cas_tokens The variable to store the CAS tokens for the found items.
 * @param int          $flags      The flags for the get operation.
 * @return bool|array The array of found items on success, false on failure.
 */
function wp_cache_get_multi_by_key($server_key, $keys, $groups = '', &$cas_tokens = \null, $flags = \null)
{
}
/**
 * Retrieves multiple values from the cache in one call.
 *
 * @param array  $keys  Array of keys under which the cache contents are stored.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @param bool   $force Optional. Whether to force an update of the local cache
 *                      from the persistent cache. Default false.
 * @return array Array of return values, grouped by key. Each value is either
 *               the cache contents on success, or false on failure.
 */
function wp_cache_get_multiple($keys, $group = '', $force = \false)
{
}
/**
 * Retrieves a Memcached option value.
 *
 * @link https://www.php.net/manual/en/memcached.getoption.php
 *
 * @param int $option One of the Memcached::OPT_* constants.
 * @return mixed The value of the requested option on success, false on failure.
 */
function wp_cache_get_option($option)
{
}
/**
 * Returns the result code of the last option.
 *
 * @link https://www.php.net/manual/en/memcached.getresultcode.php
 *
 * @return int Result code of the last Memcached operation.
 */
function wp_cache_get_result_code()
{
}
/**
 * Return the message describing the result of the last operation.
 *
 * @link https://www.php.net/manual/en/memcached.getresultmessage.php
 *
 * @return string Message describing the result of the last Memcached operation.
 */
function wp_cache_get_result_message()
{
}
/**
 * Gets server information by key.
 *
 * @link https://www.php.net/manual/en/memcached.getserverbykey.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @return array Array with host, post, and weight on success, fales on failure.
 */
function wp_cache_get_server_by_key($server_key)
{
}
/**
 * Gets the list of servers in the pool.
 *
 * @link https://www.php.net/manual/en/memcached.getserverlist.php
 *
 * @return array The list of all servers in the server pool.
 */
function wp_cache_get_server_list()
{
}
/**
 * Gets server pool statistics.
 *
 * @link https://www.php.net/manual/en/memcached.getstats.php
 *
 * @return array Array of server statistics, one entry per server.
 */
function wp_cache_get_stats()
{
}
/**
 * Gets server pool memcached version information.
 *
 * @link https://www.php.net/manual/en/memcached.getversion.php
 *
 * @return array Array of server versions, one entry per server.
 */
function wp_cache_get_version()
{
}
/**
 * Increments a numeric item's value.
 *
 * @link https://www.php.net/manual/en/memcached.increment.php
 *
 * @param string $key    The key under which to store the value.
 * @param int    $offset The amount by which to increment the item's value.
 * @param string $group  The group value appended to the $key.
 * @return int|bool Item's new value on success, false on failure.
 */
function wp_cache_increment($key, $offset = 1, $group = '')
{
}
/**
 * Increments a numeric item's value.
 *
 * This is the same as wp_cache_increment(), but kept for backward compatibility.
 * The original WordPress caching backends use wp_cache_incr().
 *
 * @link https://www.php.net/manual/en/memcached.increment.php
 *
 * @param string $key    The key under which to store the value.
 * @param int    $offset The amount by which to increment the item's value.
 * @param string $group  The group value appended to the $key.
 * @return int|bool Item's new value on success, false on failure.
 */
function wp_cache_incr($key, $offset = 1, $group = '')
{
}
/**
 * Prepends data to an existing item.
 *
 * This method should throw an error if it is used with compressed data. This is an expected behavior.
 * Memcached casts the value to be prepended to the initial value to the type of the initial value.
 * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23
 * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer"
 * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been
 * mimicked in the internal cache to produce similar results and improve consistency. It is recommended
 * that prepends only occur with data of the same type.
 *
 * @link https://www.php.net/manual/en/memcached.prepend.php
 *
 * @param string $key   The key under which to store the value.
 * @param string $value Must be string as prepending mixed values is not well-defined.
 * @param string $group The group value prepended to the $key.
 * @return bool True on success, false on failure.
 */
function wp_cache_prepend($key, $value, $group = '')
{
}
/**
 * Appends data to an existing item by server key.
 *
 * This method should throw an error if it is used with compressed data. This is an expected behavior.
 * Memcached casts the value to be prepended to the initial value to the type of the initial value.
 * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23
 * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer"
 * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been
 * mimicked in the internal cache to produce similar results and improve consistency. It is recommended
 * that prepends only occur with data of the same type.
 *
 * @link https://www.php.net/manual/en/memcached.prependbykey.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @param string $key        The key under which to store the value.
 * @param string $value      Must be string as prepending mixed values is not well-defined.
 * @param string $group      The group value prepended to the $key.
 * @return bool True on success, false on failure.
 */
function wp_cache_prepend_by_key($server_key, $key, $value, $group = '')
{
}
/**
 * Replaces a value in cache.
 *
 * This method is similar to "add"; however, is does not successfully set a value
 * if the object's key is not already set in cache.
 *
 * @link https://www.php.net/manual/en/memcached.replace.php
 *
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_replace($key, $value, $group = '', $expiration = 0)
{
}
/**
 * Replaces a value in cache on a specific server.
 *
 * This method is similar to "addByKey"; however, is does not successfully set a value
 * if the object's key is not already set in cache.
 *
 * @link https://www.php.net/manual/en/memcached.addbykey.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_replace_by_key($server_key, $key, $value, $group = '', $expiration = 0)
{
}
/**
 * Sets a value in cache.
 *
 * The value is set whether or not this key already exists in memcached.
 *
 * @link https://www.php.net/manual/en/memcached.set.php
 *
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_set($key, $value, $group = '', $expiration = 0)
{
}
/**
 * Sets a value in cache.
 *
 * The value is set whether or not this key already exists in memcached.
 *
 * @link https://www.php.net/manual/en/memcached.set.php
 *
 * @param string $server_key The key identifying the server to store the value on.
 * @param string $key        The key under which to store the value.
 * @param mixed  $value      The value to store.
 * @param string $group      The group value appended to the $key.
 * @param int    $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_set_by_key($server_key, $key, $value, $group = '', $expiration = 0)
{
}
/**
 * Sets multiple values to cache at once.
 *
 * By sending an array of $items to this function, all values are saved at once to
 * memcached, reducing the need for multiple requests to memcached. The $items array
 * keys and values are what are stored to memcached. The keys in the $items array
 * are merged with the $groups array/string value via buildKeys to determine the
 * final key for the object.
 *
 * @param array        $items      An array of key/value pairs to store on the server.
 * @param string|array $groups     Group(s) to merge with key(s) in $items.
 * @param int          $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_set_multi($items, $groups = '', $expiration = 0)
{
}
/**
 * Sets multiple values to cache at once on specified server.
 *
 * By sending an array of $items to this function, all values are saved at once to
 * memcached, reducing the need for multiple requests to memcached. The $items array
 * keys and values are what are stored to memcached. The keys in the $items array
 * are merged with the $groups array/string value via buildKeys to determine the
 * final key for the object.
 *
 * @param string       $server_key The key identifying the server to store the value on.
 * @param array        $items      An array of key/value pairs to store on the server.
 * @param string|array $groups     Group(s) to merge with key(s) in $items.
 * @param int          $expiration The expiration time, defaults to 0.
 * @return bool True on success, false on failure.
 */
function wp_cache_set_multi_by_key($server_key, $items, $groups = 'default', $expiration = 0)
{
}
/**
 * Sets multiple values to the cache in one call.
 *
 * Differs from wp_cache_add_multiple() in that it will always write data.
 *
 * @param array  $items      Array of keys and values to be set.
 * @param string $group      Optional. Where the cache contents are grouped. Default empty.
 * @param int    $expiration Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool[] Array of return values, grouped by key. Each value is either
 *                true on success, or false on failure.
 */
function wp_cache_set_multiple(array $items, $group = '', $expiration = 0)
{
}
/**
 * Sets a Memcached option.
 *
 * @link https://www.php.net/manual/en/memcached.setoption.php
 *
 * @param int   $option Option name.
 * @param mixed $value  Option value.
 * @return bool True on success, false on failure.
 */
function wp_cache_set_option($option, $value)
{
}
/**
 * Switches blog prefix, which changes the cache that is accessed.
 *
 * @param int $blog_id Blog to switch to.
 * @return void
 */
function wp_cache_switch_to_blog($blog_id)
{
}
/**
 * Sets up Object Cache Global and assigns it.
 *
 * @global WP_Object_Cache $wp_object_cache WordPress Object Cache
 * @return void
 */
function wp_cache_init()
{
}
/**
 * Adds a group or set of groups to the list of non-persistent groups.
 *
 * @param string|array $groups A group or an array of groups to add.
 * @return void
 */
function wp_cache_add_global_groups($groups)
{
}
/**
 * Adds a group or set of groups to the list of non-Memcached groups.
 *
 * @param string|array $groups A group or an array of groups to add.
 * @return void
 */
function wp_cache_add_non_persistent_groups($groups)
{
}
/**
 * Legacy plural form function.
 *
 * @param int $nplurals
 * @param string $expression
 */
function tests_make_plural_form_function($nplurals, $expression)
{
}
// Misc help functions and utilities.
/**
 * Returns a string of the required length containing random characters. Note that
 * the maximum possible string length is 32.
 *
 * @param int $len Optional. The required length. Default 32.
 * @return string The string.
 */
function rand_str($len = 32)
{
}
/**
 * Returns a string of the required length containing random characters.
 *
 * @param int $len The required length.
 * @return string The string.
 */
function rand_long_str($length)
{
}
/**
 * Strips leading and trailing whitespace from each line in the string.
 *
 * @param string $txt The text.
 * @return string Text with line-leading and line-trailing whitespace stripped.
 */
function strip_ws($txt)
{
}
/**
 * Converts an XML string into an array tree structure.
 *
 * The output of this function can be passed to xml_find() to find nodes by their path.
 *
 * @param string $in The XML string.
 * @return array XML as an array.
 */
function xml_to_array($in)
{
}
/**
 * Finds XML nodes by a given "path".
 *
 * Example usage:
 *
 *     $tree = xml_to_array( $rss );
 *     $items = xml_find( $tree, 'rss', 'channel', 'item' );
 *
 * @param array     $tree     An array tree structure of XML, typically from xml_to_array().
 * @param string ...$elements Names of XML nodes to create a "path" to find within the XML.
 * @return array Array of matching XML node information.
 */
function xml_find($tree, ...$elements)
{
}
function xml_join_atts($atts)
{
}
function xml_array_dumbdown(&$data)
{
}
function dmp(...$args)
{
}
function dmp_filter($a)
{
}
function get_echo($callback, $args = array())
{
}
// Recursively generate some quick assertEquals() tests based on an array.
function gen_tests_array($name, $expected_data)
{
}
/**
 * Drops all tables from the WordPress database.
 */
function drop_tables()
{
}
function print_backtrace()
{
}
// Mask out any input fields matching the given name.
function mask_input_value($in, $name = '_wpnonce')
{
}
/**
 * Removes the post type and its taxonomy associations.
 */
function _unregister_post_type($cpt_name)
{
}
function _unregister_taxonomy($taxonomy_name)
{
}
/**
 * Unregister a post status.
 *
 * @since 4.2.0
 *
 * @param string $status
 */
function _unregister_post_status($status)
{
}
function _cleanup_query_vars()
{
}
function _clean_term_filters()
{
}
/**
 * Determine approximate backtrack count when running PCRE.
 *
 * @return int The backtrack count.
 */
function benchmark_pcre_backtracking($pattern, $subject, $strategy)
{
}
function test_rest_expand_compact_links($links)
{
}
function wppf_start($name)
{
}
function wppf_stop()
{
}
function wppf_results()
{
}
function wppf_print_summary()
{
}