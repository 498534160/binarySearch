<?php

declare(strict_types = 1);

namespace yumo;

class BinarySearch
{
    //循环查找
    public function search1(array $arr, int $num): int
    {
        $min = 0;
        $max = count($arr);
        while ($min <= $max) {
            $mid = intval(floor($max + $min) / 2);
            if ($arr[$mid] > $num) {
                $max = --$mid;
            } elseif ($arr[$mid] < $num) {
                $min = ++$mid;
            } else {
                return $mid;
            }
        }
    }

    //递归查找
    public function search2(array $arr, int $num, int $min, int $max): int
    {
        $mid = intval(floor($max + $min) / 2);
        if ($arr[$mid] > $num) {
            $max = --$mid;
        } elseif ($arr[$mid] < $num) {
            $min = ++$mid;
        } else {
            return $mid;
        }
        return $this->search2($arr, $num, $min, $max);
    }
}