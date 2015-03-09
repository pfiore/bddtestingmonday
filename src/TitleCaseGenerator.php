<?php

class TitleCaseGenerator
{

    function makeTitleCase($input_title)
    {
        $input_array_of_words = explode(" ", $input_title);
        $output_titlecased = array();
        $exclude = array("of", "the", "and", "as", "a", "an", "if");
        $first_word = $input_array_of_words[0];

        array_push($output_titlecased, ucfirst($first_word));
        array_shift($input_array_of_words);

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
