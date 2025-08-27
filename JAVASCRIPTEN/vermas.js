function mostrarContenido() {
      const extra = document.getElementById('contenidoExtra');
      const btn = document.querySelector('.ver-mas-btn');

      if (extra.style.display === 'block') {
        extra.style.display = 'none';
        btn.textContent = 'Ver más';
      } else {
        extra.style.display = 'block';
        btn.textContent = 'Ver menos';
      }
}