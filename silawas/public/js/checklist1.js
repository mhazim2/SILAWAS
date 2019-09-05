// ==============
// Form Survey B1
// ==============

function check_b1_niu() {
    if(document.getElementById('check_b1_niu').checked) {
        document.getElementById('hidden_b1_niu').style.display="block";
    } else {
        document.getElementById('hidden_b1_niu').style.display="none";
    }
}

function check_b1_npwp() {
    if(document.getElementById('check_b1_npwp').checked) {
        document.getElementById('hidden_b1_npwp').style.display="block";
    } else {
        document.getElementById('hidden_b1_npwp').style.display="none";
    }
}

function check_b1_siup() {
    if(document.getElementById('check_b1_siup').checked) {
        document.getElementById('hidden_b1_siup').style.display="block";
    } else {
        document.getElementById('hidden_b1_siup').style.display="none";
    }
}

function check_b1_nib() {
    if(document.getElementById('check_b1_nib').checked) {
        document.getElementById('hidden_b1_nib').style.display="block";
    } else {
        document.getElementById('hidden_b1_nib').style.display="none";
    }
}

// ==============
// Form Survey B2
// ==============

function check_b2() {
    if(document.getElementById('b2_1').checked) {
        document.getElementById('hidden_b2').style.display="block";
    } else if(document.getElementById('b2_2').checked) {
        document.getElementById('hidden_b2').style.display="none";
    }
}

document.getElementById('b2_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('b2_label').innerHTML = fileName;
});