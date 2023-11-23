<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Chat</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

    <h1>Group Chat</h1>

    <div id="start-chat">
        <form id="save-name">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <input  type="submit" value="Let's Chat">

        </form>

    </div>

    <div id="chat-part">
        <form id="chat-form">
            @csrf
            <input type="hidden" name="username" id="username">
            <input type="text" name="message" id="message" placeholder="Enter Your message" required>
            <input type="submit" value="Sent">

        </form>

        <div id="chat-container">

        </div>

    </div>

    <script type="module">
        $('#chat-part').hide();
        $('#start-chat').submit(function(event) {
            event.preventDefault();
            $('#username').val(
                $('#name').val()
            );
            $('#start-chat').hide();
            $('#chat-part').show();

        });

        $('#chat-form').submit(function(event) {
            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url : "{{route('broadcastMessage')}}",
                method : 'POST',
                data : formData
            });

            $('#message').val('');

        });

        Echo.channel('messagechannel')
        .listen('ChatEvant', (data) => {

            let html = `<br>
            <b>${data.userName}:-</b>
            <span>${data.message}</span>`

            ;

            $('#chat-container').append(html);

        });



    </script>

</body>

</html>
