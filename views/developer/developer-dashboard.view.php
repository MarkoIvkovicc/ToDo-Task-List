<div class="container m-auto">
    <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden my-4">
        <img class="w-full h-56 object-cover" src="app/Developer/img/developer_header.jpg" alt="avatar">
        <div class="flex items-center px-6 py-3 bg-teal-800 mb-5">
            <h2 class="text-3xl"></h2>
            <h1 class="mx-3 text-white font-semibold text-lg"> <?= ucfirst($user->name) ?>'s Tasks</h1>
        </div>
        <div class="py-4 px-6">
            <?php
            foreach ($user->tasks($user->id) as $task) {
            ?>
                <a href="/developerTask?id=<?= $task->id ?>">
                    <li class="flex justify-between p-2 bg-teal-600 hover:bg-teal-400 rounded-lg mb-5">
                        <div class="w-full">
                            <div class="text-center mb-2 text-white">
                                <h2>Title</h2>
                      
                            </div>
                            <div class="text-center bg-orange-500 p-3 rounded mx-5 text-white">
                                <?= $task->title ?>
                            </div>

                        </div>
                        <div class="w-full text-center mb-2 text-white">
                            <div class="mb-2">
                                <h2>Status</h2>
                    
                            </div>
                            <div class="text-center bg-orange-500 p-3 rounded mx-5">
                                <?= $task->completed ? 'Completed at ' . $task->completed_at : 'Incompleted' ?>
                            </div>
                        </div>
                        <div class="w-full text-center text-white">
                            <div class="mb-2">
                                <h2>Task Created</h2>
                              
                            </div>
                            <div class="text-center bg-orange-500 p-3 rounded mx-5 text-white">
                                <?= $task->created_at ?>
                            </div>
                        </div>

                    </li>
                </a>
            <?php
            }
            ?>
        </div>
    </div>
</div>