<?php

class TitleCaseGenerator
{

    function makeTitleCase($input_title)
    {
        $input_array_of_words = explode(" ", $input_title);
        $output_titlecased = array();
        $exclude = array("of", "the", "and", "as", "a", "an", "if");
        foreach ($input_array_of_words as $word) {
            if (in_array($word, $exclude)) {
                array_push($output_titlecased, $word);
            }
            else {
                array_push($output_titlecased, ucfirst($word));
            }
        }
        return implode(" ", $output_titlecased);
    }

}

?>
