<h1>Welcome <?php echo $_SESSION['auth_id']; ?> </h1>
<a href="/login">Login</a><br>
<a href="/api">API (return all)</a><br>

<?php if ($_SESSION['auth_id'] != null): ?>
    <a href="/logout">Logout</a><br>
    <a href="/products">Products</a>
<?php endif; ?>
