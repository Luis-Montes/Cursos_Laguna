const cursosSelect = document.getElementById('cursos');
const precioInput = document.getElementById('precio');

cursosSelect.addEventListener('change', function() {
  const cursoSeleccionado = this.value;
  const precioCurso = this.options[cursoSeleccionado].getAttribute('data-precio');

  if (precioCurso) {
    precioInput.value = precioCurso;
  } else {
    precioInput.value = '0'; // Establecer un valor predeterminado si no hay precio disponible
  }
});
