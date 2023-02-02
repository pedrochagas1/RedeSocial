const toggleBtn = document.getElementById("toggle-btn");
let isWhite = true;

toggleBtn.addEventListener("click", () => {
  if (isWhite) {
    document.body.style.background = "black";
    toggleBtn.textContent = "Modo claro";
    isWhite = false;
  } else {
    document.body.style.background = "white";
    toggleBtn.textContent = "Modo Escuro";
    isWhite = true;
  }
});

