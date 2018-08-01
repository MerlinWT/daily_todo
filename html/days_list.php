<?php
    /**
     * @var View $this
     *
     * @var array $days_list
     */
?>

<ul>
    <?php
        foreach ($days_list as $day) {
            $this->render('day_item', $day);
        }
    ?>
</ul>