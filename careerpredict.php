<!DOCTYPE html>
<html>

<head>
    <title>Stream and Career Selection</title>
    <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 20px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }

        h1,
        h2,
        h3 {
            color: #333;
            text-align: center;
        }

        form {
            margin-bottom: 20px;
            text-align: center;
        }

        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        li {
            background-color: #fff;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease;
        }

        li:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        li:active {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        li h3 {
            margin-top: 0;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            border: 3px solid blue;
            /* Blue border color */
        }

        .card-header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            margin: -20px -20px 20px;
        }

        .card ul {
            display: block;
        }

        .card li {
            background-color: transparent;
            padding: 5px 0;
            margin: 0;
            box-shadow: none;
            width: auto;
            text-align: left;
        }

        .dropdown-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .dropdown-container>* {
            margin: 0 10px;
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
    <div class="container">
        <h1>Career Options</h1>
        <form method="post">
            <div class="dropdown-container">
                <h2>Select a Stream:</h2>
                <select name="stream">
                    <option value="">Select a Stream</option>
                    <option value="diploma">Diploma</option>
                    <option value="engineering">Engineering</option>
                    <option value="pharmacy">Pharmacy</option>
                    <option value="law">Law</option>
                    <option value="doctor">Doctor</option>
                    <option value="iti">ITI</option>
                </select>
                <h2>Select a Branch:</h2>
                <select name="branch" id="branchDropdown" disabled>
                    <option value="">Select a Branch</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $stream = $_POST['stream'];
            $branch = $_POST['branch'];

            echo "<h2>Career Options:</h2>";
            switch ($stream) {
                case 'diploma':
                    $branches = array(
                        "Computer" => array("Web developer", "Programmer", "Network Analyst"),
                        "Mechanical" => array("Assistant Engineer", "Pump Industry", "CNC Training", "Mechanical Engineer"),
                        "Civil" => array("Civil Engineer", "Surveying", "Construction Engineer", "DRDO"),
                        "Electrical" => array("Electrical Technician", "Electronics Engineer", "Project Engineer", "Control System Engineer", "Electrical Design Engineer")
                    );
                    displayCareers($branches, $branch);
                    break;
                case 'engineering':
                    $branches = array(
                        "Computer" => array("Data Analyst", "Full Stack Developer", "AI Engineer", "Software Developer", "Machine Learning Engineer"),
                        "Mechanical" => array("Aerospace Engineer", "Automotive Engineer", "Mechanical Engineer", "Maintenance Engineer", "Mining Engineer"),
                        "Civil" => array("Design Engineer", "CAD Technician", "Civil Engineer", "Estimator", "Nuclear Engineer"),
                        "Electrical" => array("Power Engineer", "Robotics Engineer", "Electronics Engineer", "Electrical Engineer", "Electrical Design Engineer"),
                        "EnTC" => array("Telecom Engineer", "R&D Software Engineer", "Software Analyst", "Electronic Design Engineer", "Technical Director"),
                        "Chemical" => array("Environmental Engineer", "Energy Engineer", "Product Development Engineer", "Chemical Plant Manager")
                    );
                    displayCareers($branches, $branch);
                    break;
                case 'pharmacy':
                    $branches = array(
                        "Pharmaceutics" => array("Microbiologist", "Biomedical Engineer", "Product Development Scientist", "Senior Scientist"),
                        "Medicinal Chemistry" => array("Microbiologist", "Biomedical Engineer", "Product Development Scientist", "Senior Scientist"),
                        "Pharmacognosy" => array("Microbiologist", "Biomedical Engineer", "Product Development Scientist", "Senior Scientist"),
                        "Pharmacology" => array("Microbiologist", "Biomedical Engineer", "Product Development Scientist", "Senior Scientist")
                    );
                    displayCareers($branches, $branch);
                    break;
                case 'law':
                    $branches = array(
                        "Law" => array("Criminal Lawyer", "Family Lawyer", "Tax Lawyer")
                    );
                    displayCareers($branches, $branch);
                    break;
                case 'doctor':
                    $branches = array(
                        "MBBS" => array("Hospital Administration", "Health Informatics and Analytics", "Medical-Legal Advisors")
                    );
                    displayCareers($branches, $branch);
                    break;
                case 'iti':
                    $branches = array(
                        "Auto Electrician" => array("Electrician"),
                        "Auto CAD Technic" => array("CAD Expert", "Visualizer 3D", "Design Engineer"),
                        "Agriculture Engineering" => array("Plant Supervisor", "Agriculture Sales", "Bio Energy Solutions")
                    );
                    displayCareers($branches, $branch);
                    break;
                default:
                    echo "Please select a stream.";
            }
        }

        function displayCareers($branches, $branch)
        {
            if (!empty($branch) && array_key_exists($branch, $branches)) {
                echo "<ul>";
                echo "<li><h3>$branch</h3>";
                echo "<ul>";
                foreach ($branches[$branch] as $career) {
                    echo "<li>$career</li>";
                }
                echo "</ul></li>";
                echo "</ul>";
            } else {
                echo "Please select a branch.";
            }
        }
        ?>

        <script>
            const streamDropdown = document.querySelector('select[name="stream"]');
            const branchDropdown = document.getElementById('branchDropdown');

            streamDropdown.addEventListener('change', function() {
                branchDropdown.innerHTML = '<option value="">Select a Branch</option>';
                branchDropdown.disabled = false;

                const stream = this.value;
                let branches;

                switch (stream) {
                    case 'diploma':
                        branches = ['Computer', 'Mechanical', 'Civil', 'Electrical'];
                        break;
                    case 'engineering':
                        branches = ['Computer', 'Mechanical', 'Civil', 'Electrical', 'EnTC', 'Chemical'];
                        break;
                    case 'pharmacy':
                        branches = ['Pharmaceutics', 'Medicinal Chemistry', 'Pharmacognosy', 'Pharmacology'];
                        break;
                    case 'law':
                        branches = ['Law'];
                        break;
                    case 'doctor':
                        branches = ['MBBS'];
                        break;
                    case 'iti':
                        branches = ['Auto Electrician', 'Auto CAD Technic', 'Agriculture Engineering'];
                        break;
                    default:
                        branches = [];
                }

                branches.forEach(function(branch) {
                    const option = document.createElement('option');
                    option.value = branch;
                    option.text = branch;
                    branchDropdown.add(option);
                });
            });
        </script>
    </div>
</body>

</html>