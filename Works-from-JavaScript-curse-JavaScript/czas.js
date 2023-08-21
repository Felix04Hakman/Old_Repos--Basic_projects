function czas(){
    var dzisiaj = new Date();

    var d = dzisiaj.getDate();
    var m = dzisiaj.getMonth()+1;
    var r = dzisiaj.getFullYear();
    
    var h = dzisiaj.getHours();
    if(h<10) h = "0"+h;
    var i = dzisiaj.getMinutes();
    if(i<10) i = "0"+i;
    var s = dzisiaj.getSeconds();
    if(s<10) s = "0"+s;
   

    document.getElementById("zegar").innerHTML = d+"/"+m+"/"+r+" | "+h+":"+i+":"+s;
   
   setTimeout("czas()",1000);
}      