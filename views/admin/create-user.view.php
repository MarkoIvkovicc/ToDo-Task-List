
    <div class="container m-auto">
        <form action="/createUserBack" method="POST">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" name="password">
            </div>
            <div>
                <label for="role">Role</label>
                <select type="text" name="role">
                    <option value="developer">Developer</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div>
                <button type="submit">Create User</button>
            </div>
        </form>
    </div>
