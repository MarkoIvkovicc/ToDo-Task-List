<div class="container m-auto w-1/3">
    <?php foreach ($notes as $note) {
    ?>
        <div class="flex justify-bewtween bg-green-300 rounded-lg p-3 mb-5 hover:bg-teal-400 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-102 sm:mt-auto">
            <div class="mr-4 absolute right-0">
                <p>
                    <?php $username = $qb->getUserById($note->user_id); echo array_shift($username)->name; ?>
                </p>
            </div>
            <div class="w-full m-auto">
                <p><?= $note->text ?></p>
            </div>
        </div>

        <!-- Edit Button -->
        <?php if ($_SESSION['user_id'] == $note->user_id) { ?>
            <div class="mb-3 inline-block">
                <form action="updateNote?id=<?= $note->id ?>">
                    <input type="hidden" name="id" value="<?= $note->id ?>">
                    <button class="w-30 shadow bg-yellow-400 hover:bg-red-600 focus:shadow-outline focus:outline-none hover:text-white  text-gray-800 font-bold py-2 px-4 rounded" type="submit">Edit</button>
                </form>
            </div>
        <?php } ?>

        <!-- Delete Button -->
        <?php if ($logedUser->id == $currentTask->user_id || $policy->isAdmin($logedUser)) { ?>
            <div class="inline-block">
                <form action="deleteNote?id=<?= $note->id ?>" method="POST">
                    <input type="hidden" name="method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $note->id ?>">
                    <button class="w-30 shadow bg-orange-600 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Delete</button>
                </form>
            </div>
        <?php } ?>
    <?php
    }
    ?>
</div>