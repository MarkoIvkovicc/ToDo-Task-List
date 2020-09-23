<div class="container m-auto p-8 w-1/2">
    <form action="/updateNoteBack" method="POST">
        <input type="hidden" name="noteId" value="<?= $_GET['id']; ?>">
        <input type="hidden" name="taskId" value="<?= $taskId ?>">
        <div class="mb-5">
            <input class="w-full border border-indigo-300 p-3 rounded focus:outline-none focus:bg-white
                         focus:shadow-outline focus:border-green-300" type="text" name="text" value="<?= $noteText ?>">
        </div>
        <div>
            <button class=" w-full p-3 bg-green-700 hover:bg-green-500 rounded-lg text-white
                        transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-102
                        sm:mt-auto" type="submit">Update a note
                    </button>
        </div>
    </form>
</div>