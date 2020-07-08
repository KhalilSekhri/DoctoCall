require('./bootstrap');

function AfficherMasquer()
{
    divInfo = document.getElementById('divacacher');
    
    if (divInfo.style.display == 'none')
        divInfo.style.display = 'block';
    else
        divInfo.style.display = 'none';

}