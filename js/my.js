document.getElementById('delete-bill').onclick = function () {
    if (!confirm('Are you sure?')) {
        return false;
    }
}