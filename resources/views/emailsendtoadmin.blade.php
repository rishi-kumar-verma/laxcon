<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/
css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
</head>

<body>
    <br />
    <h3 align="center">Query Email From Laxcon</h3><br />
    <div class="container">
        Hi Admin,
        <br />
        We got a query from visitor!
        <br />
        <br />
        <b>Name:</b> {{ $emails['name']}}<br />
        <b>Phone:</b>{{ $emails['phone']}}<br />
        <b>Email:</b>{{ $emails['email']}}<br />
        <b>Country:</b>{{ $emails['country']}}<br />
        <b>Shapes:</b>{{ $emails['material']}}<br />
        <b>Message:</b>{{ $emails['message']}}<br />
        <br />
        <br />
        <a href="www.laxconsteels.com">Laxcon Steels Limiated</a>
        <br />
        <br />
        <br />

    </div>
</body>

</html>