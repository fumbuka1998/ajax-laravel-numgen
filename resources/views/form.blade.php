<!DOCTYPE html>
<html>
<head>
    <title>Generate Number</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <form>
        <label for="number">Number:</label>
        <input type="text" id="number" name="number"><br><br>
    </form>

    <script>
        function generateNumber() {
            fetch('/generate-number')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('number').value = data.number;
                })
                .catch(error => console.error(error));
        }

        // call generateNumber() function when the form is opened
        window.onload = function() {
            generateNumber();
        };
    </script>
</body>
</html>