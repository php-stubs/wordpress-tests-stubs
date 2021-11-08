<?php
/**
 * Generated stub declarations for WordPress Tests.
 * @see https://wordpress.org
 * @see https://github.com/php-stubs/wordpress-tests-stubs
 */

/**
 * A child class of the PHP test runner.
 *
 * Used to access the protected longOptions property, to parse the arguments
 * passed to the script.
 *
 * If it is determined that phpunit was called with a --group that corresponds
 * to an @ticket annotation (such as `phpunit --group 12345` for bugs marked
 * as #WP12345), then it is assumed that known bugs should not be skipped.
 *
 * If WP_TESTS_FORCE_KNOWN_BUGS is already set in wp-tests-config.php, then
 * how you call phpunit has no effect.
 */
class WP_PHPUnit_Util_Getopt extends \PHPUnit_Util_Getopt
{
    protected $longOptions = array('exclude-group=', 'group=');
    function __construct($argv)
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
    private $foo = 'bar';
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
    private function callMe()
    {
    }
}
/**
 * Unit Tests: Basic_Subclass class
 *
 * @package WordPress
 * @subpackage UnitTests
 * @since 4.7.0
 */
/**
 * Class used to test accessing methods and properties.
 *
 * @since 4.0.0
 */
class Basic_Subclass extends \Basic_Object
{
}
class WP_Tests_Exception extends \PHPUnit_Framework_Exception
{
}
/**
 * General exception for wp_die()
 */
class WPDieException extends \Exception
{
}
/**
 * Exception for cases of wp_die(), for ajax tests.
 * This means there was an error (no output, and a call to wp_die)
 *
 * @package    WordPress
 * @subpackage Unit Tests
 * @since      3.4.0
 */
class WPAjaxDieStopException extends \WPDieException
{
}
/**
 * Exception for cases of wp_die(), for ajax tests.
 * This means execution of the ajax function should be halted, but the unit
 * test can continue.  The function finished normally and there was not an
 * error (output happened, but wp_die was called to end execution)  This is
 * used with WP_Ajax_Response::send
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
    var $callback;
    function __construct($callback)
    {
    }
    function call($object)
    {
    }
}
/**
 * An abstract class that serves as a basis for all WordPress object-type factory classes.
 */
abstract class WP_UnitTest_Factory_For_Thing
{
    var $default_generation_definitions;
    var $factory;
    /**
     * Creates a new factory, which will create objects of a specific Thing
     *
     * @param object $factory Global factory that can be used to create other objects on the system
     * @param array $default_generation_definitions Defines what default values should the properties of the object have. The default values
     * can be generators -- an object with next() method. There are some default generators: {@link WP_UnitTest_Generator_Sequence},
     * {@link WP_UnitTest_Generator_Locale_Name}, {@link WP_UnitTest_Factory_Callback_After_Create}.
     */
    function __construct($factory, $default_generation_definitions = array())
    {
    }
    abstract function create_object($args);
    abstract function update_object($object, $fields);
    function create($args = array(), $generation_definitions = \null)
    {
    }
    function create_and_get($args = array(), $generation_definitions = \null)
    {
    }
    abstract function get_object_by_id($object_id);
    function create_many($count, $args = array(), $generation_definitions = \null)
    {
    }
    function generate_args($args = array(), $generation_definitions = \null, &$callbacks = \null)
    {
    }
    function apply_callbacks($callbacks, $created)
    {
    }
    function callback($function)
    {
    }
    function addslashes_deep($value)
    {
    }
}
class WP_UnitTest_Factory_For_Post extends \WP_UnitTest_Factory_For_Thing
{
    function __construct($factory = \null)
    {
    }
    function create_object($args)
    {
    }
    function update_object($post_id, $fields)
    {
    }
    function get_object_by_id($post_id)
    {
    }
}
class WP_UnitTest_Factory_For_Attachment extends \WP_UnitTest_Factory_For_Post
{
    /**
     * Create an attachment fixture.
     *
     * @param array $args {
     *     Array of arguments. Accepts all arguments that can be passed to
     *     wp_insert_attachment(), in addition to the following:
     *     @type int    $post_parent ID of the post to which the attachment belongs.
     *     @type string $file        Path of the attached file.
     * }
     * @param int   $legacy_parent Deprecated.
     * @param array $legacy_args   Deprecated
     */
    function create_object($args, $legacy_parent = 0, $legacy_args = array())
    {
    }
    function create_upload_object($file, $parent = 0)
    {
    }
}
class WP_UnitTest_Factory_For_Blog extends \WP_UnitTest_Factory_For_Thing
{
    function __construct($factory = \null)
    {
    }
    function create_object($args)
    {
    }
    function update_object($blog_id, $fields)
    {
    }
    function get_object_by_id($blog_id)
    {
    }
}
/**
 * Factory for creating fixtures for the deprecated Links/Bookmarks API.
 *
 * @since 4.6.0
 */
