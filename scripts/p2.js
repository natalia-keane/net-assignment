//620077636
window.onload=function(){

    var myform = document.querySelector('#myForm');
    myform.addEventListener("submit", function () {

      var cc = document.forms["myForm"]["Course Code"];
      var ct = document.forms["myForm"]["Course Title"];
      var d = document.forms["myForm"]["Course Discipline"];
      var l = document.forms["myForm"]["Level"];
      var cs = document.forms["myForm"]["Credits"];
      var s = document.forms["myForm"]["Semester"];
      var ddown = document.forms["myForm"]["ddown"];
	console.log('form submitted');
	submit.preventDefault;
alert("bye");
      validateForm(cc,ct,d,l,cs,s);

	if(validateForm !="false"){
		errorWatch(cc,d,cs,s);
	}


    });

}

function validateForm(cc,ct,d,l,cs,s) {

    if (cc.value == "") {
        displayErrorMessage(cc, "You must fill in your Course code");
        formField.classList.add("error");
demo();
        return false;
    }
else{  formField.setAttribute("class", "valid");
}
    if (ct.value =="") {
        displayErrorMessage(ct, "You must fill in your Course Title");
        formField.classList.add("error");
demo();
        return false;
    }else{  formField.setAttribute("class", "valid");
}
	if (d.value =="") {
        displayErrorMessage(d, "You must fill in your Course Discipline");
        formField.classList.add("error");
demo();
        return false;
    }else{  formField.setAttribute("class", "valid");
}
	if (l.value =="") {
        displayErrorMessage(l, "You must fill in your Level");
        formField.classList.add("error");
demo();
        return false;
    }else{  formField.setAttribute("class", "valid");
}
	if (cs.value =="") {
        displayErrorMessage(cs, "You must fill in your Credits");
        formField.classList.add("error");
demo();
        return false;
    }else{  formField.setAttribute("class", "valid");
}
	if (s.value =="") {
        displayErrorMessage(s, "You must fill in your Semester");
        formField.classList.add("error");
demo();
        return false;
    }else{  formField.setAttribute("class", "valid");
}
	if (ddown.value== 0){
        displayErrorMessage(s, "You must fill in your Author ID");
        formField.classList.add("error");
demo();
        return false;
    }
}

async function demo() {
  await sleep(36000);
}
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function errorWatch(cc,d,cs,s){
  //used to test the regular expression against the variable received
  let code = /^[0-9]{4}$/;
  let sem = /^[1-3]{1}$/;
  let disc = /^[a-zA-Z]{4}$/;

  if (code.test(cc) == false) {
    displayErrorMessage(cc,"Error");
    formField.classList.add("error");
  }
  if (disc.test(d) == false){
    displayErrorMessage(disc,"Error");
    formField.classList.add("error");
  }
  if (cs<0 &&  cs>=8) {
    displayErrorMessage(cs,"Error");
    formField.classList.add("error");
  }
  if(sem.test(s) == false){
    displayErrorMessage(s,"Error");
    formField.classList.add("error");
  }

}

function displayErrorMessage(formField, message) {
  formField.classList.add("error");
  var errorMessageText = document.createTextNode(message);
  var errorMessage = document.createElement('span');
  errorMessage.classList.add("error");
  errorMessage.appendChild(errorMessageText);
  formField.insertAdjacentElement("afterEnd", errorMessage);
}
function validation() {
  validateForm(cc,ct,d,l,cs,s);
  errorWatch(cc,d,cs,s);
}
