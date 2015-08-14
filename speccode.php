<?php

set_time_limit(0);

/**
 * Maciej Czerpiński
 * maciej@speccode.com
 * http://speccode.com
 * Poland
 *
 * Just for fun ;-)
 */

/**
 * Check if given number is a prime number
 *
 * @param  integer  $number
 * @return boolean
 */
function isPrime($number) {
    if ($number <= 1) {
        return false;
    } else if ($number <= 3) {
        return true;
    } else if ( !($number%2) || !($number%3) ) {
        return false;
    }

    for($i = 3; $i<=ceil(sqrt($number)); $i=$i+2) {
        if (!($number%$i)) {
            return false;
        }
    }

    return true;
}

/**
 * Who don't like beef, right?!
 * You can choose between first or n occurance of
 * beef that is prime number.
 * 
 * @param integer  $occurrence 
 */
function GiveMeBeef($occurrence=1) {
    $i=1;
    $current = 0;
    while (true) {
        if (strpos(dechex($i), 'beef') !== false && isPrime($i) === true) {
            $current++;
            if ($current === $occurrence) {
                return $i;
            }
        }
        $i++;
    }
}

//first beef
$beef = GiveMeBeef();
var_dump($beef, dechex($beef));

//beef number 444
$beef = GiveMeBeef(444);
var_dump($beef, dechex($beef));

