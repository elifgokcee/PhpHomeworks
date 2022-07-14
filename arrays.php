<?php
//Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden dizi oluşturan bir fonksiyon yazın.
// (array_map(), array_filter() ve array_rand() fonksiyonlarını kullanarak.)
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];




function generateArray($array, $count)
{
    $filterArray = array_filter($array);
    $randomIndexesArray = array_rand($filterArray, $count);
    $resultArray = array_map(function ($e) use ($filterArray) {
        return $filterArray[$e];
    }, $randomIndexesArray);
    return $resultArray;
};
print_r(generateArray($planets, 3));
print_r(generateArray($planets, 7));