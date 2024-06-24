// resources/js/app.js

document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;
    body.classList.remove('fade-enter');
    window.addEventListener('beforeunload', function() {
        body.classList.add('fade-leave-active');
    });
});
