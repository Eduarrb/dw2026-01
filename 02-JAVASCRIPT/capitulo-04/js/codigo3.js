const passInput = document.querySelector('input[type=password]');
const icon = document.querySelector('i');

passInput.addEventListener('input', function(){
    // console.log('ingresaste texto');
    // console.log(this);
    if(this.value.length > 0) {
        icon.classList.add('show');
    } else {
        icon.classList.remove('show');
    }

    if(this.value.length < 6) {
        this.classList.add('alert');
        this.classList.remove('success');
    } else {
        this.classList.add('success');
        this.classList.remove('alert');
    }
});

icon.addEventListener('mousedown', function(){
    passInput.setAttribute('type', 'text');
});

icon.addEventListener('mouseup', function(){
    passInput.setAttribute('type', 'password');
});