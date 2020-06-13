<!doctype html>
<html>
    <head>
        <?php include 'layout/header.php'; ?>
    </head>
    <body>
        <section class="container">
            <div class="w-50 m-auto">
                <form action="contact" method="post">
                    <label>Name:</label>
                    <div class="input-group mb-2">
                        <input type="text" name="name" class="form-control">
                    </div>
                    <label>Password</label>
                    <div class="input-group mb-2">
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-outline-dark" type="submit">verzend</button>
                </form>
            </div>
        </section>
        <?php include 'layout/footer.php'; ?>
    </body>
</html>