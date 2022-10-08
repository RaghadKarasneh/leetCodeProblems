<?php
class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     
     */
    const starChar = "*";
    const dotChar = ".";
    function isMatch($s, $p) {
    
         if (!$p) {
            return !$s;
        }
        // Comparing $s variable with the first char in $p variable: if $s has a value && $p[0] is '.' then $matchFirstChar=true;
        $matchFirstChar= $s && ($s[0] === $p[0] || self::dotChar === $p[0]);
        
        // Check if $p[1] has a value && its value = * 
        $matchSecondChar = !empty($p[1]) && $p[1] == self::starChar;

        if (!$matchFirstChar&& !$matchSecondChar) {
            return false;
        }

        if ($matchSecondChar) {
            // Return true if matchFirstChar is trure && the first $s char is match $p variable OR if $s variable is match second $p Char
            return ($matchFirstChar&& $this->isMatch(substr($s, 1), $p)) || $this->isMatch($s, substr($p, 2));
        }
        // Return True if the matchFirstChar is true && the first char in $p and $s are match
        return $matchFirstChar&& $this->isMatch(substr($s, 1), substr($p, 1));
    }
}
?>