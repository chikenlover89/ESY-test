<a href="/">Back</a>
<form method="post" action="/login">
    <div>
        <label for="user">Username</label>
        <input type="user" id="user" name="user" required/>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required/>
    </div>

    <button type="submit">Login</button>
</form>

<p style="color: red"><?= $error ?></p>