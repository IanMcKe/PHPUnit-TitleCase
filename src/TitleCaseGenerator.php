<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $non_caps_words = array('A','An');

            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_of_words as $word) {
                if ($word != $input_array_of_words[0]){

                    $word = mb_convert_case($word, MB_CASE_TITLE);
                    if (in_array($word, $non_caps_words)) {
                        $word = strtolower($word);
                    }

                    array_push($output_titlecased, $word);

                }else{
                    array_push($output_titlecased, ucfirst($word));
                }//End else
            }//End foreach

            return implode(" ", $output_titlecased);
        }
    }
?>
