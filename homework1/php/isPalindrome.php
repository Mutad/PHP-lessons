<?php

function IsPalindrome(string $word)
{
    //lowetcase all word
    $word = strtolower($word);

    //start cycle with iteration from end and from start
    for ($i=0, $j = strlen($word)-1; $i < strlen($word) / 2; $i++, $j--) {

        //skip spaces
        if($word[$i] == " ")
        {
            $j++;
            continue;
        }
        if($word[$j] == " ")
        {
            $i--;
            continue;
        }

        echo "check ".$word[$i].'<br>';

        //check if char from start is same as character from end
        if ($word[$i] != $word[$j])
            return false;
    }

    return true;
}

// check if value is empty
if (empty($_GET['word']))
  echo 'string is empty';
else
  {
    $word = $_GET['word'];
    if (IsPalindrome($word))
        echo("This is a palindrome");
    else
        echo("This isn't a palindrome");
  }
