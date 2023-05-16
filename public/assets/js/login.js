(function() {
    if (localStorage.token) {
        return location.href = "/portal.html";
    }
    
    const formLogin = document.querySelector("#login");
    const formRegister = document.querySelector("#register");
    
    const submitForm = function (type) {
        let data, URL = "https://api.app.digitales.com.tr/auth/";
    
        if (type === "login") {
            data = new FormData(formLogin);
            URL += type;
        } else if (type === "register") {
            data = new FormData(formRegister);
            URL += type;
        }
    
        const queryString = new URLSearchParams(data).toString();
    
        fetch(URL, {
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
                        location.href = "/portal.html";
                    });
    
                    localStorage.token = json.data.token;
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Failed!",
                        text: json.message || "Failed!",
                    });
                }
            }).catch(function () {
                Swal.fire({
                    icon: "error",
                    title: "Failed!",
                    text: "System error!",
                });
            });
    }
    
    formLogin.addEventListener("submit", (event) => [event.preventDefault(), submitForm("login")]);
    formRegister.addEventListener("submit", (event) => [event.preventDefault(), submitForm("register")]);
    
    // design
    
    const navItemLogin = document.querySelector(".login-nav__item.login");
    const navItemRegister = document.querySelector(".login-nav__item.register");
    const appLogin = document.querySelector("#login");
    const appRegister = document.querySelector("#register");
    const wrapper = document.querySelector(".wrapper");
    
    const showNavItem = async (type) => {
        wrapper.style.opacity = "0";
        wrapper.style.transform = "transform(0)";
    
        await new Promise(resolve => setTimeout(resolve, 300));
    
        if (type === "login") {
            navItemLogin.classList.add("active");
            navItemRegister.classList.remove("active");
    
            appLogin.style.display = null;
            appRegister.style.display = "none";
        } else {
            navItemRegister.classList.add("active");
            navItemLogin.classList.remove("active");
    
            appRegister.style.display = null;
            appLogin.style.display = "none";
        }
    
        wrapper.style.transform = "transform(1)";
        wrapper.style.opacity = 1;
    }
    
    navItemLogin.onclick = () => showNavItem("login");
    navItemRegister.onclick = () => showNavItem("register");
})();