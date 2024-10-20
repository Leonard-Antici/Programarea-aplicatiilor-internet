document.addEventListener("DOMContentLoaded", function() {
    
    var contactButtons = document.querySelectorAll('.card button');
  
   
    contactButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          
            var modal = document.getElementById("myModal");
  
            
            modal.style.display = "block";
        });
    });
  
   
    var closeButton = document.querySelector(".close");
  
   
    closeButton.addEventListener('click', function() {
        
        var modal = document.getElementById("myModal");
  
       
        modal.style.display = "none";
    });
  });
  


  