if (document.getElementById('frm-banner')) {
  // Seleccionar el formulario y el campo de archivo
  const form = document.getElementById('frm-banner');
  
  
  
  // Agregar un listener de evento en el formulario para detectar la presentación
  form.addEventListener('submit', (event) => {
    // Detener la presentación del formulario predeterminada
    event.preventDefault();
    
    
    
  
  
    // Crear un objeto FormData para enviar el formulario
    const formData = new FormData(form);
  
    if (document.getElementById('image')) {
      // Obtener el archivo seleccionado
       // Validar si el archivo es una imagen
      const validImageTypes = ['image/jpeg', 'image/png', 'image/gif'];
      const fileInput = document.getElementById('image');
      const file = fileInput.files[0];
  
     
      // Validar si se ha seleccionado un archivo
      if (fileInput.files.length === 0) {
        Swal.fire({
          icon: 'error',
          title: 'Ups...',
          text: 'Por favor seleccione una imagen',
          confirmButtonText: 'Aceptar'
        });
        return;
      }
  
      if (!validImageTypes.includes(file.type)) {
        Swal.fire({
          icon: 'error',
          title: 'Ups...',
          text: 'Por favor seleccione un archivo de imagen válido (JPEG, PNG o GIF)',
          confirmButtonText: 'Aceptar'
        });
        return;
      }
  
      // Agregar el archivo seleccionado al objeto FormData
      formData.append('image', file);
    }
  
  
    // Enviar una solicitud POST utilizando axios
    axios.post('/admin/banner', formData)
      .then((response) => {
        console.log(response);
        Swal.fire({
          icon: 'success',
          title: '',
          text: 'Banner creado exitosamente',
          confirmButtonText: 'Aceptar'
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location = '/admin/banner';
          }
        });
      })
      .catch((error) => {
        console.error(error);
        Swal.fire({
          icon: 'error',
          title: 'Ups...',
          text: 'Error al crear el banner',
          confirmButtonText: 'Aceptar'
        });
      });
  });
}



