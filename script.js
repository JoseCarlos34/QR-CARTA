// script.js
window.onload = function () {
  setTimeout(() => {
    document.getElementById("modal").style.display = "block";
  }, 3000);

  document.getElementById("closeBtn").onclick = function () {
    document.getElementById("modal").style.display = "none";
  };
};
