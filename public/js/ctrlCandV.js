document.addEventListener('copy', function(event) {
    event.preventDefault();
    alert('La acción de copiar está bloqueada.');
});

// Prevenir pegar
document.addEventListener('paste', function(event) {
    event.preventDefault();
    alert('La acción de pegar está bloqueada.');
});

// Prevenir selección de texto
document.addEventListener('selectstart', function(event) {
    event.preventDefault();
});