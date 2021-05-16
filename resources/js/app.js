require('./bootstrap');

require('alpinejs');

handleDelete = function(id) {
    console.log(id);
    var categoryDeleteModal = new bootstrap.Modal(document.getElementById('categoryDeleteModal'));
    var categoryDeleteForm = document.getElementById('categoryDeleteForm');
    categoryDeleteModal.show();
    categoryDeleteForm.action = "/categories/" + id;
}