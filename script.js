document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('successo')) {
        Swal.fire({
            icon: 'success',
            title: 'Sucesso!',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('successo').value,
            position: 'top', 
            toast: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'login.php';
            }
        });
    } 
    else if (document.getElementById('erro_senha'))
    {
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('erro_senha').value,
            position: 'top', 
            toast: true
        });
    }

    else if(document.getElementById('erro_email')){
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('erro_email').value,
            position: 'top', 
            toast: true
        })
    }

    else if(document.getElementById('erro_login')){
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('erro_login').value,
            position: 'top', 
            toast: true
        })
    }

    if (document.getElementById('sucesso-email-senha')) {
        Swal.fire({
            icon: 'success',
            title: 'Sucesso!',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('sucesso-email-senha').value,
            position: 'top', 
            toast: true
        })
    }
    if (document.getElementById('erro-email-senha')) {
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('erro-email-senha').value,
            position: 'top', 
            toast: true
        })
    } 
    if (document.getElementById('sucesso-alterar-senha')) {
        Swal.fire({
            icon: 'success',
            title: 'Sucesso!',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('sucesso-alterar-senha').value,
            position: 'top', 
            toast: true
        })
    } if (document.getElementById('erro-alterar-senha')) {
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('erro-alterar-senha').value,
            position: 'top', 
            toast: true
        })
    } 
    
    
}

);
