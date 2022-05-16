var mojedugme = document.getElementById('forma');
/*mojedugme.addEventListener("click", function(event){
       event.preventDefault()
   });*/
   mojedugme.onsubmit = function(event){
    event.preventDefault()
    zahvalnica();
   };
  
function zahvalnica() {
   var ime = document.getElementById('ime').value.trim();
   var mejl = document.getElementById('email').value.trim();
	addClass(document.getElementById('hvala'),'show');
}

 function addClass(el, classNameToAdd){
   el.className += ' ' + classNameToAdd;   
} 
function toggleFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}