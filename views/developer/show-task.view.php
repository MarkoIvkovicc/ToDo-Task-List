<div class="container m-auto">
	<div class="w-full bg-white shadow-lg rounded-lg overflow-hidden my-4">
		<img class="w-full h-56 object-cover" src="app/Developer/img/developer-task.jpg" alt="avatar">
		<div class="flex items-center px-6 py-3 bg-teal-800">
			<h1 class="mx-3 text-white font-semibold text-lg"><?= ucfirst($currentTask->title) ?></h1>
		</div>
		<div class="">
			<div class="p-8">
				<div class="flex">
					<div class="items-center text-gray-700 w-3/4">
						<div>
							<h2>Task Description</h2>
						</div>
						<div>
							<?= ucfirst($currentTask->description) ?>
						</div>
					</div>
					<div class="w-1/4">
						<div class="text-gray-700 mb-5">
							<h2>Date of Create:</h2>
							<div class="text-black text-lg">
								<?= $currentTask->created_at ?>
							</div>
						</div>
						<div class="text-gray-700 mb-5">
							<h2>Current status</h2>
							<div class="text-black text-lg">
								<?= $isCompleted; ?>
							</div>
						</div>
					</div>
				</div>

				<div class="flex m-auto">
					<form action="completeTask?id=<?= $currentTask->id ?>" method="POST" class=" mr-3">
						<input type="hidden" name="id" value="<?= $currentTask->id ?>">
						<button class="w-full shadow bg-teal-600 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" type="submit">Finished</button>
					</form>

					<form action="inCompleteTask?id=<?= $currentTask->id ?>" method="POST">
						<input type="hidden" name="id" value="<?= $currentTask->id ?>">
						<button class="w-full shadow bg-orange-600 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" type="submit">In Progres</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>