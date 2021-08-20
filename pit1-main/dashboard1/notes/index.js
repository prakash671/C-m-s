let checkbox = document.querySelector("input[name=theme]");

checkbox.addEventListener("change", function () {
  if (this.checked) {
    trans();
    document.documentElement.setAttribute("data-theme", "light");
  } else {
    trans();
    document.documentElement.setAttribute("data-theme", "dark");
  }
});

let trans = () => {
  console.log(document.documentElement);
  document.documentElement.classList.add("transition");
  window.setTimeout(() => {
    document.documentElement.classList.remove("transition");
  }, 1000);
};
function popup(){
  alert("Your complaint was registered")
}
