<?php
/**
 * @var View $this
 *
 * @var int $year
 * @var int $month
 * @var int $day
 */

    $title = $this->getDayTitle($year, $month, $day);
    $id = $this->getDayId($year, $month, $day);
?>

<li>
    <a href="#<?= $id ?>"><?= $title ?></a>
</li>