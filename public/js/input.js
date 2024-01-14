let formGroups = document.getElementsByClassName('form-group');

Array.from(formGroups).forEach(formGroup => {
    if(formGroup.querySelector('input').value != ""){
        formGroup.querySelector('.form-icon').classList.add("text-gray-600");
    }

    formGroup.querySelector('input').addEventListener('focus',() => {
        formGroup.querySelector('.form-icon').classList.add("text-gray-600");
    });

    formGroup.querySelector('input').addEventListener('blur',() => {
        if(formGroup.querySelector('input').value != ""){
            formGroup.querySelector('.form-icon').classList.add("text-gray-600");
        }else{
            formGroup.querySelector('.form-icon').classList.remove("text-gray-600");
        }

    });
});