import Dropzone from "dropzone";

let dropzone = new Dropzone('#my-dropzone', {
    dictDefaultMessage: "Drop and upload your image",
    acceptedFiles: '.png,.jpg,.gif,.jpeg',
    maxFiles: 1,
    paramName: 'file',
    addRemoveLinks: true,
    uploadMultiple: false,
})

// * Eventos dropzone
dropzone.on('sending', function (file, xhr, formData) {
    console.log(formData);
})
dropzone.on('success', function (_, response) {
    console.log(response);
})

dropzone.on('error', function (_, message) {
    console.log(message)
})
dropzone.on('removedFile', function (_) {
    console.log('Archivo eliminado')
})