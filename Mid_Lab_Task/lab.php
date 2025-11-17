<!DOCTYPE html>
<html>

<head>

    <title> Last Lab Task</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f4f4f4;
        }

        h2 {
            color: #444;
        }

        .container {
            background: white;
            padding: 20px;
            width: 500px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        container.h2 {
            color: red;
        }

        input {
            width: 95%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background: #080808ff;
            color: white;




        }

        button:hover {
            background: #060606ce;
        }

        .activity-item {
            background: #e6e6e6;
            padding: 8px;
            margin-top: 5px;

        }

        #successMessage {
            background: #d4ffd4;
            padding: 10px;
            border-left: 4px solid green;
            margin-top: 15px;

        }
    </style>
</head>
<center>

    <body>

        <div class="container">
            <h2>Participant Registration</h2>

            <input id="name" type="text" placeholder="Full Name">
            <input id="email" type="text" placeholder="Email">
            <input id="phone" type="text" placeholder="Phone Number">
            <input id="password" type="password" placeholder="Password">
            <input id="confirmPassword" type="password" placeholder="Confirm Password">

            <button onclick="register()">Register</button>

            <div id="successMessage"></div>
        </div>

        <div class="container">
            <h2>Activity Selection</h2>

            <input id="activityInput" type="text" placeholder="Enter Activity Name">
            <button onclick="addActivity()">Add Activity</button>

            <h3>Activity List:</h3>
            <div id="activityList"></div>
        </div>

        <script>
            function register() {
                let name = document.getElementById("name").value.trim();
                let email = document.getElementById("email").value.trim();
                let phone = document.getElementById("phone").value.trim();
                let pass = document.getElementById("password").value;
                let cpass = document.getElementById("confirmPassword").value;
                let msg = document.getElementById("successMessage");


                if (!name || !email || !phone || !pass || !cpass) {
                    alert("All fields are required!");
                    return;
                }
                if (!email.includes("@")) {
                    alert("Invalid Email! Email must contain '@'");
                    return;
                }
                if (!/^\d+$/.test(phone)) {
                    alert("Phone number must contain only digits");
                    return;
                }
                if (pass !== cpass) {
                    alert("Passwords do not match!");
                    return;
                }


                msg.style.display = "block";
                msg.innerHTML = `
        <b>Registration Successful!</b><br>
        Name: ${name}<br>
        Email: ${email}<br>
        Phone: ${phone}
    `;
            }

            function addActivity() {
                let activityName = document.getElementById("activityInput").value.trim();
                let activityList = document.getElementById("activityList");

                if (!activityName) {
                    alert("Please enter an activity name.");
                    return;
                }

                let item = document.createElement("div");
                item.className = "activity-item";

                item.innerHTML = `
        ${activityName}
        <button onclick="this.parentElement.remove()">Remove</button>
    `;

                activityList.appendChild(item);

                document.getElementById("activityInput").value = "";
            }
        </script>

    </body>
</center>

</html>