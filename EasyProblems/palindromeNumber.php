<?php
/* Question: Given an integer x, return true if x is palindrome integer.
An integer is a palindrome when it reads the same backward as forward.
For example, 121 is a palindrome while 123 is not.*/

// Answer:

function isPalindrome($x) {
   return strrev($x)==$x;

// Description: reverse the string and then compare it with its real value
 }
?>