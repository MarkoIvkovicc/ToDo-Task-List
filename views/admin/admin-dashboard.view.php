<div class="container m-auto">
    <div class="flex p-8">
        <div class="w-1/2">
            <h1 class="text-3xl mb-16">New Users Waiting for Approval</h1>
            <ul>
                <?php
                foreach ($newUsers as $newUser) {
                ?>
                    <a href="updateUser?id=<?= $newUser->id ?>" class="hover:underline">
                        <li class="text-xl flex justify-between mb-3">
                            <div>
                                <?= $newUser->name ?>
                            </div>
                            <div>
                                Registered on:    
                            <span>  <?= $newUser->created_at ?></span>
                            </div>

                        </li>
                    </a>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="w-1/2">

        </div>
    </div>
</div>