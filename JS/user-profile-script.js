
document.getElementById("gi").onclick = function(){myfunction3()};
function myfunction3()
{
    document.getElementById("g-i").style.display="block";
    document.getElementById("error404").style.display="none";
    document.getElementById("r-u").style.display="none";
    document.getElementById("e-p").style.display="none";
    document.getElementById("histr").style.display="none";
}
document.getElementById("ep").onclick = function(){myfunction4()};
function myfunction4()
{
    document.getElementById("e-p").style.display="block";
    document.getElementById("error404").style.display="none";
    document.getElementById("g-i").style.display="none";
    document.getElementById("r-u").style.display="none";
    document.getElementById("histr").style.display="none";
}
document.getElementById("ru").onclick = function(){myfunction5()};
function myfunction5()
{
    document.getElementById("error404").style.display="block";
    document.getElementById("g-i").style.display="none";
    document.getElementById("e-p").style.display="none";
    document.getElementById("histr").style.display="none";
}
document.getElementById("hist").onclick = function(){myfunction6()};
function myfunction6()
{
    document.getElementById("error404").style.display="block";
    document.getElementById("r-u").style.display="none";
    document.getElementById("e-p").style.display="none";
    document.getElementById("g-i").style.display="none";
}