const tabs = document.querySelectorAll('.tab-btn');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');

tabs.forEach(btn => {
    btn.onclick = function() {
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        if (this.dataset.tab === 'login') {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
        } else {
            loginForm.classList.add('hidden');
            registerForm.classList.remove('hidden');
        }
    };
});

document.querySelectorAll('.view-pass').forEach(btn => {
    btn.onclick = function() {
        const input = this.previousElementSibling;
        input.type = input.type === 'password' ? 'text' : 'password';
    };
});