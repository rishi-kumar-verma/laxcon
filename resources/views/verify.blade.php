<!DOCTYPE html>
<html>

<head>
    <title>Vefification Email From Laxcon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/
css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
</head>

<body>
    <br />
    <h3 align="center">Vefification Email From Laxcon</h3><br />
    <div class="container">
        Hi,
        <br />
        Click the link below to verify your email ID for logging in to Laxcon Mobile App.
        <br />
        <a href="{{ url('/verificationemail/'.$emails['token']) }}">{{ __('Verification Link') }}</a>
        <br />
        If you didn't try to sign in just now, please please ignore this email. <br />
        Regards, <br />

        <a href="www.laxconsteels.com">Laxcon Steels Limiated</a>
        <br />
        <br />
        <br />

    </div>
</body>

</html>