class WP_UnitTest_Factory_For_Bookmark extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    public function create_object($args)
    {
    }
    public function update_object($link_id, $fields)
    {
    }
    public function get_object_by_id($link_id)
    {
    }
}
class WP_UnitTest_Factory_For_Comment extends \WP_UnitTest_Factory_For_Thing
{
    function __construct($factory = \null)
    {
    }
    function create_object($args)
    {
    }
    function update_object($comment_id, $fields)
    {
    }
    function create_post_comments($post_id, $count = 1, $args = array(), $generation_definitions = \null)
    {
    }
    function get_object_by_id($comment_id)
    {
    }
}
class WP_UnitTest_Factory_For_Network extends \WP_UnitTest_Factory_For_Thing
{
    function __construct($factory = \null)
    {
    }
    function create_object($args)
    {
    }
    function update_object($network_id, $fields)
    {
    }
    function get_object_by_id($network_id)
    {
    }
}
class WP_UnitTest_Factory_For_Term extends \WP_UnitTest_Factory_For_Thing
{
    private $taxonomy;
    const DEFAULT_TAXONOMY = 'post_tag';
    function __construct($factory = \null, $taxonomy = \null)
    {
    }
    function create_object($args)
    {
    }
    function update_object($term, $fields)
    {
    }
    function add_post_terms($post_id, $terms, $taxonomy, $append = \true)
    {
    }
    function create_and_get($args = array(), $generation_definitions = \null)
    {
    }
    function get_object_by_id($term_id)
    {
    }
}
class WP_UnitTest_Factory_For_User extends \WP_UnitTest_Factory_For_Thing
{
    function __construct($factory = \null)
    {
    }
    function create_object($args)
    {
    }
    function update_object($user_id, $fields)
    {
    }
    function get_object_by_id($user_id)
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
     * @var WP_UnitTest_Factory_For_Post
     */
    public $post;
    /**
     * @var WP_UnitTest_Factory_For_Attachment
     */
    public $attachment;
    /**
     * @var WP_UnitTest_Factory_For_Comment
     */
    public $comment;
    /**
     * @var WP_UnitTest_Factory_For_User
     */
    public $user;
    /**
     * @var WP_UnitTest_Factory_For_Term
     */
    public $term;
    /**
     * @var WP_UnitTest_Factory_For_Term
     */
    public $category;
    /**
     * @var WP_UnitTest_Factory_For_Term
     */
    public $tag;
    /**
     * @since 4.6.0
     * @var WP_UnitTest_Factory_For_Bookmark
     */
    public $bookmark;
    /**
     * @var WP_UnitTest_Factory_For_Blog
     */
    public $blog;
    /**
     * @var WP_UnitTest_Factory_For_Network
     */
    public $network;
    function __construct()
    {
    }
}
class WP_UnitTest_Generator_Sequence
{
    static $incr = -1;
    public $next;
    public $template_string;
    function __construct($template_string = '%s', $start = \null)
    {
    }
    function next()
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
    private $cwd;
    // Holds a array of objects which contain an array of objects, etc.
    private $fs = \null;
    // Holds a array of /path/to/file.php and /path/to/dir/ map to an object in $fs above
    // a fast more efficient way of determining if a path exists, and access to that node
    private $fs_map = array();
    public $verbose = \false;
    // Enable to debug WP_Filesystem_Base::find_folder() / etc.
    public $errors = array();
    public $method = 'MockFS';
    function __construct()
    {
    }
    function connect()
    {
    }
    // Copy of core's function, but accepts a path.
    function abspath($path = \false)
    {
    }
    // Mock FS specific functions:
    /**
     * Sets initial filesystem environment and/or clears the current environment.
     * Can also be passed the initial filesystem to be setup which is passed to self::setfs()
     */
    function init($paths = '', $home_dir = '/')
    {
    }
    /**
     * "Bulk Loads" a filesystem into the internal virtual filesystem
     */
    function setfs($paths)
    {
    }
    /**
     * Locates a filesystem "node"
     */
    private function locate_node($path)
    {
    }
    /**
     * Locates a filesystem node for the parent of the given item
     */
    private function locate_parent_node($path)
    {
    }
    // Here starteth the WP_Filesystem functions.
    function mkdir($path, $chmod = \false, $chown = \false, $chgrp = \false)
    {
    }
    function put_contents($path, $contents = '', $mode = \null)
    {
    }
    function get_contents($file)
    {
    }
    function cwd()
    {
    }
    function chdir($path)
    {
    }
    function exists($path)
    {
    }
    function is_file($file)
    {
    }
    function is_dir($path)
    {
    }
    function dirlist($path = '.', $include_hidden = \true, $recursive = \false)
    {
    }
}
class MockFS_Node
{
    public $name;
    // The "name" of the entry, does not include a slash (exception, root)
    public $type;
    // The type of the entry 'f' for file, 'd' for Directory
    public $path;
    // The full path to the entry.
    function __construct($path)
    {
    }
    function is_file()
    {
    }
    function is_dir()
    {
    }
}
class MockFS_Directory_Node extends \MockFS_Node
{
    public $type = 'd';
    public $children = array();
}
class MockFS_File_Node extends \MockFS_Node
{
    public $type = 'f';
    public $contents = '';
    // The contents of the file
    function __construct($path, $contents = '')
    {
    }
}
class WP_Image_Editor_Mock extends \WP_Image_Editor
{
    public static $load_return = \true;
    public static $test_return = \true;
    public static $save_return = array();
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
}
class MockPHPMailer extends \PHPMailer
{
    var $mock_sent = array();
    function preSend()
    {
    }
    /**
     * Override postSend() so mail isn't actually sent.
     */
    function postSend()
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
class PHPUnit_Util_Test extends \PHPUnit\Util\Test
{
    public static function getTickets($className, $methodName)
    {
    }
}
/**
 * A PHPUnit TestListener that exposes your slowest running tests by outputting
 * results directly to the console.
 */
class SpeedTrapListener implements \PHPUnit_Framework_TestListener
{
    /**
     * Internal tracking for test suites.
     *
     * Increments as more suites are run, then decremented as they finish. All
     * suites have been run when returns to 0.
     *
     * @var integer
     */
    protected $suites = 0;
    /**
     * Time in milliseconds at which a test will be considered "slow" and be
     * reported by this listener.
     *
     * @var int
     */
    protected $slowThreshold;
    /**
     * Number of tests to report on for slowness.
     *
     * @var int
     */
    protected $reportLength;
    /**
     * Collection of slow tests.
     *
     * @var array
     */
    protected $slow = array();
    /**
     * Construct a new instance.
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }
    /**
     * An error occurred.
     *
     * @param PHPUnit_Framework_Test $test
     * @param Exception              $e
     * @param float                   $time
     */
    public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
    }
    /**
     * A warning occurred.
     *
     * @param PHPUnit_Framework_Test    $test
     * @param PHPUnit_Framework_Warning $e
     * @param float                     $time
     * @since Method available since Release 5.1.0
     */
    public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
    {
    }
    /**
     * A failure occurred.
     *
     * @param PHPUnit_Framework_Test                 $test
     * @param PHPUnit_Framework_AssertionFailedError $e
     * @param float                                   $time
     */
    public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
    {
    }
    /**
     * Incomplete test.
     *
     * @param PHPUnit_Framework_Test $test
     * @param Exception              $e
     * @param float                   $time
     */
    public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
    }
    /**
     * Risky test.
     *
     * @param PHPUnit_Framework_Test $test
     * @param Exception              $e
     * @param float                   $time
     * @since  Method available since Release 4.0.0
     */
    public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
    }
    /**
     * Skipped test.
     *
     * @param PHPUnit_Framework_Test $test
     * @param Exception              $e
     * @param float                   $time
     */
    public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
    {
    }
    /**
     * A test started.
     *
     * @param PHPUnit_Framework_Test $test
     */
    public function startTest(\PHPUnit_Framework_Test $test)
    {
    }
    /**
     * A test ended.
     *
     * @param PHPUnit_Framework_Test $test
     * @param float                   $time
     */
    public function endTest(\PHPUnit_Framework_Test $test, $time)
    {
    }
    /**
     * A test suite started.
     *
     * @param PHPUnit_Framework_TestSuite $suite
     */
    public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
    {
    }
    /**
     * A test suite ended.
     *
     * @param PHPUnit_Framework_TestSuite $suite
     */
    public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
    {
    }
    /**
     * Whether the given test execution time is considered slow.
     *
     * @param int $time          Test execution time in milliseconds
     * @param int $slowThreshold Test execution time at which a test should be considered slow (milliseconds)
     * @return bool
     */
    protected function isSlow($time, $slowThreshold)
    {
    }
    /**
     * Stores a test as slow.
     *
     * @param PHPUnit_Framework_TestCase $test
     * @param int                         $time Test execution time in milliseconds
     */
    protected function addSlowTest(\PHPUnit_Framework_TestCase $test, $time)
    {
    }
    /**
     * Whether at least one test has been considered slow.
     *
     * @return bool
     */
    protected function hasSlowTests()
    {
    }
    /**
     * Convert PHPUnit's reported test time (microseconds) to milliseconds.
     *
     * @param float $time
     * @return int
     */
    protected function toMilliseconds($time)
    {
    }
    /**
     * Label for describing a test.
     *
     * @param PHPUnit_Framework_TestCase $test
     * @return string
     */
    protected function makeLabel(\PHPUnit_Framework_TestCase $test)
    {
    }
    /**
     * Calculate number of slow tests to report about.
     *
     * @return int
     */
    protected function getReportLength()
    {
    }
    /**
     * Find how many slow tests occurred that won't be shown due to list length.
     *
     * @return int Number of hidden slow tests
     */
    protected function getHiddenCount()
    {
    }
    /**
     * Renders slow test report header.
     */
    protected function renderHeader()
    {
    }
    /**
     * Renders slow test report body.
     */
    protected function renderBody()
    {
    }
    /**
     * Renders slow test report footer.
     */
    protected function renderFooter()
    {
    }
    /**
     * Populate options into class internals.
     *
     * @param array $options
     */
    protected function loadOptions(array $options)
    {
    }
    /**
     * Get slow test threshold for given test. A TestCase can override the
     * suite-wide slow threshold by using the annotation @slowThreshold with
     * the threshold value in milliseconds.
     *
     * The following test will only be considered slow when its execution time
     * reaches 5000ms (5 seconds):
     *
     * <code>
     * @slowThreshold 5000
     * public function testLongRunningProcess() {}
     * </code>
     *
     * @param PHPUnit_Framework_TestCase $test
     * @return int
     */
    protected function getSlowThreshold(\PHPUnit_Framework_TestCase $test)
    {
    }
}
class Spy_REST_Server extends \WP_REST_Server
{
    public $sent_headers = array();
    public $sent_body = '';
    public $last_request = \null;
    public $override_by_default = \false;
    /**
     * Get the raw $endpoints data from the server
     *
     * @return array
     */
    public function get_raw_endpoint_data()
    {
    }
    /**
     * Allow calling protected methods from tests
     *
     * @param string $method Method to call
     * @param array $args Arguments to pass to the method
     * @return mixed
     */
    public function __call($method, $args)
    {
    }
    public function send_header($header, $value)
    {
    }
    /**
     * Override the dispatch method so we can get a handle on the request object.
     *
     * @param  WP_REST_Request $request
     * @return WP_REST_Response Response returned by the callback.
     */
    public function dispatch($request)
    {
    }
    /**
     * Override the register_route method so we can re-register routes internally if needed.
     *
     * @param string $namespace  Namespace.
     * @param string $route      The REST route.
     * @param array  $route_args Route arguments.
     * @param bool   $override   Optional. Whether the route should be overridden if it already exists.
     *                           Default false. Also set $GLOBALS['wp_rest_server']->override_by_default = true
     *                           to set overrides when you don't have access to the caller context.
     */
    public function register_route($namespace, $route, $route_args, $override = \false)
    {
    }
    public function serve_request($path = \null)
    {
    }
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
class WP_UnitTestCase extends \PHPUnit_Framework_TestCase
{
    protected static $forced_tickets = array();
    protected $expected_deprecated = array();
    protected $caught_deprecated = array();
    protected $expected_doing_it_wrong = array();
    protected $caught_doing_it_wrong = array();
    protected static $hooks_saved = array();
    protected static $ignore_files;
    function __isset($name)
    {
    }
    function __get($name)
    {
    }
    protected static function factory()
    {
    }
    public static function get_called_class()
    {
    }
    public static function setUpBeforeClass()
    {
    }
    public static function tearDownAfterClass()
    {
    }
    function setUp()
    {
    }
    /**
     * Detect post-test failure conditions.
     *
     * We use this method to detect expectedDeprecated and expectedIncorrectUsage annotations.
     *
     * @since 4.2.0
     */
    protected function assertPostConditions()
    {
    }
    /**
     * After a test method runs, reset any state in WordPress the test method might have changed.
     */
    function tearDown()
    {
    }
    function clean_up_global_scope()
    {
    }
    /**
     * Allow tests to be skipped on some automated runs
     *
     * For test runs on Travis for something other than trunk/master 
     * we want to skip tests that only need to run for master.
     */
    public function skipOnAutomatedBranches()
    {
    }
    /**
     * Unregister existing post types and register defaults.
     *
     * Run before each test in order to clean up the global scope, in case
     * a test forgets to unregister a post type on its own, or fails before
     * it has a chance to do so.
     */
    protected function reset_post_types()
    {
    }
    /**
     * Unregister existing taxonomies and register defaults.
     *
     * Run before each test in order to clean up the global scope, in case
     * a test forgets to unregister a taxonomy on its own, or fails before
     * it has a chance to do so.
     */
    protected function reset_taxonomies()
    {
    }
    /**
     * Unregister non-built-in post statuses.
     */
    protected function reset_post_statuses()
    {
    }
    /**
     * Reset `$_SERVER` variables
     */
    protected function reset__SERVER()
    {
    }
    /**
     * Saves the action and filter-related globals so they can be restored later.
     *
     * Stores $merged_filters, $wp_actions, $wp_current_filter, and $wp_filter
     * on a class variable so they can be restored on tearDown() using _restore_hooks().
     *
     * @global array $merged_filters
     * @global array $wp_actions
     * @global array $wp_current_filter
     * @global array $wp_filter
     * @return void
     */
    protected function _backup_hooks()
    {
    }
    /**
     * Restores the hook-related globals to their state at setUp()
     * so that future tests aren't affected by hooks set during this last test.
     *
     * @global array $merged_filters
     * @global array $wp_actions
     * @global array $wp_current_filter
     * @global array $wp_filter
     * @return void
     */
    protected function _restore_hooks()
    {
    }
    static function flush_cache()
    {
    }
    function start_transaction()
    {
    }
    /**
     * Commit the queries in a transaction.
     *
     * @since 4.1.0
     */
    public static function commit_transaction()
    {
    }
    function _create_temporary_tables($query)
    {
    }
    function _drop_temporary_tables($query)
    {
    }
    function get_wp_die_handler($handler)
    {
    }
    function wp_die_handler($message)
    {
    }
    function expectDeprecated()
    {
    }
    function expectedDeprecated()
    {
    }
    /**
     * Declare an expected `_deprecated_function()` or `_deprecated_argument()` call from within a test.
     *
     * @since 4.2.0
     *
     * @param string $deprecated Name of the function, method, class, or argument that is deprecated. Must match
     *                           first parameter of the `_deprecated_function()` or `_deprecated_argument()` call.
     */
    public function setExpectedDeprecated($deprecated)
    {
    }
    /**
     * Declare an expected `_doing_it_wrong()` call from within a test.
     *
     * @since 4.2.0
     *
     * @param string $deprecated Name of the function, method, or class that appears in the first argument of the
     *                           source `_doing_it_wrong()` call.
     */
    public function setExpectedIncorrectUsage($doing_it_wrong)
    {
    }
    function deprecated_function_run($function)
    {
    }
    function doing_it_wrong_run($function)
    {
    }
    function assertWPError($actual, $message = '')
    {
    }
    function assertNotWPError($actual, $message = '')
    {
    }
    function assertEqualFields($object, $fields)
    {
    }
    function assertDiscardWhitespace($expected, $actual)
    {
    }
    function assertEqualSets($expected, $actual)
    {
    }
    function assertEqualSetsWithIndex($expected, $actual)
    {
    }
    /**
     * Asserts that a condition is not false.
     *
     * @param bool   $condition
     * @param string $message
     *
     * @throws PHPUnit_Framework_AssertionFailedError
     */
    public static function assertNotFalse($condition, $message = '')
    {
    }
    /**
     * Modify WordPress's query internals as if a given URL has been requested.
     *
     * @param string $url The URL for the request.
     */
    function go_to($url)
    {
    }
    protected function checkRequirements()
    {
    }
    /**
     * Skips the current test if there is an open WordPress ticket with id $ticket_id
     */
    function knownWPBug($ticket_id)
    {
    }
    /**
     * Skips the current test if there is an open unit tests ticket with id $ticket_id
     */
    function knownUTBug($ticket_id)
    {
    }
    /**
     * Skips the current test if there is an open plugin ticket with id $ticket_id
     */
    function knownPluginBug($ticket_id)
    {
    }
    public static function forceTicket($ticket)
    {
    }
    /**
     * Define constants after including files.
     */
    function prepareTemplate(\Text_Template $template)
    {
    }
    /**
     * Returns the name of a temporary file
     */
    function temp_filename()
    {
    }
    /**
     * Check each of the WP_Query is_* functions/properties against expected boolean value.
     *
     * Any properties that are listed by name as parameters will be expected to be true; any others are
     * expected to be false. For example, assertQueryTrue('is_single', 'is_feed') means is_single()
     * and is_feed() must be true and everything else must be false to pass.
     *
     * @param string $prop,... Any number of WP_Query properties that are expected to be true for the current request.
     */
    function assertQueryTrue()
    {
    }
    function unlink($file)
    {
    }
    function rmdir($path)
    {
    }
    function remove_added_uploads()
    {
    }
    function files_in_dir($dir)
    {
    }
    function scan_user_uploads()
    {
    }
    function delete_folders($path)
    {
    }
    function scandir($dir)
    {
    }
    /**
     * Helper to Convert a microtime string into a float
     */
    protected function _microtime_to_float($microtime)
    {
    }
    /**
     * Multisite-agnostic way to delete a user from the database.
     *
     * @since 4.3.0
     */
    public static function delete_user($user_id)
    {
    }
    /**
     * Utility method that resets permalinks and flushes rewrites.
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
    function _make_attachment($upload, $parent_post_id = 0)
    {
    }
}
/**
 * Ajax test cases
 *
 * @package    WordPress
 * @subpackage UnitTests
 * @since      3.4.0
 */
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
     * Last AJAX response.  This is set via echo -or- wp_die.
     * @var string
     */
    protected $_last_response = '';
    /**
     * List of ajax actions called via POST
     * @var array
     */
    protected static $_core_actions_get = array('fetch-list', 'ajax-tag-search', 'wp-compression-test', 'imgedit-preview', 'oembed-cache', 'autocomplete-user', 'dashboard-widgets', 'logged-in');
    /**
     * Saved error reporting level
     * @var int
     */
    protected $_error_level = 0;
    /**
     * List of ajax actions called via GET
     * @var array
     */
    protected static $_core_actions_post = array('oembed_cache', 'image-editor', 'delete-comment', 'delete-tag', 'delete-link', 'delete-meta', 'delete-post', 'trash-post', 'untrash-post', 'delete-page', 'dim-comment', 'add-link-category', 'add-tag', 'get-tagcloud', 'get-comments', 'replyto-comment', 'edit-comment', 'add-menu-item', 'add-meta', 'add-user', 'closed-postboxes', 'hidden-columns', 'update-welcome-panel', 'menu-get-metabox', 'wp-link-ajax', 'menu-locations-save', 'menu-quick-search', 'meta-box-order', 'get-permalink', 'sample-permalink', 'inline-save', 'inline-save-tax', 'find_posts', 'widgets-order', 'save-widget', 'set-post-thumbnail', 'date_format', 'time_format', 'wp-fullscreen-save-post', 'wp-remove-post-lock', 'dismiss-wp-pointer', 'send-attachment-to-editor', 'heartbeat', 'nopriv_heartbeat', 'get-revision-diffs', 'save-user-color-scheme', 'update-widget', 'query-themes', 'parse-embed', 'set-attachment-thumbnail', 'parse-media-shortcode', 'destroy-sessions', 'install-plugin', 'update-plugin', 'press-this-save-post', 'press-this-add-category', 'crop-image', 'generate-password', 'save-wporg-username', 'delete-plugin', 'search-plugins', 'search-install-plugins', 'activate-plugin', 'update-theme', 'delete-theme', 'install-theme', 'get-post-thumbnail-html');
    public static function setUpBeforeClass()
    {
    }
    /**
     * Set up the test fixture.
     * Override wp_die(), pretend to be ajax, and suppres E_WARNINGs
     */
    public function setUp()
    {
    }
    /**
     * Tear down the test fixture.
     * Reset $_POST, remove the wp_die() override, restore error reporting
     */
    public function tearDown()
    {
    }
    /**
     * Clear login cookies, unset the current user
     */
    public function logout()
    {
    }
    /**
     * Return our callback handler
     * @return callback
     */
    public function getDieHandler()
    {
    }
    /**
     * Handler for wp_die()
     * Save the output for analysis, stop execution by throwing an exception.
     * Error conditions (no output, just die) will throw <code>WPAjaxDieStopException( $message )</code>
     * You can test for this with:
     * <code>
     * $this->setExpectedException( 'WPAjaxDieStopException', 'something contained in $message' );
     * </code>
     * Normal program termination (wp_die called at then end of output) will throw <code>WPAjaxDieContinueException( $message )</code>
     * You can test for this with:
     * <code>
     * $this->setExpectedException( 'WPAjaxDieContinueException', 'something contained in $message' );
     * </code>
     * @param string $message
     */
    public function dieHandler($message)
    {
    }
    /**
     * Switch between user roles
     * E.g. administrator, editor, author, contributor, subscriber
     * @param string $role
     */
    protected function _setRole($role)
    {
    }
    /**
     * Mimic the ajax handling of admin-ajax.php
     * Capture the output via output buffering, and if there is any, store
     * it in $this->_last_response.
     * @param string $action
     */
    protected function _handleAjax($action)
    {
    }
    /**
     * PHPUnit 6+ compatibility shim.
     *
     * @param mixed      $exception
     * @param string     $message
     * @param int|string $code
     */
    public function setExpectedException($exception, $message = '', $code = \null)
    {
    }
}
class WP_Canonical_UnitTestCase extends \WP_UnitTestCase
{
    static $old_current_user;
    static $author_id;
    static $post_ids = array();
    static $comment_ids = array();
    static $term_ids = array();
    static $terms = array();
    static $old_options = array();
    /**
     * This can be defined in a subclass of this class which contains its own data() method.
     * Those tests will be run against the specified permastruct.
     */
    public $structure = '/%year%/%monthnum%/%day%/%postname%/';
    public static function wpSetUpBeforeClass($factory)
    {
    }
    public static function wpTearDownAfterClass()
    {
    }
    public function setUp()
    {
    }
    /**
     * Generate fixtures to be shared between canonical tests.
     *
     * Abstracted here because it's invoked by setUpBeforeClass() in more than one class.
     *
     * @since 4.1.0
     */
    public static function generate_shared_fixtures($factory)
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
    public function setUp()
    {
    }
    public function tearDown()
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
class WP_XMLRPC_UnitTestCase extends \WP_UnitTestCase
{
    protected $myxmlrpcserver;
    function setUp()
    {
    }
    function tearDown()
    {
    }
    protected function make_user_by_role($role)
    {
    }
}
class TracTickets
{
    /**
     * When open tickets for a Trac install is requested, the results are stored here.
     *
     * @var array
     */
    protected static $trac_ticket_cache = array();
    /**
     * Checks if track ticket #$ticket_id is resolved
     *
     * @return bool|null true if the ticket is resolved, false if not resolved, null on error
     */
    public static function isTracTicketClosed($trac_url, $ticket_id)
    {
    }
    public static function usingLocalCache()
    {
    }
    public static function forcingKnownBugs()
    {
    }
}
// helper class for testing code that involves actions and filters
// typical use:
// $ma = new MockAction();
// add_action('foo', array(&$ma, 'action'));
class MockAction
{
    var $events;
    var $debug;
    /**
     * PHP5 constructor.
     */
    function __construct($debug = 0)
    {
    }
    function reset()
    {
    }
    function current_filter()
    {
    }
    function action($arg)
    {
    }
    function action2($arg)
    {
    }
    function filter($arg)
    {
    }
    function filter2($arg)
    {
    }
    function filter_append($arg)
    {
    }
    function filterall($tag, $arg = \NULL)
    {
    }
    // return a list of all the actions, tags and args
    function get_events()
    {
    }
    // return a count of the number of times the action was called since the last reset
    function get_call_count($tag = '')
    {
    }
    // return an array of the tags that triggered calls to this action
    function get_tags()
    {
    }
    // return an array of args passed in calls to this action
    function get_args()
    {
    }
}
// convert valid xml to an array tree structure
// kinda lame but it works with a default php 4 install
class testXMLParser
{
    var $xml;
    var $data = array();
    /**
     * PHP5 constructor.
     */
    function __construct($in)
    {
    }
    function parse($in)
    {
    }
    function startHandler($parser, $name, $attributes)
    {
    }
    function dataHandler($parser, $data)
    {
    }
    function endHandler($parser, $name)
    {
    }
}
/**
 * Use to create objects by yourself
 */
class MockClass
{
}
/**
 * Special class for exposing protected wpdb methods we need to access
 */
class wpdb_exposed_methods_for_testing extends \wpdb
{
    public function __construct()
    {
    }
    public function __call($name, $arguments)
    {
    }
}
/*
A simple manually-instrumented profiler for WordPress.
This records basic execution time, and a summary of the actions and SQL queries run within each block.
start() and stop() must be called in pairs, for example:
function something_to_profile() {
	wppf_start(__FUNCTION__);
	do_stuff();
	wppf_stop();
}
Multiple profile blocks are permitted, and they may be nested.
*/
class WPProfiler
{
    var $stack;
    var $profile;
    /**
     * PHP5 constructor.
     */
    function __construct()
    {
    }
    function start($name)
    {
    }
    function stop()
    {
    }
    function microtime($since = 0.0)
    {
    }
    function log_filter($tag)
    {
    }
    function log_action($tag)
    {
    }
    function _current_action()
    {
    }
    function results()
    {
    }
    function _query_summary($queries, &$out)
    {
    }
    function _query_count($queries)
    {
    }
    function _dirty_objects_count($dirty_objects)
    {
    }
    function array_add($a, $b)
    {
    }
    function array_sub($a, $b)
    {
    }
    function print_summary()
    {
    }
}
function wp_tests_options($value)
{
}
/**
 * Resets various `$_SERVER` variables that can get altered during tests.
 */
function tests_reset__SERVER()
{
}
// For adding hooks before loading WP
function tests_add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1)
{
}
function _test_filter_build_unique_id($tag, $function, $priority)
{
}
function _delete_all_data()
{
}
function _delete_all_posts()
{
}
function _wp_die_handler($message, $title = '', $args = array())
{
}
function _disable_wp_die()
{
}
function _enable_wp_die()
{
}
function _wp_die_handler_filter()
{
}
function _wp_die_handler_txt($message, $title, $args)
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
 */
function _upload_dir_no_subdir($uploads)
{
}
/**
 * Helper used with the `upload_dir` filter to set https upload URL.
 */
function _upload_dir_https($uploads)
{
}
/**
 * Helper method to return the global phpmailer instance defined in the bootstrap
 *
 * @since 4.4.0
 *
 * @return object|bool
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
// misc help functions and utilities
function rand_str($len = 32)
{
}
function rand_long_str($length)
{
}
// strip leading and trailing whitespace from each line in the string
function strip_ws($txt)
{
}
function xml_to_array($in)
{
}
function xml_find($tree)
{
}
function xml_join_atts($atts)
{
}
function xml_array_dumbdown(&$data)
{
}
function dmp()
{
}
function dmp_filter($a)
{
}
function get_echo($callable, $args = array())
{
}
// recursively generate some quick assertEquals tests based on an array
function gen_tests_array($name, $array)
{
}
/**
 * Drops all tables from the WordPress database
 */
function drop_tables()
{
}
function print_backtrace()
{
}
// mask out any input fields matching the given name
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