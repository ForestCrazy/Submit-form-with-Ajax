<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit form without reload</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#send").click(function() {
                var text = $('#text').val();
                $.ajax({
                    url: "submit.php",
                    type: "GET",
                    data: "data=" + text,
                    success: function(data) {
                        $("#res").html(data);
                    }
                });
            });
        });
    </script>
</head>

<body>
    <form action="javascript:void(0)">
        <input type='text' id='text' name='text' />
        <input type='submit' name='text_send' value='SEND' id="send" />
    </form>
    <div id="res"></div>
</body>

</html>