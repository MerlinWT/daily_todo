<?php
    /**
     * @var View $this
     *
     * @var array $list
     */
?>

<ul>
    <?php
        foreach ($list as $item) {
            $this->render('list/item', $item);
        }
    ?>
</ul>