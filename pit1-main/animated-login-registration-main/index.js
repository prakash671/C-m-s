let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)
var username ="Admin";
var password ="Admin";

var usr = document.getElementById("usr");
var pswrd = document.getElementById("psd");
var button = document.getElementById("but");

button.addEventListener("click", function(){
	if(usr.value === username && pswrd.value === password){
		window.open("../dashboard1/hod.html");
	}
	else{
		alert("invalid user");
	}
})
