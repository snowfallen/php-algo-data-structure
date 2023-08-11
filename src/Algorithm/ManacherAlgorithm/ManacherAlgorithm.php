<?php

namespace PhpAlgoDataStructure\Algorithm\ManacherAlgorithm;

class ManacherAlgorithm
{
    /**
     * @param string $input
     * @return string
     */
    final public function transformString(string $input): string
    {
        $transformed = '#';
        for ($i = 0; $i < strlen($input); $i++) {
            $transformed .= $input[$i] . '#';
        }

        return $transformed;
    }

    /**
     * @param string $input
     * @return string
     */
    final public function longestPalindrome(string $input): string
    {
        $transformed = $this->transformString($input);
        $maxLen = 0;
        $center = 0;
        $maxCenter = 0;
        $maxPalindromeLen = 0;
        $palindromeLengths = array_fill(0, strlen($transformed), 0);

        for ($i = 0; $i < strlen($transformed); $i++) {
            if ($i < $maxLen) {
                $mirror = 2 * $center - $i;
                $palindromeLen = min($maxLen - $i, $palindromeLengths[$mirror]);
            } else {
                $palindromeLen = 0;
            }

            $left = $i - ($palindromeLen + 1);
            $right = $i + ($palindromeLen + 1);
            while ($left >= 0 && $right < strlen($transformed) && $transformed[$left] === $transformed[$right]) {
                $palindromeLen++;
                $left--;
                $right++;
            }

            $palindromeLengths[$i] = $palindromeLen;
            if ($i + $palindromeLen > $maxLen) {
                $maxLen = $i + $palindromeLen;
                $center = $i;
            }

            if ($palindromeLen > $maxPalindromeLen) {
                $maxPalindromeLen = $palindromeLen;
                $maxCenter = $i;
            }
        }

        $start = ($maxCenter - $maxPalindromeLen) / 2;
        $length = $maxPalindromeLen;

        return substr($input, $start, $length);
    }
}
