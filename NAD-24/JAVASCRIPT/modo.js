if (localStorage.getItem('theme-toggle') === 'enabled') {
    document.body.classList.add('data-theme');
}
// JavaScript para manejar el cambio de tema
 document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    
    // Comprobar si hay una preferencia guardada en localStorage
    const savedTheme = localStorage.getItem('theme');
    
    // Aplicar el tema guardado o el tema preferido del sistema
    if (savedTheme) {
        body.setAttribute('data-theme', savedTheme);
    } else {
        // Si no hay tema guardado, usar la preferencia del sistema
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        body.setAttribute('data-theme', prefersDark ? 'dark' : 'light');
    }
    
    // Alternar tema cuando se hace clic en el botón
    themeToggle.addEventListener('click', function() {
        const currentTheme = body.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        // Aplicar nuevo tema
        body.setAttribute('data-theme', newTheme);
        
        // Guardar preferencia en localStorage
        localStorage.setItem('theme', newTheme);
    });
});