<div class="container m-auto">
	<div class="w-full bg-white shadow-lg rounded-lg overflow-hidden my-4">
		<img class="w-full h-56 object-cover" src="app/Developer/img/simple-backgrounds-wide-header.jpg" alt="avatar">
		<div class="flex items-center px-6 py-3 bg-teal-800 mb-5">
			<h2 class="text-3xl"></h2>
			<h1 class="mx-3 text-white font-semibold text-lg">Edit Your Profile</h1>
		</div>
		<div class="py-4 px-6 flex">
			<div class="flex m-auto w-1/2">
				<form action="updateProfileBack?id=<?= $logedUser->id ?>" method="POST" id="contact-me" class="w-full m-auto bg-white px-8 pb-8 text-gray-700 ">
					<h2 class="w-full my-2 text-3xl font-bold leading-tight my-5">Edit</h2>
					<!-- name field -->
					<div class="flex flex-wrap mb-6">
						<label for="name" class="mb-3 text-gray-600">Name</label>
						<div class="w-full">
							<input class="py-2 px-4 mb-3 leading-relaxed block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Your name" name="userName" value="<?= $logedUser->name ?>" required>
						</div>
					</div>
					<!-- email field -->
					<div class="flex flex-wrap mb-6">
						<label for="name" class="mb-3 text-gray-600">Email</label>
						<div class="w-full">
							<input class="py-2 px-4 mb-3 block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Your email" name="userEmail" value="<?= $logedUser->email ?>" required>
						</div>
					</div>

					<div class="mb-3">
						<button class="w-full shadow bg-teal-600 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
							Update
						</button>
					</div>
					<div class="">
						<form action="profile?id=<?= $logedUser->id ?>">
							<input type="hidden" name="id" value="<?= $logedUser->id ?>">
							<button class="w-full shadow bg-orange-600 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit"">Cancel</button>
						</form>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>