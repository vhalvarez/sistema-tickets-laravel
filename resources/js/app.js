import './bootstrap';

// $(document).ready(function () {
//     // Obtener las opciones originales para estado, municipio y parroquia
//     var estadosOriginales = $('#estado_id').html();
//     var municipiosOriginales = $('#municipio_id').html();
//     var parroquiasOriginales = $('#parroquia_id').html();

//     // Manejar el cambio en el selector de país
//     $('#pais_id').change(function () {
//         var paisId = $(this).val();

//         // Restaurar las opciones originales
//         $('#estado_id').html(estadosOriginales);
//         $('#municipio_id').html(municipiosOriginales);
//         $('#parroquia_id').html(parroquiasOriginales);

//         // Filtrar las opciones según el país seleccionado
//         if (paisId) {
//             $('#estado_id option').each(function () {
//                 if ($(this).data('pais') != paisId) {
//                     $(this).remove();
//                 }
//             });

//             $('#municipio_id option').each(function () {
//                 if ($(this).data('pais') != paisId) {
//                     $(this).remove();
//                 }
//             });

//             $('#parroquia_id option').each(function () {
//                 if ($(this).data('pais') != paisId) {
//                     $(this).remove();
//                 }
//             });

//             $('#estado_id').val(1);
//                 $('#municipio_id').val(1);
//                 $('#parroquia_id').val(1);
//         }
//     });
// });
