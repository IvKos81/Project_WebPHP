<?php require_once('./components/header.php'); ?>

    <div class="feedback">
        <div class="container">
            <h2>Registration form</h2>

            <form method="post" action="/lib/reg.php">
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input type="text" name="userlogin">
                    </div>
                    <div>
                        <label>Name</label>
                        <input type="text" name="username">
                    </div>
                </div>
                <label>Email</label>
                <input type="email" class="one-line" name="useremail">
                
                <label>Password</label>
                <input type="password" class="one-line" name="userpassword">
                

                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <?php require_once('./components/footer.php'); ?>

</body>

</html>