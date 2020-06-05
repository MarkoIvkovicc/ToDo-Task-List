<div class="container m-auto">
	<div class="w-full bg-white shadow-lg rounded-lg overflow-hidden my-4">
		<img class="w-full h-56 object-cover" src="app/Developer/img/simple-backgrounds-wide-header.jpg" alt="avatar">
		<div class="flex items-center px-6 py-3 bg-teal-800">
			<h2 class="text-3xl"></h2>
			<h1 class="mx-3 text-white font-semibold text-lg">Edit User Profile</h1>
		</div>
		<div class="py-4 px-6 flex">
			<div class=" m-auto w-1/2">
				<form action="updateUserBack?id=<?= $user->id ?>" method="POST" class="w-full m-auto bg-white px-8 mb-1 text-gray-700 ">
					<h2 class="w-full text-3xl font-bold leading-tight my-5">Edit</h2>
					<!-- name field -->
					<div class="flex flex-wrap mb-6">
						<div class="relative w-full appearance-none label-floating">
							<label for="name" class="">
								User Name
							</label>
							<input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Your name" name="userName" value="<?= $user->name ?>" required>
						</div>
					</div>
					<!-- email field -->
					<div class="flex flex-wrap mb-4">
						<div class="relative w-full appearance-none label-floating">
							<label for="name" class="">
								Your email
							</label>
							<input class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Your email" name="userEmail" value="<?= $user->email ?>" required>
						</div>
					</div>
					<!-- role field -->
					<div class="flex flex-wrap mb-4">
						<div class="relative w-full appearance-none label-floating">
						<label for="name" class="">
								User Role
							</label>
							<select class="tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" name="userRole" required>
								<option value="" disabled selected><?= $user->role ?></option>
								<option value="developer">Developer</option>
								<option value="admin">Admin</option>
							</select>	
						</div>
					</div>
					<div>
						<button class="w-full shadow bg-teal-600 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
							Update
						</button>
					</div>
				</form>
				<div class="px-8">
					<form action="showUser?id=<?= $user->id ?>">
						<input type="hidden" name="id" value="<?= $user->id ?>">
						<button class="w-full shadow bg-orange-600 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Cancel</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>