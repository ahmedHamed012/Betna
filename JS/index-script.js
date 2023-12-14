document.getElementById("drop-down").onclick = function(){dropdown()};
function dropdown()
{
    if(document.getElementById("bubble").style.display == 'inline-block')
    document.getElementById("bubble").style.display='none';
    else
    document.getElementById("bubble").style.display='inline-block';

}