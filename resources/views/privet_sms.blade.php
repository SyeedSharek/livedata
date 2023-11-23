<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Socket</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <p>
        Sent Message: <span id="messageId"></span>
    </p>




<script  type="module">
    Echo.private('privatechannel').listen('PrivateMessageEvent',(data)=>{

        console.log(data);
        //document.getElementById('messageId').innerHTML = data.message;
    });

</script>

</body>
</html>
