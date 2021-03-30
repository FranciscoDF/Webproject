document.getElementById("industries").onclick = function() {industries()}
window.addEventListener('popstate', function() {window.location.reload();})



function industries() {

var queryParams = new URLSearchParams(window.location.search);
//queryParams.set('url', 'industries/view');
//history.replaceState(null,null, '?'+queryParams.toString());

window.location.replace('')

    alert('ça marche ?');

}


//