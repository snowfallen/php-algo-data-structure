<?php

namespace PhpAlgoDataStructure\Algorithm\SlidingWindowAlgorithm;

class SlidingWindow
{
    /**
     * @param int[] $numbers
     * @param int $subarraySize
     * @return int
     */
    final public function getMaxSubarraySum(array $numbers, int $subarraySize): int
    {
        $maxSum = 0;
        $currentWindowSum = 0;
        $windowStart = 0;
        $numbersLength = count($numbers);

        for ($numberIndex = 0; $numberIndex < $numbersLength; $numberIndex++) {
            $currentWindowSum += $numbers[$numberIndex];
            if ($numberIndex - $windowStart + 1 === $subarraySize) {
                $maxSum = max($maxSum, $currentWindowSum);
                $currentWindowSum -= $numbers[$windowStart];
                $windowStart++;
            }
        }

        return $maxSum;
    }
}
