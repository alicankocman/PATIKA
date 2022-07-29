let info =document.querySelector("#myName")
let isim=prompt("Lütfen isminizi giriniz!")
info.innerHTML += `${isim}`


function tarihsaat(){
    let  date = new Date().toLocaleString('tr-TR'); 
    document.getElementById('myClock').innerHTML=date

}
setInterval(tarihsaat, 1000);