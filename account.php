<?php require 'head.php' ?>
<body>

<!-- Header section -->
<header><?php require 'nav.php' ?></header>

<!-- Main section -->
<main>
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col s6">
                <a class="waves-effect waves-light btn-large">Login</a>
                    <a class="waves-effect waves-light btn-large">Create user</a>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php require 'footer.php'; ?>