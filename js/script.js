function validateForm() {
    let name = document.querySelector("input[name='name']").value.trim();
    let email = document.querySelector("input[name='email']").value.trim();
    let mobile = document.querySelector("input[name='mobile']").value.trim();
    let gender = document.querySelector("select[name='gender']").value;
    let course = document.querySelector("input[name='course']").value.trim();

    // Name check
    if (name === "") {
        alert("Please enter your name");
        return false;
    }

    // Email format check
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    // Mobile number check (10 digits)
    let mobilePattern = /^[0-9]{10}$/;
    if (!mobilePattern.test(mobile)) {
        alert("Please enter a valid 10-digit mobile number");
        return false;
    }

    // Gender check
    if (gender === "") {
        alert("Please select gender");
        return false;
    }

    // Course check
    if (course === "") {
        alert("Please enter course name");
        return false;
    }

    return true; // allow form submission
}
