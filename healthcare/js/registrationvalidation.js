function validate(pForm) {
	let isValid = "";
	let errfname = document.getElementById("errorfname");
	let errlname = document.getElementById("errorlname");
	let errgen = document.getElementById("errorgender");


	if (pForm.fname.value === "") {
		errfname.innerHTML = "Please fill up the Firstname.";
		isValid = "Not Valid";
	}
	if (pForm.lname.value === "") {
		errlname.innerHTML = "Please fill up the Lastname";
		isValid = "Not Valid";
	}
	if (pForm.gender.value === "") {
		errgen.innerHTML = "Please fill up the Gender";
		isValid = "Not Valid";
	}
	
}