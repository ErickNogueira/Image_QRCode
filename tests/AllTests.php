<?php
/**
 * QRCode_AllTests
 *
 * @category  Images
 * @package   Image_QRCode
 * @author    Rich Sage <rich.sage@gmail.com>
 * @copyright 2009 Rich Sage
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @link      http://code.google.com/p/pearqrcode
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'QRCode_AllTests::main');
}

require_once 'Image/QRCode.php';
require_once 'Image/QRCodeTest.php';

/**
 * All tests for Image_QRCode
 *
 * @category  Images
 * @package   Image_QRCode
 * @author    Rich Sage <rich.sage@gmail.com>
 * @copyright 2009 Rich Sage
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @link      http://code.google.com/p/pearqrcode
 */
class QRCode_AllTests extends \PHPUnit\Framework\TestSuite
{
    public static function main()
    {
        \PHPUnit\TextUI\TestRunner::run(self::suite());
    }

    /**
     * suite
     *
     * @return \PHPUnit\Framework\TestSuite
     */
    static public function suite()
    {
        $suite = new \PHPUnit\Framework\TestSuite('Image_QRCode Unit Test Suite');
        $suite->addTestSuite('Image_QRCodeTest');
        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'QRCode_AllTests::main') {
    QRCode_AllTests::main();
}
