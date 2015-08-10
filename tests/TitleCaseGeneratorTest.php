<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

//1. If given a single word, it should capitalize the word and return it.
//Input: topology
//Output:  Topology

        function test_makeTitleCase_oneword()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }

//2. If given a multiple word string it should capitalize every word in that string.
//Input: the product topology is useful
//Output: The Product Topology Is Useful

        function test_make_TitleCase_multipleWords()
        {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);

        }

//3. If given a string, it will capitalize all words except words the user designates for it not to.
//Input: the product topology is a topology
//Output: The Product Topology Is a Topology

        function test_make_TitleCase_DesignatedWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the product topology is a topology";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Product Topology Is a Topology", $result);
        }//end function


//4. If given a string it will only capitalize  the first word IF that word is designated by the user.
//Input: from sea to shining sea
//Output: From Sea to Shining Sea

        function test_makeFirstTitleCase_DesignatedWOrds()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "from sea to shining sea";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("From Sea to Shining Sea", $result);


        }

//5. if given a string it will not error if given a non-letter character
//Input: 45 ways to hit a baseball
//Output: 45 Ways to Hit a Baseball

    function test_errorOnNonLetterCharacter(){

        //Arrange
        $test_TitleCaseGenerator = new TitleCaseGenerator;
        $input = "45 ways to hit a baseball";

        //Act
        $result = $test_TitleCaseGenerator->makeTitleCase($input);

        //Assert
        $this->assertEquals("45 Ways to Hit a Baseball", $result);


    }


    }
?>
