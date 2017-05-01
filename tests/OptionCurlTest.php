<?php

class OptionCurlTest extends PHPUnit_Framework_TestCase
{
    protected static $fixturesPath;

    public static function setUpBeforeClass()
    {
        static::$fixturesPath = __DIR__.'/Fixtures';
        require_once static::$fixturesPath.'/Option/TestFailOptionType.php';
        require_once static::$fixturesPath.'/Option/TestFalOptionListOne.php';
        require_once static::$fixturesPath.'/Option/TestFalOptionListTwo.php';
    }

    public function testNewClassSuccess()
    {
        $clases = [
            "array"=> "PhpTools\LibCurl\Core\Option\ArrayOption",
            "bool"=> "PhpTools\LibCurl\Core\Option\BoolOption",
            "callable"=> "PhpTools\LibCurl\Core\Option\CallableOption",
            "int"=> "PhpTools\LibCurl\Core\Option\IntOption",
            "resource"=> "PhpTools\LibCurl\Core\Option\ResourceOption",
            "string"=> "PhpTools\LibCurl\Core\Option\StringOption",
        ];

        foreach ($clases as $type => $class) {
            $object = new $class;
            $this->assertInstanceOf($class, $object);
            $this->assertEquals($type, $object->getType());
            $this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_ARRAY, $object->getOptions());

            foreach ($object->getOptions() as $option) {
                $this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_INT, $option);
            }
        }
    }

    public function testArrayOptionSuccess()
    {
        $class = new PhpTools\LibCurl\Core\Option\ArrayOption;
        $this->assertTrue($class->hasOption(CURLOPT_HTTPHEADER));
        $this->assertTrue($class->hasOption(CURLOPT_QUOTE));
        $this->assertFalse($class->hasOption(CURLOPT_FAILONERROR));
        $this->assertFalse($class->hasOption(CURLOPT_FILETIME));
        $this->assertTrue($class->validate(CURLOPT_HTTPHEADER, []));
        $this->assertTrue($class->validate(CURLOPT_QUOTE, []));
        $this->assertFalse($class->validate(CURLOPT_HTTPHEADER, ''));
        $this->assertFalse($class->validate(CURLOPT_QUOTE, ''));
    }

    /**
     * @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     */
    public function testArrayOptionFailValidate()
    {
        $class = new PhpTools\LibCurl\Core\Option\ArrayOption;
        $class->validate(CURLOPT_FAILONERROR, []);
    }

    public function testBoolOptionSuccess()
    {
        $class = new PhpTools\LibCurl\Core\Option\BoolOption;
        $this->assertTrue($class->hasOption(CURLOPT_FAILONERROR));
        $this->assertTrue($class->hasOption(CURLOPT_FILETIME));
        $this->assertFalse($class->hasOption(CURLOPT_HTTPHEADER));
        $this->assertFalse($class->hasOption(CURLOPT_QUOTE));
        $this->assertTrue($class->validate(CURLOPT_FAILONERROR, true));
        $this->assertTrue($class->validate(CURLOPT_FILETIME, false));
        $this->assertFalse($class->validate(CURLOPT_FAILONERROR, ''));
        $this->assertFalse($class->validate(CURLOPT_FILETIME, ''));
    }

    /**
     * @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     */
    public function testBoolOptionFailValidate()
    {
        $class = new PhpTools\LibCurl\Core\Option\BoolOption;
        $class->validate(CURLOPT_HTTPHEADER, true);
    }

    public function testCallableOptionSuccess()
    {
        $class = new PhpTools\LibCurl\Core\Option\CallableOption;
        $this->assertTrue($class->hasOption(CURLOPT_HEADERFUNCTION));
        $this->assertTrue($class->hasOption(CURLOPT_PROGRESSFUNCTION));
        $this->assertFalse($class->hasOption(CURLOPT_HTTPHEADER));
        $this->assertFalse($class->hasOption(CURLOPT_QUOTE));
        $this->assertTrue($class->validate(CURLOPT_HEADERFUNCTION, function () {
        }));
        $this->assertTrue($class->validate(CURLOPT_PROGRESSFUNCTION, function () {
        }));
        $this->assertFalse($class->validate(CURLOPT_HEADERFUNCTION, ''));
        $this->assertFalse($class->validate(CURLOPT_PROGRESSFUNCTION, ''));
    }

    /**
     * @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     */
    public function testCallableOptionFailValidate()
    {
        $class = new PhpTools\LibCurl\Core\Option\CallableOption;
        $class->validate(CURLOPT_HTTPHEADER, function () {
        });
    }

    public function testIntOptionSuccess()
    {
        $class = new PhpTools\LibCurl\Core\Option\IntOption;
        $this->assertTrue($class->hasOption(CURLOPT_MAXREDIRS));
        $this->assertTrue($class->hasOption(CURLOPT_PORT));
        $this->assertFalse($class->hasOption(CURLOPT_HTTPHEADER));
        $this->assertFalse($class->hasOption(CURLOPT_QUOTE));
        $this->assertTrue($class->validate(CURLOPT_MAXREDIRS, 12));
        $this->assertTrue($class->validate(CURLOPT_PORT, 88));
        $this->assertFalse($class->validate(CURLOPT_MAXREDIRS, ''));
        $this->assertFalse($class->validate(CURLOPT_PORT, ''));
    }

    /**
     * @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     */
    public function testIntOptionFailValidate()
    {
        $class = new PhpTools\LibCurl\Core\Option\IntOption;
        $class->validate(CURLOPT_HTTPHEADER, 1);
    }

    public function testResourceOptionSuccess()
    {
        $dir = opendir('.');
        $class = new PhpTools\LibCurl\Core\Option\ResourceOption;
        $this->assertTrue($class->hasOption(CURLOPT_FILE));
        $this->assertTrue($class->hasOption(CURLOPT_INFILE));
        $this->assertFalse($class->hasOption(CURLOPT_HTTPHEADER));
        $this->assertFalse($class->hasOption(CURLOPT_QUOTE));
        $this->assertTrue($class->validate(CURLOPT_FILE, $dir));
        $this->assertTrue($class->validate(CURLOPT_INFILE, $dir));
        $this->assertFalse($class->validate(CURLOPT_FILE, ''));
        $this->assertFalse($class->validate(CURLOPT_INFILE, ''));
    }

    /**
     * @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     */
    public function testResourceOptionFailValidate()
    {
        $class = new PhpTools\LibCurl\Core\Option\ResourceOption;
        $class->validate(CURLOPT_HTTPHEADER, 1);
    }

    public function testStringOptionSuccess()
    {
        $class = new PhpTools\LibCurl\Core\Option\StringOption;
        $this->assertTrue($class->hasOption(CURLOPT_COOKIE));
        $this->assertTrue($class->hasOption(CURLOPT_COOKIEFILE));
        $this->assertFalse($class->hasOption(CURLOPT_HTTPHEADER));
        $this->assertFalse($class->hasOption(CURLOPT_QUOTE));
        $this->assertTrue($class->validate(CURLOPT_COOKIE, ''));
        $this->assertTrue($class->validate(CURLOPT_COOKIEFILE, ''));
        $this->assertFalse($class->validate(CURLOPT_COOKIE, 12));
        $this->assertFalse($class->validate(CURLOPT_COOKIEFILE, 12));
    }

    /**
     * @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     */
    public function testStringOptionFailValidate()
    {
        $class = new PhpTools\LibCurl\Core\Option\StringOption;
        $class->validate(CURLOPT_HTTPHEADER, 1);
    }

    public function testOptionServiceSuccess()
    {
        $dir = opendir('.');
        $class = new PhpTools\LibCurl\Core\Option\OptionService;
        $this->assertTrue($class->validateOption(CURLOPT_HTTPHEADER, []));
        $this->assertTrue($class->validateOption(CURLOPT_QUOTE, []));
        $this->assertTrue($class->validateOption(CURLOPT_FAILONERROR, true));
        $this->assertTrue($class->validateOption(CURLOPT_FILETIME, false));
        $this->assertTrue($class->validateOption(CURLOPT_HEADERFUNCTION, function () {
        }));
        $this->assertTrue($class->validateOption(CURLOPT_PROGRESSFUNCTION, function () {
        }));
        $this->assertTrue($class->validateOption(CURLOPT_MAXREDIRS, 12));
        $this->assertTrue($class->validateOption(CURLOPT_PORT, 88));
        $this->assertTrue($class->validateOption(CURLOPT_FILE, $dir));
        $this->assertTrue($class->validateOption(CURLOPT_INFILE, $dir));
        $this->assertTrue($class->validateOption(CURLOPT_COOKIE, ''));
        $this->assertTrue($class->validateOption(CURLOPT_COOKIEFILE, ''));

        $this->assertFalse($class->validateOption(CURLOPT_HTTPHEADER, ''));
        $this->assertFalse($class->validateOption(CURLOPT_QUOTE, ''));
        $this->assertFalse($class->validateOption(CURLOPT_FAILONERROR, ''));
        $this->assertFalse($class->validateOption(CURLOPT_FILETIME, ''));
        $this->assertFalse($class->validateOption(CURLOPT_HEADERFUNCTION, ''));
        $this->assertFalse($class->validateOption(CURLOPT_PROGRESSFUNCTION, ''));
        $this->assertFalse($class->validateOption(CURLOPT_MAXREDIRS, ''));
        $this->assertFalse($class->validateOption(CURLOPT_PORT, ''));
        $this->assertFalse($class->validateOption(CURLOPT_FILE, ''));
        $this->assertFalse($class->validateOption(CURLOPT_INFILE, ''));
        $this->assertFalse($class->validateOption(CURLOPT_COOKIE, 12));
        $this->assertFalse($class->validateOption(CURLOPT_COOKIEFILE, 12));

    }

    /**
     * @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     */
    public function testOptionServiceFailValidate()
    {
        $class = new PhpTools\LibCurl\Core\Option\OptionService;
        var_dump($class->validateOption(10101010101, 1));
    }

    /**
     *  @expectedException \PhpTools\LibCurl\API\Exception\InvalidCurlOptionTypeException
     */
    public function testFailOptionType()
    {
        $class = new TestFailOptionType();
    }

    /**
     *  @expectedException PhpTools\LibCurl\API\Exception\InvalidCurlOptionListException
     */
    public function testFailOptionListOne()
    {
        $class = new TestFalOptionListOne();
    }
    /**
     *  @expectedException PhpTools\LibCurl\API\Exception\InvalidCurlOptionListException
     */
    public function testFailOptionListTwo()
    {
        $class = new TestFalOptionListTwo();
    }
}
