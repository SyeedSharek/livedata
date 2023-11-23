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
        Presence : <span id="tradeId"></span>
    </p>




{{-- <script  type="module">
    Echo.join('presenceChannel')
    .here((users)=>{
        console.log(users.length);
    })
    .joining(users) =>{

        console.log('New User Join' + users.name);
    }
    .leaving(users) =>{

        console.log('Leaving ' + users.name);

    }
    .listen('presenceMessageEvent',(data)=>{

         console.log(data);
        //document.getElementById('tradeId').innerHTML = data.message;
    });

</script> --}}

</body>
</html>
