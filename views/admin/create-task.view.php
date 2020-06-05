<div class="container m-auto p-8">
    <form action="/createTaskBack" method="POST">
        <div class="mb-5">
            <label class="block mb-3" for="title">Title</label>
            <input class="w-full border p-3 rounded
                        focus:outline-none focus:bg-white focus:shadow-outline focus:border-green-300" type="text" name="title">
        </div>
        <div class="mb-5">
            <label class="block mb-3" for="description">Description</label>
            <textarea class="w-full border p-3 rounded
                        focus:outline-none focus:bg-white focus:shadow-outline focus:border-green-300" type="text" name="description" rows="15" cols="20"></textarea>
        </div>
        <div class="mb-5">
            <label class="block mb-3" for="user_id">Belongs to developer:</label>
            <select class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="user_id">
                <option value="" selected>Choose Developer</option>
                <?php
                foreach ($devUsers as $user) {
                ?>
                    <option value="<?= $user->id ?>"><?= $user->name ?></option>
                <?php
                }
                ?>
            </select>

        </div>
        <div>
            <button class=" w-full p-3 bg-green-700 hover:bg-green-500 rounded-lg text-white
                        transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-102
                        sm:mt-auto" type="submit">Create Task
                    </button>
        </div>
    </form>
</div>