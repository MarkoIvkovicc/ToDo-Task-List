<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title></title>
</head>

<body>
    <div class="container m-auto">
        <header>
            <nav class="flex justify-between">

                <div class="flex mb-10 justify-between w-full">
                    <?php
                    if ($policy->isAdmin($logedUser)) {
                    ?>
                        <!-- Admin Menu -->
                        <div class="flex w-full">
                            <div class="m-5">
                                <a href="/users">Developers</a>
                            </div>
                            <div class="m-5">
                                <a href="/tasks">Tasks</a>
                            </div>
                            <div class="m-5">
                                <a href="/createTask">Create new Task</a>
                            </div>
                        </div>

                        <div class="flex m-auto w-full">
                            <div class="ml-auto flex">
                                <div class="mr-5">
                                    <a href="/showUser?id=<?= $_SESSION['user_id'] ?>">Admin Profile</a>
                                </div>
                                <div class="mr-5">
                                    <a href="/admin">Dashboard</a>
                                </div>
                            </div>
                        </div>

                    <?php
                    } elseif ($policy->isDeveloper($logedUser)) {
                    ?>
                        <!--dev menu -->
                        <div class="flex w-full">
                            <div class="m-5">
                                <a href="developer">User Dasboard</a>
                            </div>
                            <div class="m-5">
                                <a href="/profile?id=<?= $_SESSION['user_id'] ?>"><?= ucfirst($logedUser->name) ?>'s Profile</a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="m-5">
                    <form action="/logout" method="GET">
                        <input type="hidden" name="method" value="logout">
                        <a><button type="submit">Logout</button></a>
                    </form>
                </div>
            </nav>
        </header>
    </div>