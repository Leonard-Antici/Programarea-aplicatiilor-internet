document.addEventListener("DOMContentLoaded", function() {
    
    var ceFacemNoiButton = document.getElementById("ce-facem-noi-button");

    //click pentru afișarea și ascunderea textului sub buton
    ceFacemNoiButton.addEventListener("click", function() {
        //  textul afișat sub buton
        var textContainer = document.getElementById("ce-facem-noi-text");

        
        if (textContainer) {
            
            textContainer.remove();
        } else {
            
            textContainer = document.createElement("div");
            textContainer.id = "ce-facem-noi-text";

            
            var servicii = [
                "Reparăm imprimante/copiatoare.",
                "Reparăm piesele defecte sau le înlocuim.",
                "Îmbunătățim calculatoarele pentru funcționarea în parametri actuali.",
                "Vindem echipamente IT, imprimante, copiatoare, calculatoare, laptopuri.",
                "Instalăm orice imprimantă pe USB sau în rețea, atât pentru printare cât și scanare.",
                "Diagnosticăm, defectele și erorile calculatorului/laptopului/imprimantei/rețelei de internet.",
                "Ne ocupăm de rețele de internet, configurăm router wireless, switch, conexiune de internet pe cablu la toate echipamentele din unitate.",
                "Avem experiență cu programele oferite de Autodesk, Microsoft, programe de contabilitate, certificate digitale, semnătură electronică, etc.",
                "Ne ocupăm de tot sistemul informatic, piese de laptop/calculator, erori la instalări de programe, semnătură digitală, certificate digitale, backup automat la calculatoare."
            ];

            // Adăugăm fiecare propoziție
            servicii.forEach(function(serviciu, index) {
                // paragraf nouu
                var p = document.createElement("p");
                p.textContent = serviciu;
                p.style.opacity = "0";
                setTimeout(function() {
                    textContainer.appendChild(p);
                    setTimeout(function() {
                        p.style.opacity = "1";
                    }, 500 * index); 
                }, 100 * index); 
            });

            ceFacemNoiButton.parentNode.insertBefore(textContainer, ceFacemNoiButton.nextSibling);
        }
    });
});
