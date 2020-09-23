<div class="container m-auto p-8 w-1/2">
    <form action="/createNoteBack" method="POST">
        <input type="hidden" name="taskId" value="<?= $_GET['id']; ?>">
        <div class="mb-5">
            <input class="w-full border border-indigo-300 p-3 rounded focus:outline-none focus:bg-white
                         focus:shadow-outline focus:border-green-300" type="text" name="text" placeholder="Write a note here...">
        </div>
        <div>
            <button class=" w-full p-3 bg-green-700 hover:bg-green-500 rounded-lg text-white
                        transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-102
                        sm:mt-auto" type="submit">Leave a note
                    </button>
        </div>
    </form>
</div>