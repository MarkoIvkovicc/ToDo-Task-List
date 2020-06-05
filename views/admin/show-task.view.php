<div class="container m-auto">
	<div class="w-full bg-white shadow-lg rounded-lg overflow-hidden my-4">
		<img class="w-full h-56 object-cover" src="app/Developer/img/simple-backgrounds-wide-header.jpg" alt="avatar">
		<div class="flex items-center px-6 py-3 bg-teal-800">
			<h1 class="mx-3 text-white font-semibold text-3xl"><?= $currentTask->title ?></h1>
		</div>
		<div class="flex">
			<div class="py-4 px-6 w-2/3">
				<div>
					<h1 class="text-2xl font-semibold text-gray-800">Description</h1>
					<div>
						<?= $currentTask->description ?>
					</div>
				</div>
			</div>
			<div class="px-6 w-1/3">
				<div class="flex items-center mt-4">
					<div class="mb-3">
						<h2 class="font-semibold text-gray-800 text-xl">Created</h2>
						<div>
							<?= $currentTask->created_at ?>
						</div>
					</div>
				</div>
				<div class="flex items-center mt-4">
					<div>
						<h2 class="font-semibold text-gray-800 text-xl">Status</h2>
						<div>
							<?= $isCompleted ?>
						</div>
					</div>

				</div>

				<div class="flex items-center mt-4">
					<div>
						<h2 class="font-semibold text-gray-800 text-xl">Assigned to</h2>
						<div>
							<a class="hover:underline" href="showUser?id=<?= $user->id ?>"><?= $user->name ?></a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="mb-3">
			<form action="updateTask?id=<?= $currentTask->id ?>">
				<input type="hidden" name="id" value="<?= $currentTask->id ?>">
				<button class="w-full shadow bg-teal-600 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Edit Task</button>
			</form>
		</div>

		<div>
			<form action="deleteTask?id=<?= $currentTask->id ?>" method="POST">
				<input type="hidden" name="method" value="DELETE">
				<input type="hidden" name="id" value="<?= $currentTask->id ?>">
				<button class="w-full shadow bg-orange-600 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Delete Task</button>
			</form>
		</div>

		</>
	</div>
</div>