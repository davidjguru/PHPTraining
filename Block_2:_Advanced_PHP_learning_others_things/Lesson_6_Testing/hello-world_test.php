<?php

// First at all, we go to take the file to test hello-world.php

require "hello-world.php";

/**
 * HelloWorldTest
 *
 * @author David Rodríguez <davidjguru@gmail.com>
 *
 */

class HelloWorldTest extends PHPUnit\Framework\TestCase
{


	/**
	 * Compare the result of the original function
	 *
	 *@return boolean
	 */

    public function testHelloWorld()
    {
        $this->assertEquals('Hello, World!', helloWorld());
    }
}
