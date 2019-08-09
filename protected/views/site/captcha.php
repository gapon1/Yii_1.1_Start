<html>
<head>
    <script>
        function onSubmit(token) {
            alert('thanks ' + document.getElementById('field').value);
            alert(token);
        }

        function validate(event) {
            event.preventDefault();
            if (!document.getElementById('field').value) {
                alert("You must add text to the required field");
            } else {
                grecaptcha.execute();
            }
        }

        function onload() {
            var element = document.getElementById('submit');
            element.onclick = validate;
        }
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<form>
    Name: (required) <input id="field" name="field">
    <div id='recaptcha' class="g-recaptcha"
         data-sitekey="6LevlqsUAAAAAPmH7Xm2cW0S2S3PymOm6FhuaWni"
         data-callback="onSubmit"
         data-size="invisible"></div>
    <button id='submit'>submit</button>
</form>
<script>onload();</script>
</body>
</html>