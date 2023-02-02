const form = document.getElementById('denuncia_form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const urlDaImagem = document.getElementById('url_imagem').value;
  const descricaoDenuncia = document.getElementById('descricao_denuncia').value;

  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'denunciar-imagem.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };
  xhr.send(`url_imagem=${urlDaImagem}&descricao_denuncia=${descricaoDenuncia}`);
});