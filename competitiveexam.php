<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Cards</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 200px;
            height: 150px;
            background-color: #f0f0f0;
            border-radius: 10px;
            margin: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card a {
            text-decoration: none;
            color: #333;
        }

        .card-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
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
    <!--	Header start  -->
            <?php include("header.php"); ?>
            <!--	Header end  -->

    <div class="body">
        <div class="card">
            <div class="card-content">
                <a href="exam/upsc.php">UPSC</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <a href="exam/mpsc.php">MPSC</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <a href="exam/neet.php">NEET</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <a href="exam/jee.php">JEE Mains & Advanced</a>
            </div>
        </div>
    </div>
</body>

</html>