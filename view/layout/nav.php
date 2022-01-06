<nav>
    <ul>
        <li><a href="/elphil/view/index.php">Home</a></li>
        <?php if($_SESSION['user']['isadmin'] == 1):?>
            <li><a href="/elphil/view/upload.php">Upload</a></li>
        <?php endif; ?>
        <li><a href="/elphil/view/cart.php">addtocart</a></li>
        <li><a href="/elphil/view/login.php">login</a></li>
        <li>
            <form action="/elphil/controller/logout.php" method="post">
                <button type="submit">logout</button>
            </form>
        </li>
    </ul>
</nav>