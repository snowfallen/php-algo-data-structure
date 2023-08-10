# Sliding Window Algorithm with Detailed Example Walkthrough

The **Sliding Window Algorithm** is a clever technique used to solve various array-related problems, particularly those
involving subarrays. It optimizes computation by maintaining a "window" of fixed size over the array and sliding it as
needed. To better understand this algorithm, let's go through a detailed step-by-step example using the
array `[2, 1, 5, 1, 3, 2]` and a subarray size of `3`.

## Example Array and Parameters

Given array: `[2, 1, 5, 1, 3, 2]`
Subarray size: `3`

## Algorithm Steps

1. **Initialization**:
    - Initialize the variables:
        - `maxSum`: Maximum sum encountered in any subarray of size `3`.
        - `currentWindowSum`: Sum of elements within the current window.
        - `windowStart`: Starting index of the current window.

2. **First Window** (`[2, 1, 5]`):
    - Add the first three elements `[2, 1, 5]` to the `currentWindowSum`: `2 + 1 + 5 = 8`.
    - Update `maxSum` to the current `currentWindowSum` since it's the first window.

3. **Sliding the Window**:
    - Move the window to the right by removing the leftmost element `2` and adding the next element `1`:
        - New window: `[1, 5, 1]`
        - Update `currentWindowSum`: `8 - 2 + 1 = 7`
    - Update `maxSum` to `7`, which is still the largest sum encountered.

4. **Sliding Again**:
    - Move the window again:
        - New window: `[5, 1, 3]`
        - Update `currentWindowSum`: `7 - 1 + 3 = 9`
    - Update `maxSum` to `9`, which is now the largest sum.

5. **Sliding Further**:
    - Slide the window again:
        - New window: `[1, 3, 2]`
        - Update `currentWindowSum`: `9 - 5 + 2 = 6`
    - No need to update `maxSum` as it's still `9`.

6. **Window Completed**:
    - The window has covered the entire array, and we have computed the maximum sum of `9` for a subarray of size `3`.

7. **Function Return**:
    - Return `maxSum`, which is `9`.

## Time Complexity

The time complexity of the Sliding Window Algorithm is mainly determined by the loop that iterates through the array. In
this case, we are iterating through the entire array once. Let's denote the length of the input array as `n` and the
size of the subarray as `k`.

1. The loop iterates from index `0` to index `n - 1`, performing constant-time operations inside the loop.
2. Within the loop, we perform addition and subtraction operations for the `currentWindowSum` and update the `maxSum`.
   These operations take constant time as well.

Overall, the time complexity of the algorithm is O(n), where `n` is the length of the input array.

## Space Complexity

The space complexity of the algorithm is determined by the additional variables used for computation, which remain
constant regardless of the input size.

1. `maxSum`, `currentWindowSum`, and `windowStart` are used to store integer values, so they occupy constant space.
2. The loop variable `i` is also constant space.
3. No additional data structures are used that depend on the input size.

As a result, the space complexity of the algorithm is O(1), indicating constant space usage regardless of the input
size.

- Time Complexity: O(n) - Linear time complexity, where `n` is the length of the input array.
- Space Complexity: O(1) - Constant space complexity, as the amount of memory used does not depend on the input size.


## Conclusion

The Sliding Window Algorithm efficiently solved the problem of finding the maximum sum within a subarray of size `3` in
the given array `[2, 1, 5, 1, 3, 2]`. By iteratively sliding the window and updating the sums, we were able to optimize
the computation and find the desired maximum sum. This algorithm is particularly useful for similar array-based
challenges, reducing redundant calculations and improving overall efficiency.