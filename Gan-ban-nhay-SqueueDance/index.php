<?php

include_once "Dancer.php";


$dancerMale = new SplQueue();
$dancerFemale = new SplQueue();

$dancerMale->enqueue(new Dancer(Nam,Male));
$dancerMale->enqueue(new Dancer(Luc,Male));
$dancerMale->enqueue(new Dancer(Tiep,Male));
$dancerMale->enqueue(new Dancer(Hoang,Male));

$dancerFemale->enqueue(new Dancer(Ha,Female));
$dancerFemale->enqueue(new Dancer(Dung,Female));
$dancerFemale->enqueue(new Dancer(Xuan,Female));

$couple = [];
$male_wait = [];
$female_wait = [];

while (!$dancerMale->isEmpty() || !$dancerFemale->isEmpty()) {
    if ($dancerFemale->isEmpty()) {
        $male_wait[] = $dancerMale->dequeue()->name;
    } elseif ($dancerMale->isEmpty()) {
        $female_wait[] = $dancerFemale->dequeue()->name;
    } else {
        $couple[] = $dancerFemale->dequeue()->name . " + " . $dancerMale->dequeue()->name;
    }
}

echo "<pre>";
echo "Cặp đôi:" . "<br>";
print_r($couple);
echo "hàng đợi Nam:" . "<br>";
print_r($male_wait);
echo "hàng đợi Nữ:" . "<br>";
print_r($female_wait);



