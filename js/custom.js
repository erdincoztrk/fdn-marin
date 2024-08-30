// get current year
(function () {
    var year = new Date().getFullYear();
    document.querySelector("#currentYear").innerHTML = year;
})();

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

function hakkimizdaGit() {
    // Hedef bölüme yumuşak kayma
    document.getElementById('hakkimizda').scrollIntoView({behavior: 'smooth'});
}

function isMobile() {
    if (window.innerWidth <= 768)
        return true;
    else
        return false;
}

function logoMove() {
    const mobileControl = isMobile();
    if (mobileControl) {

        document.getElementsByClassName('navbar-brand')[0].querySelector('img').style.display = 'none';

        document.getElementById('logoDetail').querySelector('h1').style.display = 'none';

        document.getElementById('logo').innerHTML =
            '<img src="images/fdn-marine-Photoroom-beyaz.png">'
        ;
    }
}

function sendMessage(form, id) {
    console.log($('#' + id + ' input[name=name]').val())
    if($('#' + id + ' input[name=name]').val() == ''){
        $('#' + id + ' input[name=name]').css('border', '3px solid red')
    }
   else if($('#' + id + ' input[name=surname]').val() == ''){
        $('#' + id + ' input[name=surname]').css('border', '3px solid red')
    }
   else if($('#' + id + ' input[name=phone]').val() == ''){
        $('#' + id + ' input[name=phone]').css('border', '3px solid red')
    }
   else if($('#' + id + ' input[name=detail]').val() == ''){
        $('#' + id + ' [id=detail]').css('border', '3px solid red')
    }
   else{
       const file = 'admin/db-transactions/sendmessage-transactions.php';
       $.ajax({
           url:file,
           type:'POST',
           data:$(form).serialize(),
           success:(data) => {
               data == 'successful' ? smallNotice('Mesaj Gönderildi', 'success') : smallNotice('Mesaj Gönderilemedi!', 'error')
               if(data == 'successful'){
                   $('#' + id + ' input').val('');
                   $('#' + id + ' textarea').val('');
               }
        }
       })
    }
    smallNotice('Zorunlu alanlar boş geçilemez!', 'error');
}