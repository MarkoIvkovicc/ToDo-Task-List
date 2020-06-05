<div class="container m-auto">
	<div class="w-full bg-white shadow-lg rounded-lg overflow-hidden my-4">
		<img class="w-full h-56 object-cover" src="app/Developer/img/simple-backgrounds-wide-header.jpg" alt="avatar">
		<div class="flex items-center px-6 py-3 bg-teal-800 mb-5">
			<h2 class="text-3xl"></h2>
			<h1 class="mx-3 text-white font-semibold text-lg"><?= $currentTask->title ?></h1>
		</div>


		<div class="py-4 px-6">

			<div class="mb-10">
				<h2 class="w-full my-2 text-3xl font-bold leading-tight my-5">Edit</h2>
			</div>

			<div class="w-full">
				<form action="updateTaskBack?id=<?= $currentTask->id ?>" method="POST" class="w-full m-auto bg-white text-gray-700">
					<div class="flex m-auto">
						<!-- name field -->
						<div class="w-1/2">
							<div class="mb-6">
								<div class="mb-3">
									<label for="name" class="text-lg">
										Title
									</label>
								</div>
								<div>
									<input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="taskTitle" value="<?= $currentTask->title ?>" required>
								</div>

							</div>
							<!-- description field -->
							<div class="flex">
								<div class="w-1/2">
									<div class="mb-6">
										<div class="w-full flex justify-between">
											<div>
												<label for="name" class="py-2 px-4 mb-4 text-lg">
													Status
												</label>
											</div>
											<div>
												<select name="isTaskCompleted" required>
													<option value="" disabled selected><?= $isCompleted ?></option>
													<option value="inProgress">In progress</option>
													<option value="finished">Finished</option>
												</select>
											</div>

										</div>
									</div>
									<!--assigned to -->
									<div class=" mb-6">
										<div class="w-full flex justify-between">
											<div>
												<label for="name" class="py-2 px-4 mb-4 text-lg">
													Assigned to
												</label>
											</div>
											<div>
												<select name="assignedTo" required>
													<option value="" disabled><?= $user->name ?></option>
													<?php foreach ($allDevelopers as $user) : ?>
														<option value="<?= $user->id ?>"><?= $user->name ?></option>
													<?php endforeach; ?>
												</select>
											</div>

										</div>
									</div>
								</div>
							</div>


						</div>
						<div class="w-1/2 ml-5">
							<div class="mb-6">
								<div class="mb-3">
									<label for="description" class="text-lg">
										Description
									</label>
								</div>
								<div>
									<textarea class="overflow-auto h-48 py-2 px-4 mb-3 leading-relaxed w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="taskDescription" required><?= $currentTask->description ?></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<input type="hidden" name="method" value="PATCH">
						<input type="hidden" name="id" value="<?= $currentTask->id ?>">
						<button class="w-full shadow bg-teal-600 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
							Update
						</button>
					</div>
				</form>
				<div>
					<form action="showTask?id=<?= $currentTask->id ?>">
						<input type="hidden" name="id" value="<?= $currentTask->id ?>">
						<button class="w-full shadow bg-orange-600 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit"">Cancel
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>