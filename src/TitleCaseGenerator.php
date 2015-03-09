<?php

class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
        $lowered_title = strtolower($input_title);
        $input_array_of_words = explode(" ", $lowered_title);
        $output_titlecased = array();
        $exclude = array("of", "the", "and", "as", "a", "in", "into", "an", "if", "iPod", "iTunes");
        $first_word = $input_array_of_words[0];
        $last_word = end($input_array_of_words);

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

        array_pop($output_titlecased);
        array_push($output_titlecased, ucfirst($last_word));

        return implode(" ", $output_titlecased);
    }
}
?>
