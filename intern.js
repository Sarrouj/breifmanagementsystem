let currentUrlInput = document.querySelector('.urlInput');
let currentSelect = document.getElementById('CurrentStatus');
let passedSelect = document.getElementById('passedStatus');
let passedUrlInput = document.querySelector('.passedUrlInput');

currentSelect.addEventListener('change', ()=>{
    if(currentSelect.value == 'Done'){
        currentUrlInput.classList.remove('hidden');
    }else{
        currentUrlInput.classList.add('hidden');
    }
})

passedSelect.addEventListener('change', ()=>{
    if(passedSelect.value == 'Done'){
        passedUrlInput.classList.remove('hidden');
    }else{
        passedUrlInput.classList.add('hidden');
    }
})

