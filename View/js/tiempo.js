const yearElement = document.getElementById("year");
const currentYear = new Date().getFullYear();
yearElement.textContent = currentYear;
function redireccionar() {
  window.location.href = "../Controller/index.php";
}



 