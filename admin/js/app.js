function showLoader() {
    document.getElementById('loader-container').style.display = 'block';
}

function hideLoader() {
    document.getElementById('loader-container').style.display = 'none';
}

function smallNotice(text, icon, timer = 3000) {
    Swal.fire({
        position: 'bottom-end',
        icon: icon,
        title: text,
        showConfirmButton: false,
        timer: timer,
        toast: true
    });
}

function dataMessage(data) {
    hideLoader();
    data == 'successful' ? smallNotice('İşlem Başarılı!', 'success') : smallNotice('İşlem Başarısız', 'error')
}

function setCommunication(form) {
    const file = 'db-transactions/communication-transactions.php';
    showLoader();
    $.ajax({
        url: file,
        type: 'POST',
        data: $(form).serialize(),
        success: (data) => {
            dataMessage(data)
        }
    })
}

function setAboutUs(form) {
    const file = 'db-transactions/aboutus-transactions.php';
    showLoader();
    $.ajax({
        url: file,
        type: 'POST',
        data: $(form).serialize(),
        success: (data) => {
            dataMessage(data);
        }
    })
}

function setSiteSettings(form){
    const file = 'db-transactions/settings-transactions.php';
    showLoader();
    $.ajax({
        url: file,
        type: 'POST',
        data: $(form).serialize(),
        success: (data) => {
            dataMessage(data);
        }
    })
}