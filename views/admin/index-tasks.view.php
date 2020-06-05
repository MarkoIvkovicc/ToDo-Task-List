<div class="container m-auto">
    <?php foreach ($tasks as $task) {
        $taskOwner = $taskOwner->show($task->user_id);
    ?>
        <div class="flex justify-bewtween bg-green-400 rounded-lg p-3 mb-5 hover:bg-green-300">
            <div class="w-full m-auto">
                <p> <a href="showTask?id=<?= $task->id ?>"><?= $task->title ?></a> </p>
            </div>
            <div class="w-full m-auto text-right">
                <p><?= $taskOwner->name ?></p>
            </div>
        </div>
    <?php
    }
    ?>
</div>