function validateForm() {

let name=document.getElementById("name").value;

let course = document.getElementById("course").value;

if (name == "" || course == "") {

alert("Please enter all details.");

return false;

}

return true;
}