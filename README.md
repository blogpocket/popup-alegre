# popup-alegre
Muestra un pop-up en el ángulo inferior izquierdo de la pantalla en la versión de escritorio.
#Explicación del CSS:
## Estilos básicos:
- Posiciona el pop-up en el ángulo inferior izquierdo.
- Establece un tamaño fijo de 400x200 píxeles.
- Utiliza overflow: auto para manejar el contenido que exceda el tamaño.
## Media Queries para responsividad:
- A medida que el ancho de la pantalla se reduce, el pop-up ajusta su width y height.
- Por debajo de 500px, el pop-up ocupa el 100% del ancho y ajusta su altura automáticamente.
- Por debajo de 768px, el pop-up ocupa el 50% del ancho.
# Reemplazar el ID de la página
- En el archivo popup-responsivo.php, reemplaza 123 con el ID de la página que contiene el contenido que deseas mostrar en el pop-up.
# Activar el plugin
- Sube la carpeta completa popup-responsivo a wp-content/plugins/ en tu instalación de WordPress.
- Ve al panel de administración de WordPress, navega a Plugins y activa el plugin Popup Responsivo.
# Contenido adaptado
- Como el contenido es creado con el editor de bloques de WordPress, es inherentemente responsive y se adaptará al tamaño del contenedor.
# Versión de escritorio
- Utilizamos la función wp_is_mobile() para detectar dispositivos móviles y evitar mostrar el pop-up en ellos.
- Las media queries en el CSS aseguran que el pop-up se adapte a diferentes tamaños de pantalla en escritorio.
# Estilos adicionales
- Si deseas agregar estilos específicos para el contenido dentro del pop-up, puedes hacerlo en el archivo popup-responsivo.css o directamente en el editor de bloques al editar la página.
# Comportamiento del pop-up
El pop-up se puede cerrar mediante el botón de cierre. La funcionalidad se maneja en el JavaScript.
Consideraciones finales
# Pruebas
- Asegúrate de probar el plugin en diferentes navegadores y tamaños de pantalla para verificar su funcionamiento. No instales el plugin en un entorno de producción hasta que no estés seguro de que funciona y es compatible con el resto de plugins de tu WordPress.
# Seguridad
- Siempre valida y escapa los datos cuando manipules contenido en WordPress para prevenir vulnerabilidades.
# Optimización
- Minimiza los archivos CSS y JavaScript en producción para mejorar el rendimiento.
