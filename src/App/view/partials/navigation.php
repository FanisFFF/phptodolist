<header>
    <nav>
        <ul>
            <?php if(!empty($_SESSION)) :?>
                <li>
                    <a href='logout'>Logout</a>
                </li>
            <?php else :?>
                <li>
                <a href="login">Login</a>
            </li>
            <li>
                <a href="register">Register</a>
            </li>
            <?php endif ;?>
        </ul>
    </nav>
</header>