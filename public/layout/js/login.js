const signinBtn = document.querySelector('.btn__login');
const signupBtn = document.querySelector('.btn__logup');
const formBx = document.querySelector('.login__form');

if (signupBtn) {
    signupBtn.onclick = () => {
        formBx.classList.add('active');
    };
}

if (signinBtn) {
    signinBtn.onclick = () => {
        formBx.classList.remove('active');
    };
}