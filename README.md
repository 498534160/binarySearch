# binarySearch

#安装 

composer require yumo/binarysearch

#如何使用

$arr = [1,2,3,4,5];

$obj = new BinarySearch();

$obj->search1($arr, 2); // 循环查找

$obj->search2($arr, 2, 0,count($arr)); // 递归查找