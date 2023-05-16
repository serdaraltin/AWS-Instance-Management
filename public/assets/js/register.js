if (localStorage.token) {
    location.href = "/profile.html";
}

const FormRegister = document.querySelector("#form-register");

FormRegister.addEventListener("submit", function (event) {
    event.preventDefault();

    const data = new FormData(this);
    const queryString = new URLSearchParams(data).toString();

    fetch("https://api.app.digitales.com.tr/auth/register", {
        method: 'post',
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: queryString,
        json: true,
    })
        .then(response => response.json())
        .then(json => {
            if (json.status) {
                Swal.fire({
                    icon: "success",
                    title: "Successfully!",
                    text: json.message
                }).then(() => {
                    location.href = "/profile.html";
                });

                localStorage.token = json.data.token;
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Failed!",
                    text: json.message || "Register failed!",
                });
            }
        }).catch(function () {
            Swal.fire({
                icon: "error",
                title: "Failed!",
                text: "System error!",
            });
        });
});