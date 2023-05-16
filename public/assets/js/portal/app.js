(function (w) {
    const Portal = function () {
        this.elements = {};

        this.auth();
        this.initElements();
        this.initTimers();
        this.initEvents();
    }

    Portal.prototype.auth = function () {
        if (!localStorage.token) {
            w.location.href = "/";
        }
    }

    Portal.prototype.initElements = function () {
        this.elements = {
            header: {
                time: document.querySelector(".app-menu-content-header-section .time"),
                second: document.querySelector(".app-menu-content-header-section .second"),
            },
            sections: {
                projects: document.querySelector("#projects-section"),
            },
            buttons: {
                logout: document.querySelector("#sign-out-button"),
            }
        };
    }

    Portal.prototype.initTimers = function () {
        setInterval(() => {
            const date = new Date();
            const hour = date.getHours();
            let minute = date.getMinutes();
            minute = minute < 10 ? `0${minute}` : minute;

            let second = date.getSeconds();
            second = second < 10 ? `0${second}` : second;

            this.elements.header.time.innerText = `${hour}:${minute}`;
            this.elements.header.second.innerText = second;
        }, 100);
    }

    Portal.prototype.initEvents = function() {
        this.elements.buttons.logout.onclick = this.logout;
    }

    Portal.prototype.logout = function () {
        localStorage.clear();

        w.location.href = "/";
    }

    w.$ = new Portal;
})(window);