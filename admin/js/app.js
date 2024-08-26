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

function ChangeTextArea() {
    $('#bridge').val($('div[role=textbox]').html())
}

function addPhoto() {
    let count = $('#photos div[class*=col-md-4]').length + 1;
    let photoField = '  <div class="form-group col-md-4">\n' +
        '                    <label for="path' + count + '">Fotoğraf-' + count + '</label>\n' +
        '                    <input type="file" id="path' + count + '" name="path' + count + '" class="form-control-file">\n' +
        '                    <label for="description' + count + '">Alt  Yazı</label>\n' +
        '                    <input type="text" id="description' + count + '" name="description' + count + '" class="form-control" />\n' +
        '                </div>'
    let currentPhotoCount = $('#photos').html();
    currentPhotoCount += photoField;
    $('#photos').html(currentPhotoCount);
    $('#photoLength').val(count)
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

function setSiteSettings(form) {
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

function setAddModel(form) {
    form = form instanceof jQuery ? form[0] : form;
    const file = 'db-transactions/addmodel-transactions.php';
    let formData = new FormData(form);
    showLoader()
    $.ajax({
        url: file,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: (data) => {
            dataMessage(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error:', textStatus, errorThrown);
        }
    })
}

function setDeleteModel(id) {
    const file = 'db-transactions/deletemodel-transactions.php?id=' + id;
    showLoader();
    $.ajax({
        url: file,
        type: 'GET',
        success: (data) => {
            dataMessage();
            $.ajax({
                url: 'model-listele.php',
                type: 'GET',
                success: (response) => {
                    const $responseHtml = $(response);
                    const $containerElements = $responseHtml.find('.container').html();
                    $('.container').html($containerElements);
                }
            })
        }
    })
}

function setDeleteModelPhoto(photoId, productId) {
    const file = 'db-transactions/deletemodel-transactions.php?id=' + photoId + '&field=photo';
    showLoader();
    $.ajax({
        url: file,
        type: 'GET',
        success: (data) => {
            dataMessage();
            $.ajax({
                url: 'model-duzenle.php?id='+productId,
                type: 'GET',
                success: (response) => {
                    const $responseHtml = $(response);
                    const $containerElements = $responseHtml.find('.container').html();
                    $('.container').html($containerElements);
                }
            })
        }
    })
}

function setPhotoDescription(id){
    const inputVal = $('#description_'+id).val();
    const file = 'db-transactions/editphotodescription-transactions.php?id='+id;
    showLoader();
    $.ajax({
        url: file,
        type: 'POST',
        data:{
            'description': inputVal
        },
        success: (data)=>{
            dataMessage(data);
        }
    });
}

function setEditModel(form){
    form = form instanceof jQuery ? form[0] : form;
    const file = 'db-transactions/editmodel-transactions.php';
    let formData = new FormData(form);
    showLoader()
    $.ajax({
        url: file,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: (data) => {
            dataMessage(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error:', textStatus, errorThrown);
        }
    })
}