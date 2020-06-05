<div class="p-5 mx-auto rounded-lg w-full lg:mr-20 hover:shadow-2xl">
    <div class="p-3">
        <h2 class="text-3xl">Register</h2>
    </div>
    <div class="p-3">
        <form action="/register" method="POST">
            <div class="mb-5">
                <label class="block mb-3" for="name">Name</label>
                <input class="w-full border p-3 rounded
                        focus:outline-none focus:bg-white focus:shadow-outline focus:border-purple-300" type="text" name="name">
            </div>
            <div class="mb-5">
                <label class="block mb-3" for="email">Email</label>
                <input class="w-full border p-3 rounded
                        focus:outline-none focus:bg-white focus:shadow-outline focus:border-purple-300" type="text" name="email">
            </div>
            <div class="mb-5">
                <label class="block mb-3" for="password">Password</label>
                <input class="w-full border p-3 rounded
                        focus:outline-none focus:bg-white focus:shadow-outline focus:border-purple-300" type="password" name="password">
            </div>
            <input type="hidden" name="formType" value="register">
            <div>
                <button class="w-full p-3 bg-purple-700 hover:bg-purple-500 rounded-lg text-white
                        transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110" type="submit">Register</button>
            </div>
            
        </form>
    </div>
