if (document.getElementById('frm-product')) {
    const form_product = document.getElementById('frm-product');
    
    // Agregar un listener de evento en el formulario para detectar la presentación
    form_product.addEventListener('submit', (event) => {
      // Detener la presentación del formulario predeterminada
      event.preventDefault();
    
      // Crear un objeto FormData para enviar el formulario
      const formData = new FormData(form_product);
    
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
        axios.post('/admin/product', formData)
        .then((response) => {
          console.log(response);
          Swal.fire({
            icon: 'success',
            title: '',
            text: 'Producto creado exitosamente',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location = '/admin/product';
            }
          });
        })
        .catch((error) => {
          console.error(error);
          Swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Error al crear el producto',
            confirmButtonText: 'Aceptar'
          });
        });
    
    });
}
