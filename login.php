<?php
session_start();
if (isset($_SESSION['login_id'])) {
    header("location:index.php?page=home");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WageIt</title>
    <link rel="shortcut icon" href="image/wageit.svg" type="image/x-icon">
    <?php include('./header.php'); ?>
    <?php include('./db_connect.php'); ?>
</head>
<style>
    body {
        width: 100%;
        height: 100%;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 16px;
        background: #F8FAFC;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    main#main {
        width: 100%;
        height: 100%;
        background: #F8FAFC;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        --background: white;
        --border: rgba(0, 0, 0, 0.125);
        --borderDark: rgba(0, 0, 0, 0.25);
        --borderDarker: rgba(0, 0, 0, 0.5);
        --bgColorH: 0;
        --bgColorS: 0%;
        --bgColorL: 98%;
        --fgColorH: 210;
        --fgColorS: 50%;
        --fgColorL: 38%;
        --borderRadius: 10px;
        --highlight: #306090;
        height: 600px;
        width: 400px;
        background: white;
        border: 1px solid var(--border);
        border-radius: var(--borderRadius);
        box-shadow: 0 1rem 1rem -0.75rem var(--border);
        padding: 1rem;
        display: flex;
        margin-top: 50%;
        padding: 40px;
        flex-direction: column;
        position: relative;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 0.825rem;
        color: var(--borderDarker);
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid var(--border);
        border-radius: 10px;
        font-size: 1rem;
    }

    input[type="submit"] {
        background: #282d71;
        color: white;
        border: none;
        height: 40px;
        padding: 0.5rem 1rem;
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
        margin-top: 1rem;
        border-radius: 10px;
    }

    input[type="submit"]:hover {
        background: hsl(var(--fgColorH), var(--fgColorS), calc(var(--fgColorL) * 0.85));
    }

    .a11y-hidden {
        position: absolute;
        top: -1000em;
        left: -1000em;
    }

    .label-show-password {
        margin-top: 0.5rem;
    }

    figure {
        --skinH: 30;
        --skinS: 100%;
        --skinL: 87%;
        --hair: rgb(180, 70, 60);
        background: hsl(var(--fgColorH), calc(var(--fgColorS) * 2), 95%);
        border: 1px solid rgba(0, 0, 0, 0.0625);
        border-radius: 50%;
        height: 0;
        margin: auto auto 2rem;
        padding-top: 60%;
        position: relative;
        width: 60%;
        overflow: hidden;
    }

    figure div {
        position: absolute;
        transform: translate(-50%, -50%);
    }

    .skin {
        background: hsl(var(--skinH), var(--skinS), var(--skinL));
        box-shadow: inset 0 0 3rem hsl(var(--skinH), var(--skinS), calc(var(--skinL) * 0.95));
    }

    .head {
        top: 40%;
        left: 50%;
        width: 60%;
        height: 60%;
        border-radius: 100%;
        box-shadow: 0 -0.175rem 0 0.125rem var(--hair);
    }

    .eyes,
    .mouth {
        top: 55%;
        left: 50%;
    }

    .eyes::before,
    .eyes::after {
        content: "";
        background: var(--borderDarker);
        border-radius: 50%;
        width: 10px;
        height: 10px;
        display: inline-block;
        margin: 0 0.5rem;
        animation: blink 5s infinite;
    }

    @keyframes blink {
        0%, 90%, 100% { height: 10px; }
        95% { height: 0; }
    }

    .mouth {
        border: 0.125rem solid transparent;
        border-bottom: 0.125rem solid var(--borderDarker);
        width: 25%;
        border-radius: 50%;
        transition: all 0.5s;
    }

    form:valid .mouth {
        top: 60%;
        left: 50%;
        width: 40%;
        height: 40%;
    }

    .neck {
        width: 10%;
        height: 40%;
        top: 62%;
        left: 50%;
        background: hsl(var(--skinH), var(--skinS), calc(var(--skinL) * 0.94));
        border-radius: 0 0 2rem 2rem;
        box-shadow: 0 0.25rem var(--border);
    }

    .person-body {
        width: 60%;
        height: 100%;
        border-radius: 50%;
        background: hsl(var(--fgColorH), var(--fgColorS), var(--fgColorL));
        left: 50%;
        top: 126%;
    }

    .shirt-1,
    .shirt-2 {
        width: 12%;
        height: 7%;
        background: hsl(var(--bgColorH), var(--bgColorS), var(--bgColorL));
        top: 76%;
        left: 36.5%;
        transform: skew(-10deg) rotate(15deg);
    }

    .shirt-2 {
        left: 52.5%;
        transform: skew(10deg) rotate(-15deg);
    }

    /* Original Hair Styles */
    .hair {
        top: 40%;
        left: 50%;
        width: 66.66%;
        height: 66.66%;
        border-radius: 100%;
        overflow: hidden;
    }

    .hair::before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        background: var(--hair);
        border-radius: 50%;
        top: -60%;
        left: -50%;
        box-shadow: 4rem 0 var(--hair);
    }

    .hello-message {
        font-size: 1.5rem;
        font-weight: bold;
        color: black;
        text-align: start;
        margin-bottom: 1rem;
    }

    .wage-it-hello {
        color: #306090;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .margin-wageit {
        margin-bottom: 10px;
    }

    .subhead-wageit {
        color: grey;
    }

</style>
<body>
    <main id="main">
        <div class="">
            <div class="col-md-8">
                <div class="card-body">
                    <form id="login-form">
                        <h5 class="hello-message"> Hello there! </h5>
                        
                        <div class="row margin-wageit"> 
                            <h6 class="subhead-wageit">&nbsp &nbsp Login to your&nbsp</h6>
                            <h6 class="wage-it-hello">WAGEit</h6>
                            <h6 class="subhead-wageit">&nbspaccount.</h6>
                        </div>
                        

						<figure aria-hidden="true">
                            <div class="person-body"></div>
                            <div class="neck skin"></div>
                            <div class="head skin">
                                <div class="eyes"></div>
                                <div class="mouth"></div>
                            </div>
                            <div class="hair"></div>
                            <div class="ears"></div>
                            <div class="shirt-1"></div>
                            <div class="shirt-2"></div>
                        </figure>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                        <input type="submit" value="Log In">
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </main>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
<script>
    $('#login-form').submit(function(e) {
        e.preventDefault();
        $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
        if ($(this).find('.alert-danger').length > 0) {
            $(this).find('.alert-danger').remove();
        }
        $.ajax({
            url: 'ajax.php?action=login',
            method: 'POST',
            data: $(this).serialize(),
            error: function(err) {
                console.log(err);
                $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
            },
            success: function(resp) {
                if (resp == 1) {
                    location.href = 'index.php?page=home';
                } else if (resp == 2) {
                    location.href = 'voting.php';
                } else {
                    $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>');
                    $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
                }
            }
        });
    });
</script>
</html>