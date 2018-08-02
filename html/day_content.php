<?php
    /**
     * @var View $this
     * @var string $id
     * @var array $tasks_list
     */
?>

<div>
    <h1><?= $id ?></h1>
    <p>Summary report</p>
    <div>
        <?php
            if ($tasks_list) {
	            $this->render('list/index', ['list' => $tasks_list]);
            } else {
	            $this->render('message', ['text' => 'No tasks']);
            }
        ?>
    </div>
</div>