// Script de debug para modalGaleria.js
console.log("Script modalGaleria.js cargado");

document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM cargado");
    
    const modal = document.getElementById('obraModal');
    const closeBtn = document.querySelector('.close1');
    
    console.log("Modal encontrado:", modal ? "SÍ" : "NO");
    console.log("Botón cerrar encontrado:", closeBtn ? "SÍ" : "NO");
    
    // Buscar pinceles y nombres
    const pinceles = document.querySelectorAll('.pincel');
    const nombresObras = document.querySelectorAll('.letrero span');
    
    console.log("Pinceles encontrados:", pinceles.length);
    console.log("Nombres encontrados:", nombresObras.length);
    
    // Función para mostrar modal
    function mostrarModal(element) {
        console.log("Intentando mostrar modal para:", element);
        
        if (!modal) {
            console.error("Modal no encontrado!");
            return;
        }
        
        const title = element.getAttribute('data-title');
        const autor = element.getAttribute('data-autor');
        const ubicacion = element.getAttribute('data-ubicacion');
        const anio = element.getAttribute('data-anio');
        const desc = element.getAttribute('data-desc');
        
        console.log("Datos obtenidos:", {title, autor, ubicacion, anio, desc});
        
        if (!title) {
            console.error("No se encontraron datos en el elemento");
            return;
        }
        
        // Buscar elementos del modal
        const modalTitle = document.getElementById('modal-title');
        const modalAutor = document.getElementById('modal-autor');
        const modalUbicacion = document.getElementById('modal-ubicacion');
        const modalAnio = document.getElementById('modal-anio');
        const modalDesc = document.getElementById('modal-desc');
        const modalImg = document.getElementById('modal-img');
        
        if (!modalTitle) {
            console.error("Elementos del modal no encontrados");
            return;
        }
        
        // Obtener imagen
        const cuadro = element.closest('.cuadro');
        const obraImg = cuadro ? cuadro.querySelector('.obra') : null;
        
        if (!obraImg) {
            console.error("Imagen de obra no encontrada");
            return;
        }
        
        // Llenar modal
        modalTitle.textContent = title;
        modalAutor.textContent = autor;
        modalUbicacion.textContent = ubicacion;
        modalAnio.textContent = anio;
        modalDesc.textContent = desc;
        modalImg.src = obraImg.src;
        modalImg.alt = title;
        
        // Mostrar modal
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        console.log("Modal mostrado");
    }
    
    // Event listeners para pinceles
    pinceles.forEach((pincel, index) => {
        console.log(`Configurando pincel ${index + 1}`);
        
        pincel.addEventListener('click', function(e) {
            e.preventDefault();
            console.log("Click en pincel:", this);
            mostrarModal(this);
        });
        
        pincel.style.cursor = 'pointer';
    });
    
    // Event listeners para nombres
    nombresObras.forEach((nombre, index) => {
        console.log(`Configurando nombre ${index + 1}`);
        
        nombre.addEventListener('click', function(e) {
            e.preventDefault();
            console.log("Click en nombre:", this);
            
            // Buscar el pincel en el mismo cuadro
            const cuadro = this.closest('.cuadro');
            const pincel = cuadro ? cuadro.querySelector('.pincel') : null;
            
            if (pincel) {
                mostrarModal(pincel);
            } else {
                console.error("No se encontró pincel para este nombre");
            }
        });
        
        nombre.style.cursor = 'pointer';
        nombre.style.transition = 'color 0.3s ease';
        
        // Hover effects
        nombre.addEventListener('mouseenter', function() {
            this.style.color = '#d4af37';
        });
        
        nombre.addEventListener('mouseleave', function() {
            this.style.color = '';
        });
    });
    
    // Cerrar modal
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            console.log("Cerrando modal");
            modal.style.display = 'none';
            document.body.style.overflow = '';
        });
    }
    
    // Cerrar con click fuera
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            console.log("Cerrando modal (click fuera)");
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
    
    // Cerrar con Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.style.display === 'block') {
            console.log("Cerrando modal (Escape)");
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
    
    console.log("Script configurado completamente");
});