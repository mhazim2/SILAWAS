// ==============
// Form Survey P1
// ==============

function check_p1() {
    if(document.getElementById('check_p1').checked) {
        document.getElementById('hidden_p1').style.display="block";
    } else {
        document.getElementById('hidden_p1').style.display="none";
        document.getElementById('hidden_p1').getElementsByTagName('input')[0].value=null;
    }
}