document.addEventListener("DOMContentLoaded", function () {
  const item1Btn = document.getElementById("item1-btn");
  const item2Btn = document.getElementById("item2-btn");
  const item3Btn = document.getElementById("item3-btn");
  const item3Btn2 = document.getElementById("item3-btn2");
  const item1 = document.getElementById("item1");
  const item2 = document.getElementById("item2");
  const item3 = document.getElementById("item3");

  item1Btn.addEventListener("click", function () {
    if (item1.classList.contains("hidden")) {
      item1.classList.remove("hidden"); // Mostra o Item 1
      item2.classList.add("hidden"); // Oculta o Item 2
    } else {
      item1.classList.add("hidden"); // Oculta o Item 1
    }
  });

  item2Btn.addEventListener("click", function () {
    if (item2.classList.contains("hidden")) {
      item2.classList.remove("hidden"); // Mostra o Item 2
      item1.classList.add("hidden"); // Oculta o Item 1
    } else {
      item2.classList.add("hidden"); // Oculta o Item 2
    }
  });
  // Função para verificar a largura da tela e mostrar/esconder o item 3
  // Função para abrir o item 3
  function openItem3() {
    if (window.innerWidth < 1024) {
      item3.classList.remove("hidden"); // Mostra o item 3
      item3Btn.classList.add("hidden"); // Esconde o botão "Abrir"
      item3Btn2.classList.remove("hidden"); // Mostra o botão "fechar"
    }
  }

  // Função para fechar o item 3
  function closeItem3() {
    item3.classList.add("hidden"); // Esconde o item 3
    item3Btn.classList.remove("hidden"); // Mostra o botão "Abrir"
    item3Btn2.classList.add("hidden"); // Esconde o botão "Fechar"
  }

  // Adicionar eventos de clique aos botões
  item3Btn.addEventListener("click", openItem3);
  item3Btn2.addEventListener("click", closeItem3);

  // Garantir que o item 3 esteja escondido se a largura da tela for menor que 1000px
  window.addEventListener("resize", () => {
    if (window.innerWidth >= 1000) {
      item3.classList.add("hidden"); // Esconde o item 3
      item3Btn.classList.remove("hidden"); // Mostra o botão "Abrir"
      item3Btn2.classList.add("hidden"); // Esconde o botão "Fechar"
    }
  });
});
