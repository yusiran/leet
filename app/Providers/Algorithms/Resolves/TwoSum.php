<?php

namespace App\Providers\Algorithms\Resolves;

class TwoSum extends Resolve
{
    public function run()
    {
        $input = $this->request->input();
        $nums = $input['nums'] ?? [];
        $target = $input['target'] ?? 0;
        return $this->twoSum($nums, $target);
    }

    /**
     * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
     * 执行用时 :8 ms, 在所有 PHP 提交中击败了99.85% 的用户
     * 内存消耗 :16.3 MB, 在所有 PHP 提交中击败了5.26%的用户
     *
     * @param array $nums
     * @param       $target
     *
     * @return array
     */
    public function twoSum(array $nums, $target)
    {
        $count = count($nums);

        if ($count < 2) {
            return [];
        }

        $exists = [];
        for ($i = 0; $i < $count; ++$i) {
            $other = $target - $nums[$i];
            if (array_key_exists($other, $exists)) {
                return [$i, $exists[$other]];
            }
            $exists[$nums[$i]] = $i;
        }

        return [];
    }
}