<!DOCTYPE html>
<html>
<head>
    <title>Stream Selection Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    padding: 20px;
}

h2 {
    color: #333;
    text-align: center;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
<script>
            (function(w, d, s, o, f, js, fjs) {
                w["botsonic_widget"] = o;
                w[o] =
                    w[o] ||
                    function() {
                        (w[o].q = w[o].q || []).push(arguments);
                    };
                (js = d.createElement(s)), (fjs = d.getElementsByTagName(s)[0]);
                js.id = o;
                js.src = f;
                js.async = 1;
                fjs.parentNode.insertBefore(js, fjs);
            })(window, document, "script", "Botsonic", "https://widget.writesonic.com/CDN/botsonic.min.js");
            Botsonic("init", {
                serviceBaseUrl: "https://api-azure.botsonic.ai",
                token: "7df3ea59-bd1d-406d-a085-4bf5ad3b32ae",
            });
        </script>
<h2>Stream Selection</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="stream">Which stream do you want to choose?</label>
        <select name="stream" id="stream">
            <option value="">-- Select a stream --</option>
            <option value="diploma">Diploma</option>
            <option value="science">Science</option>
            <option value="art">Art</option>
            <option value="commerce">Commerce</option>
            <option value="iti">ITI</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedStream = $_POST["stream"];
        if ($selectedStream == "") {
            echo "Please select a stream.";
        } else {
            $streamFile = $selectedStream . ".php";
            if (file_exists($streamFile)) {
                $streamContent = file_get_contents($streamFile);
                echo $streamContent;
            } else {
                echo "The file for the selected stream does not exist.";
            }
        }
    }
    ?>
</body>
</html>