<?php
namespace App\classes;

class Count
{
    public function wordCharacterCount($data){
        $stringlength= strlen($data['given_string']);
        $wordlength= str_word_count($data['given_string']);
        $result = [
            'string_length' =>$stringlength,
            'word_length' =>$wordlength
        ];
        return $result;
    }
}