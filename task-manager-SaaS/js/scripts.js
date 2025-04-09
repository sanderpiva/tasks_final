function atualizarRegistro(codigo) {
  window.location.href =
    "../task-manager-SaaS/../crud/atualizar.php?codigo=" + codigo;
}

function enviarParaApagar(codigo) {
  const confirmar = confirm(
    "Tem certeza que deseja excluir o registro de codigo: " + codigo + "?"
  );
  if (confirmar) {
    window.location.href = "../crud/apagar.php?codigo=" + codigo;
  }
}

const mensagem = document.querySelector(".mensagem-resultado");
if (mensagem) {
  setTimeout(() => {
    mensagem.style.opacity = "0";
    mensagem.style.transition = "opacity 0.5s ease";
    setTimeout(() => {
      mensagem.remove();
      const novaURL =
        window.location.protocol +
        "//" +
        window.location.host +
        window.location.pathname;
      window.history.replaceState({}, document.title, novaURL);
    }, 500);
  }, 4000);
}
