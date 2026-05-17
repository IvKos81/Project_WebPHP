<?php require_once('../components/header.php'); ?>

    <div class="feedback">
        <div class="container">
            <h2>Registration form</h2>

            <form>
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input type="text">
                    </div>
                    <div>
                        <label>Name</label>
                        <input type="text">
                    </div>
                </div>
                <label>Email</label>
                <input type="email" class="one-line">
                
                <label>Password</label>
                <input type="password" class="one-line">
                

                <button type="button">Register</button>
            </form>
        </div>
    </div>

    <?php require_once('./components/footer.php'); ?>

</body>

</html>