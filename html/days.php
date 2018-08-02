<?php
    /**
     * @var View $this
     *
     * @var array $days_list
     * @var array $day_content
     */
?>

<div>
    <div id="days-list" style="display:inline-block; width: 120px;">
        <?php
            $this->render('list/index', ['list' => $days_list])
        ?>
    </div>
    <div id="day-content" style="display: inline-block; position: absolute; margin: 16px 16px 16px 140px; width: 100%;left: 0;">
        <?php $this->render('day_content', $day_content) ?>
    </div>
</div>