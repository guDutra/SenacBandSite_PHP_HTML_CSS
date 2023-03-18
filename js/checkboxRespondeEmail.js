

var checkboxes = document.querySelectorAll("#checkbox");
var campo = document.querySelector("#campo");
for(let i = 0; i < checkboxes.length; i++) {
    var checkbox = checkboxes[i];

    checkbox.addEventListener("change", (e) => {

        if (e.target.checked) {
      
           
        
          
          
          console.log("Checkbox is checked");
      
        } else {
      
          console.log("Checkbox is not checked..");
      
        }
      
      });

}
