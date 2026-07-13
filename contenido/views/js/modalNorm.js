function mostrarNom(numero) {
    if (numero === 1) {
        const myModal = new bootstrap.Modal(document.getElementById('politicaLaboral'), {
            backdrop: true
        });
        myModal.show();
    }
    if (numero === 2) {
        const myModal = new bootstrap.Modal(document.getElementById('grupoTrabajoILND'), {
            backdrop: true
        });
        myModal.show();
    }
    if (numero === 3) {
        const myModal = new bootstrap.Modal(document.getElementById('vidaLaboral'), {
            backdrop: true
        });
        myModal.show();
    }
    if (numero === 4) {
        const myModal = new bootstrap.Modal(document.getElementById('hostigamientoyacoso'), {
            backdrop: true
        });
        myModal.show();
    }
    if (numero === 5) {
        const myModal = new bootstrap.Modal(document.getElementById('capacitacionaccesibilidad'), {
            backdrop: true
        });
        myModal.show();
    }
    if (numero === 6) {
        const myModal = new bootstrap.Modal(document.getElementById('accionespersonal'), {
            backdrop: true
        });
        myModal.show();
    }
}