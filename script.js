function validateRegister() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username.length < 3) {
        alert("Username harus minimal 3 karakter!");
        return false;
    }

    if (password.length < 6) {
        alert("Password harus minimal 6 karakter!");
        return false;
    }

    return true;
}

function validateLogin() {
    let username = document.getElementById("login-username").value;
    let password = document.getElementById("login-password").value;

    if (username.trim() === "" || password.trim() === "") {
        alert("Harap isi semua kolom!");
        return false;
    }

    return true;
}
