document.addEventListener("DOMContentLoaded", function() {
    var verticalMenu = document.getElementById("verticalMenu");
    var messageBox = document.getElementById("messageBox");
    var messageText = document.getElementById("messageText");

    function showMessage(message) {
        messageText.innerText = message;
        messageBox.classList.remove("hidden");
        messageBox.style.display = "block";
        setTimeout(function() {
            messageBox.style.display = "none";
        }, 3000);
    }


    showMessage("Bine ați venit!");
});
