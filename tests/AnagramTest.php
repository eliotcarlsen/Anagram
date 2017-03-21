<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function testOneWordTest()
        {
            $testOneWord = new Anagram("a");
            $input = array("a");

            $result = $testOneWord->anagramChecker($input);

            $this->assertEquals("a", $result);
        }
        function testTwoWordTest()
        {
            $testOneWord = new Anagram("eb");
            $input = array("be");

            $result = $testOneWord->anagramChecker($input);

            $this->assertEquals("be", $result);
        }
        function testMultipleWords()
        {
            $testOneWord = new Anagram("hello");
            $input = array("beans, are, so, good, ehllo");

            $result = $testOneWord->anagramChecker($input);

            $this->assertEquals("ehllo", $result);
        }


    }




?>
