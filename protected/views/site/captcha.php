<html>
<head>

</head>
<body>




<script type="text/javascript">



    var verifyCallback = function(token) {
        alert(token);
    };

    var widgetId2;


    var onloadCallback = function() {
        widgetId2 = grecaptcha.render(document.getElementById('example2'), {
            'sitekey' : '6LevlqsUAAAAAPmH7Xm2cW0S2S3PymOm6FhuaWni',
            'callback' : verifyCallback,
            'theme' : 'light'
        });

        grecaptcha.reset(widgetId2);
    };


</script>

<form action="?" method="POST">
    <div id="example2"></div>
    <br>
    <input type="submit" value="Submit">
</form>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
</body>
</html>