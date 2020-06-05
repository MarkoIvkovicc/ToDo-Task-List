<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Index</title>
</head>

<body>
    <!-- working version of header -->
    <div class="container m-auto">
        <div class="sm:flex p-5 mt-10">
            <div class="p-5 mx-auto lg:mr-48 lg:ml-20 md:mr-20 mb-5 sm:mb-0 rounded-lg w-full hover:shadow-2xl">
                <div class="p-3">
                    <h2 class="text-3xl">Login</h2>
                </div>
                <div class="p-3 h-full">
                    <form action="/login" method="POST">
                        <div class="mb-5">
                            <label class="block mb-3" for="email">Email or Name</label>
                            <input class="w-full border p-3 rounded
                        focus:outline-none focus:bg-white focus:shadow-outline focus:border-green-300" type="text" name="emailname">
                        </div>
                        <div class="mb-5">
                            <label class="block mb-3" for="password">Password</label>
                            <input class="w-full border p-3 rounded
                        focus:outline-none focus:bg-white focus:shadow-outline focus:border-green-300" type="password" name="password">
                        </div>
                        <input type="hidden" name="formType" value="login">
                        <div class="h-full  ">
                            <button class=" w-full p-3 bg-green-700 hover:bg-green-500 rounded-lg text-white
                        transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110
                        sm:mt-auto" type="submit">Login</button>
                        </div>
                    </form>

                </div>
            </div>
            <?php
            include('register.view.php');
            ?>
        </div>

    </div>
    <div>
        <?php
        if (!empty($_SESSION['message'])) {
        ?>
            <div class="mt-12 p-5 bg-red-100 border border-red-500 rounded-lg">
                <p class="text-center text-red-800 text-xl">
                    <?= $_SESSION['message'] ?>
                </p>
            </div>
        <?php
        session_destroy();
        }
        ?>
    </div>
</body>

</html>