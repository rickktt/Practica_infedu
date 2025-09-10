// Activar tarjeta al hacer clic
  document.querySelectorAll('.art-class').forEach(card => {
    card.addEventListener('click', function (e) {
      e.stopPropagation();

      //Cerrar tarjetas
      document.querySelectorAll('.art-class.activa').forEach(activeCard => {
        if (activeCard !== this) {
          activeCard.classList.remove('activa');
        }
      });

      this.classList.toggle('activa');
    });
  });

  //Click fuera de la tarjeta
  document.addEventListener('click', function () {
    document.querySelectorAll('.art-class.activa').forEach(card => {
      card.classList.remove('activa');
    });
  });