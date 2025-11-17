function register() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let pass = document.getElementById("password").value;
    let cpass = document.getElementById("confirmPassword").value;
    let msg = document.getElementById("successMessage");


    if (!Name || !email || !phone || !password || !confirmpassword) {
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
        Phone: ${phone} <br>
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