// get current year
(function () {
    var year = new Date().getFullYear();
    document.querySelector("#currentYear").innerHTML = year;
})();



function hakkimizdaGit(){
        // Hedef bölüme yumuşak kayma
        document.getElementById('hakkimizda').scrollIntoView({ behavior: 'smooth' });
}

function isMobile(){
    if(window.innerWidth <= 768)
        return true;
    else
        return false;
}

function logoMove(){
    const mobileControl = isMobile();
    if(mobileControl){

        document.getElementsByClassName('navbar-brand')[0].querySelector('img').style.display = 'none';

        document.getElementById('logoDetail').querySelector('h1').style.display = 'none';

        document.getElementById('logo').innerHTML =
            '<img src="images/fdn-marine-Photoroom-beyaz.png">'
        ;
    }
}
