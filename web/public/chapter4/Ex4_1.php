<?php
declare(strict_types=1);
$execute_class = new Ex4_1();
print $execute_class->getEvaluation(78);

class Ex4_1
{
    function getEvaluation(int $point): string
    {
        if ($point >= 90) {
            return '優';
        } else if ($point >= 70) {
            return '良';
        } else if ($point >= 50) {
            return '可';
        } else {
            return '不可';
        }
    }
}