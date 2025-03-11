<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Reverb Test</title>
</head>
<body>
<h1> Laravel Echo / Reverb Receiver</h1>
<script>
    console.log('really running')
    document.addEventListener("DOMContentLoaded", (event) => {
        window.Echo.channel('reverb')
            .listen('.reverb.sent', (e) => {
                console.log(e.message);
            });
    });
</script>
</body>
</html>

