<?php
    class Anagram {
        public $input_word;

        function __construct ($word) {
            $this->input_word = $word;
        }

        function anagramChecker($list_of_words){
            $new_array = array ();
            $second_array = array ();
            $input_array = str_split($this->input_word);
            sort($input_array);
            foreach ($input_array as $letter){
                array_push($new_array, $letter);
            }

            foreach ($list_of_words as $word) {
                $check_array = str_split($word);
                sort($check_array);

                foreach ($check_array as $letters){
                  array_push($second_array, $letters);
                  if ($second_array === $new_array){
                      return implode($second_array);
                  }
                }
            }

        }


    }

?>
