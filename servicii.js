document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById("modal");
    var closeButton = document.querySelector(".close");
    var modalInfo = document.getElementById("modal-info");

    var serviceDetails = {
        windows11: {
            title: "Instalare Windows 11",
            pret: "200 RON",
            descriere: "Servicii complete de instalare și configurare Windows 11."
        },
        windows10: {
            title: "Instalare Windows 10",
            pret: "180 RON",
            descriere: "Instalare și configurare Windows 10."
        },
        windows81: {
            title: "Instalare Windows 8.1",
            pret: "160 RON",
            descriere: "Instalare și configurare Windows 8.1."
        },
        windows7: {
            title: "Instalare Windows 7",
            pret: "140 RON",
            descriere: "Instalare și configurare Windows 7."
        },
        ubuntu: {
            title: "Instalare Ubuntu",
            pret: "150 RON",
            descriere: "Instalare și configurare Ubuntu."
        },
        centos: {
            title: "Instalare CentOS",
            pret: "150 RON",
            descriere: "Instalare și configurare CentOS."
        },
        kateos: {
            title: "Instalare Kate OS",
            pret: "150 RON",
            descriere: "Instalare și configurare Kate OS."
        },
        curatare: {
            title: "Curățare Laptop",
            pret: "100 RON",
            descriere: "Curățare completă a laptopului, inclusiv eliminarea prafului și optimizarea fluxului de aer."
        },
        ssd: {
            title: "Upgrade SSD/M.2",
            pret: "200 RON",
            descriere: "Upgrade la SSD/M.2 pentru performanță sporită."
        },
        pasta: {
            title: "Înlocuire Pastă Termică",
            pret: "80 RON",
            descriere: "Înlocuirea pastei termice pentru o mai bună disipare a căldurii."
        },
        tastatura: {
            title: "Schimbare Tastatură",
            pret: "150 RON",
            descriere: "Schimbarea tastaturii laptopului."
        }
    };

    document.querySelectorAll(".service-link").forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            var service = link.getAttribute("data-service");
            var details = serviceDetails[service];
            modalInfo.innerHTML = `
                <h2>${details.title}</h2>
                <p><strong>Preț:</strong> ${details.pret}</p>
                <p>${details.descriere}</p>
            `;
            modal.style.display = "block";
            window.scrollTo(0, 0); 
        });
    });

    closeButton.addEventListener("click", function() {
        modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});


