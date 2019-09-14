<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>
    @include('includes.assets')
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen   animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">IN+</h1>

        </div>
        <div class="ibox ">
            <div class="ibox-content">
        <h3>Register to IN+</h3>
        <p>Create account to see it in action.</p>
        <form class="m-t"  id="myForm" role="form" action="">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" required="">
            </div>
            <div class="form-group">
                <input type="email" placeholder="Enter email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <div class="checkbox i-checks">
                    <label> <input type="checkbox"><i></i> Agree the terms and policy</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

            <p class="text-muted text-center">
                <small>Already have an account?</small>
            </p>
            <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
        </form>
        <p class="m-t">
            <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
        </p>
    </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
    $("#myForm").validate({
        rules: {
            password: {
                required: true,
                minlength: 3
            },
            url: {
                required: true,
                url: true
            },
            name: {
                required: true

            },
            min: {
                required: true,
                minlength: 6
            },
            max: {
                required: true,
                maxlength: 4
            }
        }
    });
</script>
</body>

</html>
