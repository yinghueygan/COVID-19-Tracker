const selected = document.querySelector(".selected");
const optContainer = document.querySelector(".opt_container");

const optList = document.querySelectorAll(".opt");

selected.addEventListener("click", () => {
  optContainer.classList.toggle("active");
});
