<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>
      <?php

      // DIE AND DUMP
      function dd($you_suck_bro) {
        echo '<pre>';
        var_dump($you_suck_bro);
        echo '</pre>';
      }



      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers. Return your answer as a number.

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function sum_mix($a) {
      //   $total = 0;
      //   foreach($a as $num) {
      //   $total += (int)$num;
      //   }
      //   return $total;
      // }

      //******************** REFACTORED

      // function sum_mix($a) {
      //   return array_sum($a);
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // $arr = array(9,3,'7','3');
      // $arr2 = array('5', '0', 9, 3, 2, 1, '9', 6, 7);
      // sum_mix($arr2);










      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // When provided with a number between 0-9, return it in words.
      // Input :: 1
      // Output :: "One".
      // Try using "Switch" statements.

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function switch_it_up($number) {
      //   switch ($number) {
      //     case 0:
      //         return 'Zero';
      //         break;
      //     case 1:
      //         return 'One';
      //         break;
      //     case 2:
      //         return 'Two';
      //         break;
      //     case 3:
      //         return 'Three';
      //         break;
      //     case 4:
      //         return 'Four';
      //         break;
      //     case 5:
      //         return 'Five';
      //         break;
      //     case 6:
      //         return 'Six';
      //         break;
      //     case 7:
      //         return 'Seven';
      //         break;
      //     case 8:
      //         return 'Eight';
      //         break;
      //     case 9:
      //         return 'Nine';
      //         break;
      //     default:
      //   }
      // }

      //******************** REFACTORED

      // function switch_it_up($number) {
      //   switch ($number) {
      //     case 0: return 'Zero';
      //     case 1: return 'One';
      //     case 2: return 'Two';
      //     case 3: return 'Three';
      //     case 4: return 'Four';
      //     case 5: return 'Five';
      //     case 6: return 'Six';
      //     case 7: return 'Seven';
      //     case 8: return 'Eight';
      //     default: return 'Nine';
      //   }
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // switch_it_up(1);












      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Remove n exclamation marks in the sentence from left to right. n is positive integer.

      // EXAMPLE
      // remove("Hi!",1) === "Hi"
      // remove("Hi!",100) === "Hi"
      // remove("Hi!!!",1) === "Hi!!"
      // remove("Hi!!!",100) === "Hi"

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function remove(string $s, int $n): string {
      //   $str_to_arr = str_split($s);
      //   $counter = 0;
      //
      //   foreach($str_to_arr as $key => $letter) {
      //     if ($counter >= $n) {
      //       break;
      //     }
      //     if ($letter == '!') {
      //       unset($str_to_arr[$key]);
      //       $counter++;
      //     }
      //     else {
      //     }
      //   }
      //
      //   $parsed_str = join('', $str_to_arr);
      //   return $parsed_str;
      // }

      //******************** REFACTORED

      // function remove(string $s, int $n): string {
      //   return preg_replace('/!/', "", $s, $n);
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // remove("Hi!!!!", 1);
      // remove("Hi!", 100);
      // remove("Hi!!!", 1);











      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // This is the first step to understanding FizzBuzz.
      //
      // Your inputs: a positive integer, n, greater than or equal to one. n is provided, you have NO CONTROL over its value.
      //
      // Your expected outputs: an array of positive integers from 1 to n
      //
      // Your job is to write an algorithm that gets you from the input to the output.

      // EXAMPLE
      // pre_fizz(1); OUTPUT [1]
      // pre_fizz(2); OUTPUT [1,2]
      // pre_fizz(3); OUTPUT [1,2,3]

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function pre_fizz($n) {
      //   $fizz_arr = [];
      //   for ($i = 1; $i <= $n; $i++) {
      //     array_push($fizz_arr, $i);
      //   }
      //   return $fizz_arr;
      // }

      //******************** REFACTORED

      // function pre_fizz(int $n): array {
      //   return range(1, $n);
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // pre_fizz(1);
      // pre_fizz(2);
      // pre_fizz(3);












      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // This is the first step to understanding FizzBuzz.
      //
      // Your inputs: a positive integer, n, greater than or equal to one. n is provided, you have NO CONTROL over its value.
      //
      // Your expected outputs: an array of positive integers from 1 to n
      //
      // Your job is to write an algorithm that gets you from the input to the output.

      // EXAMPLE
      // pre_fizz(1); OUTPUT [1]
      // pre_fizz(2); OUTPUT [1,2]
      // pre_fizz(3); OUTPUT [1,2,3]

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function pre_fizz($n) {
      //   $fizz_arr = [];
      //   for ($i = 1; $i <= $n; $i++) {
      //     array_push($fizz_arr, $i);
      //   }
      //   return $fizz_arr;
      // }

      //******************** REFACTORED

      // function pre_fizz(int $n): array {
      //   return range(1, $n);
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // pre_fizz(1);
      // pre_fizz(2);
      // pre_fizz(3);















      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of cells and carries the "instructions" for the development and functioning of living organisms.
      //
      // If you want to know more http://en.wikipedia.org/wiki/DNA
      //
      // In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". You have function with one side of the DNA (string, except for Haskell); you need to get the other complementary side. DNA strand is never empty or there is no DNA at all (again, except for Haskell).

      // EXAMPLE
      // DNA_strand("ATTGC") // returns "TAACG"
      // DNA_strand("GTAT") // returns "CATA"

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function DNA_strand($dna) {
      //   $dna_arr = str_split($dna);
      //   $dna_pair_arr = [];
      //
      //   foreach ($dna_arr as $key => $letter) {
      //     if ($letter == 'A') {
      //       array_push($dna_pair_arr, 'T');
      //     }
      //     else if ($letter == 'T') {
      //       array_push($dna_pair_arr, 'A');
      //     }
      //     else if ($letter == 'G') {
      //       array_push($dna_pair_arr, 'C');
      //     }
      //     else {
      //       array_push($dna_pair_arr, 'G');
      //     }
      //   }
      //   $dna_pair_str = join('', $dna_pair_arr);
      //   return $dna_pair_str;
      // }

      //******************** REFACTORED

      // function DNA_strand($dna) {
      //   // Replace 'A' with 't'
      //   $dna = str_replace("A", "t", $dna);
      //
      //   // Replace 'T' with 'a'
      //   $dna = str_replace("T", "a", $dna);
      //
      //   // Replace 'C' with 'g'
      //   $dna = str_replace("C", "g", $dna);
      //
      //   // Replace 'G' with 'c'
      //   $dna = str_replace("G", "c", $dna);
      //
      //   // Return $dna as uppercase
      //   return strtoupper($dna);
      // }



      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // DNA_strand("AAAA");
      // DNA_strand("TTTT");
      // DNA_strand("ATTGC");
















      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Given an array, find the int that appears an odd number of times.
      //
      // There will always be only one integer that appears an odd number of times.

      // EXAMPLE
      // findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5])) // returns 5
      // findIt([10]) // returns 10

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function findIt(array $sequence) : int {
      //   // Count numbers in array;
      //   $arr_count = array_count_values($sequence);
      //
      //   // If the key is not even return that key
      //   foreach ($arr_count as $key => $single_count) {
      //     if ($single_count % 2 != 0) {
      //       return $key;
      //     }
      //   }
      // }

      //******************** REFACTORED





      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);
      // findIt([10]);
      // findIt([1,1,1,1,1,1,10,1,1,1,1]);












      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // In this simple Kata your task is to create a function that turns a string into a Mexican Wave. You will be passed a string and you must return that string in an array where an uppercase letter is a person standing up.

      // 1.  The input string will always be lower case but maybe empty.
      //
      // 2.  If the character in the string is whitespace then pass over it as if it was an empty seat.

      // EXAMPLE

      // wave("hello") => ["Hello", "hEllo", "heLlo", "helLo", "hellO"]

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function wave($people){
      //
      //   // split passed in people string as an array.
      //   $people_str_to_arr = str_split($people);
      //   $wave_arr = [];
      //   $trash = [];
      //   $counter = 0;
      //
      //   // Checks if passed in empty string.  If it is return an empty array.
      //   if(strlen($people) == 0) {
      //     return [];
      //   }
      //
      //   foreach ($people_str_to_arr as $letter) {
      //     // parse $people string, start at the first index, parse $counter - string length of $people.  This will return beginning of word.
      //     $front = substr($people, 0, $counter - strlen($people));
      //     // parse $people string, start at $counter, parse string length of people. Returns end of word.
      //     $end = substr($people, $counter, strlen($people));
      //
      //     // Concat front and end while capitalizing the first letter on the end string.
      //     $wave_str = $front . ucfirst($end);
      //
      //     // If there is a space between letters, push to trash array.
      //     if ($letter == ' ') {
      //       array_push($trash, $wave_str);
      //     // push concat word to new wave array and return it.
      //     } else {
      //       array_push($wave_arr, $wave_str);
      //     }
      //     $counter += 1;
      //   }
      //   return($wave_arr);
      // }
      //
      // // wave("hello") => ["Hello", "hEllo", "heLlo", "helLo", "hellO"]

      //******************** REFACTORED


      // function wave($people){
      //   $result = [];
      //
      //   for($i = 0; $i < strlen($people); $i++) {
      //     if(ctype_space($people[$i])) continue;
      //     $result[] = substr_replace($people, strtoupper($people[$i]), $i, 1);
      //   }
      //   return $result;
      // }





      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // wave("hello");
      // wave("two words");
      // wave("");
      // wave(" gap ");
      // wave('iqyo twzcehn');






















      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Count the number of exclamation marks and question marks, return the product.

      // EXAMPLE

      // Product("") == 0
      // product("!") == 0
      // Product("!ab? ?") == 2
      // Product("!!") == 0
      // Product("!??") == 2
      // Product("!???") == 3
      // Product("!!!??") == 6
      // Product("!!!???") == 9
      // Product("!???!!") == 9
      // Product("!????!!!?") == 20

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////

      // function product(string $s): int {
      //   $parsed = preg_replace('/[^!?"\']/', '', $s);
      //   $exclamation = (int)substr_count($parsed, '!');
      //   $question = (int)substr_count($parsed, '?');
      //
      //   return $exclamation * $question;
      // }


      //******************** REFACTORED


      // function product(string $s): int {
      //   return substr_count($s, '!')*substr_count($s, '?');
      // }


      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // product("");  // 0
      // product("!");  // 0
      // product("!!");  // 0
      // Product("!ab? ?"); // 1 * 2 = 2
      // product("!??"); // 2
      // product("!!!???"); // 3 * 3 = 9













      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // In Russia regular bus tickets usually consist of 6 digits. The ticket is called lucky when the sum of the first three digits equals to the sum of the last three digits. Write a function to find out whether the ticket is lucky or not. Return true if so, otherwise return false. Consider that input is always a string. Watch examples below.

      // EXAMPLE

      // isLucky('123321') => 1+2+3 = 3+2+1 => true // The ticket is lucky
      // isLucky('12341234') => false // Only six-digit numbers allowed :(
      // isLucky('12a21a') => false // Letters are not allowed :(
      // isLucky('100200') => false // :(
      // isLucky('22') => false // :(
      // isLucky('abcdef') => false // :(

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function isLucky($ticket){
      //   $first = array_sum(str_split((int)substr($ticket, 0, 3)));
      //   $last = array_sum(str_split((int)substr($ticket, 3, 3)));
      //
      //   if (preg_match("/[a-zA-Z]/i", $ticket) || strlen($ticket) < 6 || strlen($ticket) > 6) {
      //     return false;
      //   }
      //   elseif ($first == $last) {
      //     return true;
      //   }
      //   else {
      //     return false;
      //   }
      // }


      //******************** REFACTORED

      // function isLucky($ticket)
      // {
      //   if (! is_numeric($ticket) || strlen($ticket) != 6) {
      //     return false;
      //   }
      //
      //   $arr1 = str_split(substr($ticket, 0, 3));
      //   $arr2 = str_split(substr($ticket, 3));
      //
      //   return array_sum($arr1) == array_sum($arr2);
      // }


      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // isLucky('123321'); // true
      // isLucky('100001'); // true
      // isLucky('12341234'); // false
      // isLucky('100200'); // false
      // isLucky('12a12a'); // false
      // isLucky(''); // false
      // isLucky('22222222'); // false
      // isLucky('22'); // false









      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Write a function generateIntegers/generate_integers that accepts a single argument n/$n and generates an array containing the integers from 0 to n/$n inclusive.
      // n/$n can be any integer greater than or equal to 0.

      // EXAMPLE

      // For example, generateIntegers(3)/generate_integers(3) should return [0, 1, 2, 3].


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      function generate_integers(int $n): array {
        return range(0, $n);
      }


      //******************** REFACTORED




      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      generate_integers(3); // [0,1,2,3];












      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////


      // Return an output string that translates an input string s/$s by replacing each character in s/$s with a number representing the number of times that character occurs in s/$s and separating each number with the character(s) sep/$sep.


      // EXAMPLE

      // freq_seq("hello world", "-"); // => "1-1-3-3-2-1-1-2-1-3-1"
      // freq_seq("19999999", ":"); // => "1:7:7:7:7:7:7:7"
      // freq_seq("^^^**$", "x"); // => "3x3x3x2x2x1"


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function freq_seq(string $s, string $sep): string {
      //   $s = str_split($s);
      //   $dict = array_count_values($s);
      //   return join($sep, array_map(function ($char) use ($dict) {
      //     return $dict[$char];
      //   }, $s));
      // }

      //loop through hello world and assign count_chars number to each letter.


      //******************** REFACTORED




      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // freq_seq("hello world", "-"); // "1-1-3-3-2-1-1-2-1-3-1"








      //////////////////////////
      /////  INSTRUCTIONS //////    ******** NOT SOLVED********
      /////////////////////////

      // The function chooseBestSum (or choose_best_sum or ... depending on the language) will take as parameters t (maximum sum of distances, integer >= 0), k (number of towns to visit, k >= 1) and ls (list of distances, all distances are positive or null integers and this list has at least one element). The function returns the "best" sum ie the biggest possible sum of k distances less than or equal to the given limit t, if that sum exists, or otherwise nil, null, None, Nothing, depending on the language. With C++, C, Rust, Swift, Go return -1.

      // EXAMPLE

      // ts = [50, 55, 56, 57, 58] choose_best_sum(163, 3, ts) -> 163
      // ^ Must use 3 distances from the array, must return distance that is the greatest number but less than 163.

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function chooseBestSum($t, $k, $ls) {
      //   $sorted_array = $ls;
      //   asort($sorted_array);
      //   dd($sorted_array);
      //
      //   for ($x = 0; $x <= 3; $x++) {
      //
      //   }
      //
      // }


      //******************** REFACTORED

      // $ts = [50, 55, 56, 57, 58];
      // chooseBestSum(163, 3, $ts); // 163

      // $ts = [50];
      // chooseBestSum(163, 3, $ts); // null
      //
      // $ts = [91, 74, 73, 85, 73, 81, 87];
      // chooseBestSum(230, 3, $ts); // 228


      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************














      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // You will be given an array of objects (associative arrays in PHP) representing data about developers who have signed up to attend the next coding meetup that you are organising.
      //
      // Your task is to return:
      //
      // true if all of the following continents / geographic zones will be represented by at least one developer: 'Africa', 'Americas', 'Asia', 'Europe', 'Oceania'.
      // false otherwise.

      // EXAMPLE


    //   $list1 = [
    //   [
    //     "first_name" => "Fatima",
    //     "last_name" => "A.",
    //     "country" => "Algeria",
    //     "continent" => "Africa",
    //     "age" => 25,
    //     "language" => "JavaScript"
    //   ],
    //   [
    //     "first_name" => "Agustin",
    //     "last_name" => "M.",
    //     "country" => "Chile",
    //     "continent" => "Americas",
    //     "age" => 37,
    //     "language" => "C"
    //   ],
    //   [
    //     "first_name" => "Jing",
    //     "last_name" => "X",
    //     "country" => "China",
    //     "continent" => "Asia",
    //     "age" => 39,
    //     "language" => "Ruby"
    //   ],
    //   [
    //     "first_name" => "Laia",
    //     "last_name" => "P.",
    //     "country" => "Andorra",
    //     "continent" => "Europe",
    //     "age" => 55,
    //     "language" => "Ruby"
    //   ],
    //   [
    //     "first_name" => "Oliver",
    //     "last_name" => "Q.",
    //     "country" => "Australia",
    //     "continent" => "Oceania",
    //     "age" => 65,
    //     "language" => "PHP"
    //   ]
    // ];
    // RETURNS TRUE;

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function all_continents(array $a): bool {
      //   $continents = [];
      //
      //   foreach ($a as $key => $value) {
      //     array_push($continents, $value['continent']);
      //   }
      //   if (
      //     in_array('Africa', $continents, True) &&
      //     in_array('Americas', $continents, True) &&
      //     in_array('Asia', $continents, True) &&
      //     in_array('Europe', $continents, True) &&
      //     in_array('Oceania', $continents, True)
      //     )
      //   {
      //     return true;
      //   }
      //   else
      //   {
      //     return false;
      //   }
      // }


      //******************** REFACTORED

      // function all_continents(array $a): bool {
      //   $result = [];
      //   foreach($a as $user){
      //       $result[$user['continent']] = true;
      //   }
      //   return count($result) == 5;
      // }


      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

    //   $list1 = [
    //   [
    //     "first_name" => "Fatima",
    //     "last_name" => "A.",
    //     "country" => "Algeria",
    //     "continent" => "Africa",
    //     "age" => 25,
    //     "language" => "JavaScript"
    //   ],
    //   [
    //     "first_name" => "Agustin",
    //     "last_name" => "M.",
    //     "country" => "Chile",
    //     "continent" => "Americas",
    //     "age" => 37,
    //     "language" => "C"
    //   ],
    //   [
    //     "first_name" => "Jing",
    //     "last_name" => "X",
    //     "country" => "China",
    //     "continent" => "Asia",
    //     "age" => 39,
    //     "language" => "Ruby"
    //   ],
    //   [
    //     "first_name" => "Laia",
    //     "last_name" => "P.",
    //     "country" => "Andorra",
    //     "continent" => "Europe",
    //     "age" => 55,
    //     "language" => "Ruby"
    //   ],
    //   [
    //     "first_name" => "Oliver",
    //     "last_name" => "Q.",
    //     "country" => "Australia",
    //     "continent" => "Oceania",
    //     "age" => 65,
    //     "language" => "PHP"
    //   ]
    // ];
    // all_continents($list1); //true;


      //////////////////////////
      /////  INSTRUCTIONS //////    ******** NOT SOLVED ********
      /////////////////////////

      // Everyone knows passphrases. One can choose passphrases from poems, songs, movies names and so on but frequently they can be guessed due to common cultural references. You can get your passphrases stronger by different means. One is the following:
      //
      // choose a text in capital letters including or not digits and non alphabetic characters,
      //
      // shift each letter by a given number but the transformed letter must be a letter (circular shift),
      // replace each digit by its complement to 9,
      // keep such as non alphabetic and non digit characters,
      // downcase each letter in odd position, upcase each letter in even position (the first character is in position 0),
      // reverse the whole result.

      // EXAMPLE

      // your text: "BORN IN 2015!", shift 1
      //
      // 1 + 2 + 3 -> "CPSO JO 7984!"
      //
      // 4 "CpSo jO 7984!"
      //
      // 5 "!4897 Oj oSpC"

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function playPass($s, $n) {
      //
      //
      //     $arr_inc_letters = [];
      //
      //     for ($i=0; $i < strlen($s); $i++) {
      //       if ($s[$i] == ' ' || $s[$i] == '!') {
      //         array_push($arr_inc_letters, $s[$i]);
      //       }
      //       else if (is_numeric($s[$i])) {
      //         array_push($arr_inc_letters, $s[$i]);
      //       }
      //       else if ($s[$i] == 'Y') {
      //         for ($char = 'A'; $char <= 'Z'; $char++) {
      //           echo $char . "\n";
      //         }
      //         array_push($arr_inc_letters, "A");
      //       }
      //       else {
      //         $arr_range = range($s[$i], 'Z', $n);
      //         array_push($arr_inc_letters, join('', array_slice($arr_range, 1, 1)));
      //       }
      //     }

          // Step 1: Each Alpha char skip to next in alphabet by Shift number. Shift 1: A becomes B, D Becomes E, etc.
          // Numbers: Subtract number by 9.  9 - 2 = 7; 9-0=9, etc.

          // Step 2: lowercase letters in odd index, uppercase in even index.

          // Step 3: reverse string
          // dd($arr_inc_letters);
      // }


      //******************** REFACTORED




      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // playPass("I LOVE YOU!!!", 1); // "!!!vPz fWpM J"
      // playPass("I LOVE YOU!!!", 0); // "!!!vPz fWpM J"
      // playPass("AAABBCCY", 1); // "zDdCcBbB"
      // playPass("MY GRANMA CAME FROM NY ON THE 23RD OF APRIL 2015", 2); // "4897 NkTrC Hq fT67 GjV Pq aP OqTh gOcE CoPcTi aO")










      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////


      // EXAMPLE




      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////





      //******************** REFACTORED




      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************














      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Write simple .camelcase method (camel_case function in PHP) for strings. All words must have their first letter capitalized without spaces.

      // EXAMPLE

      // camel_case("hello case"); // => "HelloCase"
      // camel_case("camel case word"); // => "CamelCaseWord"


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function camel_case(string $s): string {
      //   return str_replace(' ', '', ucwords($s));
      // }


      //******************** REFACTORED




      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // camel_case("hello case"); // => "HelloCase"
      // camel_case("camel case word"); // => "CamelCaseWord"











      //////////////////////////
      /////  INSTRUCTIONS //////    ********NOT SOLVED********
      /////////////////////////


      // EXAMPLE

      // $c = new CaesarCipher(5);
      // $c->encode('Codewars'); // returns 'HTIJBFWX'
      // $c->decode('BFKKQJX'); // returns 'WAFFLES'


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // class CaesarCipher {
      //   public $c;
      //   public function encode() {
      //     echo $this->c;
      //   }
      //   public function decode() {
      //     echo $this->c;
      //   }
      // }
      //******************** REFACTORED




      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // $c = new CaesarCipher(5);
      // $c->encode('Codewars'); // returns 'HTIJBFWX'
      // $c->decode('BFKKQJX'); // returns 'WAFFLES'










      //////////////////////////
      /////  INSTRUCTIONS //////    ********NOT SOLVED********
      /////////////////////////

      // An ATM ran out of 10 dollar bills and only has 100, 50 and 20 dollar bills.
      //
      // Given an amount between 40 and 10000 dollars (inclusive) and assuming that the ATM wants to use as few bills as possible, determinate the minimal number of 100, 50 and 20 dollar bills the ATM needs to dispense (in that order).

      // EXAMPLE

      // For n = 250, the result should be [2, 1, 0].
      //
      // For n = 260, the result should be [2, 0, 3].
      //
      // For n = 370, the result should be [3, 1, 1].


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function withdraw($n){
      //   $hundred = 0;
      //   $fifty = 0;
      //   $twenty = 0;
      //   if ($n < 100 && $n >= 50) {
      //     $n -= 50;
      //     $fifty++;
      //     echo 'fifty';
      //     withdraw($n);
      //   }
      //   elseif ($n < 100 && $n >= 80) {
      //     $n -= 20;
      //     $twenty++;
      //     echo 'twenty';
      //     withdraw($n);
      //   }
      //   elseif ($n == 0) {
      //     echo $n;
      //     echo $hundred;
      //     echo $fifty;
      //     return $n;
      //   }
      //   else {
      //     $n -= 100;
      //     $hundred++;
      //     echo 'hundred';
      //     withdraw($n);
      //   }
      // }


      // function withdraw($n){
      //   $arr_money = array(0,0,0);
      //
      //   while ($n >= 0) {
      //     if ($n >= 100) {
      //       $n -= 100;
      //       $arr_money[0] += 1;
      //     }
      //     elseif ($n % 20 != 0 && $n < 100 && $n > 0) {
      //       $n -= 50;
      //       $arr_money[1] += 1;
      //     }
      //     else {
      //       $n -= 20;
      //       $arr_money[2] += 1;
      //     }
      //   }
      //   dd($arr_money);
      //   return $arr_money;
      // }



      //******************** REFACTORED


      // function withdraw($n){
      //   $result = [0, 0, 0];
      //   $amount = $n;
      //   while($amount != 0){
      //     if($amount >= 100 && ($amount - 100) % 20 == 0){
      //       $amount = $amount - 100;
      //       $result[0]++;
      //     }
      //     else if ($amount >= 50 && ($amount - 50) % 20 == 0){
      //       $amount = $amount - 50;
      //       $result[1]++;
      //     }
      //     else{
      //       $amount = $amount - 20;
      //       $result[2]++;
      //     }
      //   }
      //   return $result;
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // withdraw(250); // [2, 1, 0]
      // withdraw(260); // [2, 0, 3]
      // withdraw(370); // [3, 1, 1]
      // withdraw(230); // [1,1,4]
      // withdraw(7210); // [71,1,3]









      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // An Arithmetic Progression is defined as one in which there is a constant difference between the consecutive terms of a given series of numbers. You are provided with consecutive elements of an Arithmetic Progression. There is however one hitch: Exactly one term from the original series is missing from the set of numbers which have been given to you. The rest of the given series is the same as the original AP. Find the missing term.
      //
      // You have to write the function findMissing (list) , list will always be atleast 3 numbers. The missing term will never be the first or last one.



      // EXAMPLE

      // findMissing([1,3,5,9,11]) == 7


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function findMissing($list) {
      //   $first = $list[0];
      //   $last = end($list);
      //   $list_count = count($list);
      //   $sequence = ($last - $first) / $list_count;
      //   $full_seq = [];
      //
      //   if ($sequence > 0) {
      //     for ($i=$first; $i <= $last; $i += $sequence) {
      //       array_push($full_seq, $i);
      //     }
      //   }
      //   else {
      //     for ($i=$first; $i >= $last; $i += $sequence) {
      //       array_push($full_seq, $i);
      //     }
      //   }
      //
      //   $result = (int)join('', array_diff($full_seq, $list));
      //   return $result;
      // }


      //******************** REFACTORED

      // function findMissing($list) {
      //   $increment = (end($list)-$list[0])/count($list);
      //   for($i=0;$i<count($list)-1;$i++){
      //     if($list[$i]+$increment != $list[$i+1]){
      //       return $list[$i]+$increment;
      //     }
      //   }
      //   return $list[0];
      // }


      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // findMissing([1, 2, 3, 5]); // 4
      // findMissing([1, 3, 5, 9, 11]); //7
      // findMissing([100, 200, 300, 500]); // 400
      // findMissing([13, 10, 4]); // 4









      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////

      // Write a method that takes an array of consecutive (increasing) letters as input and that returns the missing letter in the array.
      //
      // You will always get an valid array. And it will be always exactly one letter be missing. The length of the array will always be at least 2.
      // The array will always contain letters in only one case.



      // EXAMPLE

      // ['a','b','c','d','f'] -> 'e'
      // ['O','Q','R','S'] -> 'P'


      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function find_missing_letter(array $array): string {
      //   $letters = [];
      //   $ascii_array = [];
      //
      //   foreach ($array as $key => $value) {
      //     array_push($ascii_array, ord($value));
      //   }
      //   for ($char = ord($array[0]); $char <= ord(end($array)); $char++) {
      //       array_push($letters, $char);
      //   }
      //   $result = chr(implode('', array_diff($letters, $ascii_array)));
      //   return $result;
      // }


      //******************** REFACTORED

      // function find_missing_letter(array $array): string {
      //   $alphabet = range($array[0], $array[count($array) - 1]);
      //
      //   return array_values(array_diff($alphabet, $array))[0];
      // }

      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // find_missing_letter(['a','b','c','d','f']); // 'e'
      // find_missing_letter(["O", "Q", "R", "S"]); // 'P'
      // find_missing_letter(['a','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']); // 'b'










      //////////////////////////
      /////  INSTRUCTIONS //////    ********SOLVED********
      /////////////////////////


      // Given the string representations of two integers, return the string representation of the sum of those integers.


      // EXAMPLE

      // sumStrings('1','2') // => '3'

      /////////////////////////
      /////    ANSWER    //////
      /////////////////////////


      // function sum_strings($a, $b) {
      //   $result = $a + $b;
      //   return $result;
      // }


      //******************** REFACTORED



      // ****************                         ********
      // ************ FUNCTION CALL & TESTING ************
      // ********                         ****************

      // sum_strings('123', '456'); //579
      // sum_strings('8797', '45'); //8842

      ?>
    </h1>
  </body>
</html>
