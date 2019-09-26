// =======================
// Form Umum Sumber Bahan
// =======================

function check_sumber_lokal() {
    if(document.getElementById('check_sumber_lokal').checked) {
        document.getElementById('hidden_sumber_lokal').style.display="block";
    } else {
        document.getElementById('hidden_sumber_lokal').style.display="none";
        document.getElementById('hidden_sumber_lokal').getElementsByTagName('input')[0].value=null;
    }
}

function check_sumber_impor() {
    if(document.getElementById('check_sumber_impor').checked) {
        document.getElementById('hidden_sumber_impor').style.display="block";
    } else {
        document.getElementById('hidden_sumber_impor').style.display="none";
        document.getElementById('hidden_sumber_impor').getElementsByTagName('input')[0].value=null;
    }
}

// ==============
// Form Survey P1
// ==============

function check_p1_1() {
    if(document.getElementById('check_p1_1').checked) {
        document.getElementById('hidden_p1_1').style.display="block";
    } else {
        document.getElementById('hidden_p1_1').style.display="none";
        document.getElementById('hidden_p1_1').getElementsByTagName('input')[0].value=null;
    }
}

function check_p1_2() {
    if(document.getElementById('check_p1_2').checked) {
        document.getElementById('hidden_p1_2').style.display="block";
    } else {
        document.getElementById('hidden_p1_2').style.display="none";
        document.getElementById('hidden_p1_2').getElementsByTagName('input')[0].value=null;
    }
}

function check_p1_3() {
    if(document.getElementById('check_p1_3').checked) {
        document.getElementById('hidden_p1_3').style.display="block";
    } else {
        document.getElementById('hidden_p1_3').style.display="none";
        document.getElementById('hidden_p1_3').getElementsByTagName('input')[0].value=null;
    }
}

function check_p1_4() {
    if(document.getElementById('check_p1_4').checked) {
        document.getElementById('hidden_p1_4').style.display="block";
    } else {
        document.getElementById('hidden_p1_4').style.display="none";
        document.getElementById('hidden_p1_4').getElementsByTagName('input')[0].value=null;
    }
}

function check_p1_5() {
    if(document.getElementById('check_p1_5').checked) {
        document.getElementById('hidden_p1_5').style.display="block";
    } else {
        document.getElementById('hidden_p1_5').style.display="none";
        document.getElementById('hidden_p1_5').getElementsByTagName('input')[0].value=null;
    }
}

// ==============
// Form Survey P2
// ==============

function check_p2() {
    if(document.getElementById('p2_1').checked) {
        document.getElementById('hidden_p2_2').style.display="none";
        document.getElementById('hidden_p2_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p2_1').style.display="block";
    } else if(document.getElementById('p2_2').checked) {
        document.getElementById('hidden_p2_1').style.display="none";
        var count_input = document.getElementById('hidden_p2_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p2_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p2_1').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p2_2').style.display="block";
    }
}

// ==============
// Form Survey P3
// ==============

function check_p3() {
    if(document.getElementById('p3_1').checked) {
        document.getElementById('hidden_p3_2').style.display="none";
        document.getElementById('hidden_p3_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p3_1').style.display="block";
    } else if(document.getElementById('p3_2').checked) {
        document.getElementById('hidden_p3_1').style.display="none";
        document.getElementById('hidden_p3_1').getElementsByTagName('input')[0].value=null;
        document.getElementById('p3_1_label').innerHTML="Pilih file...";
        document.getElementById('hidden_p3_2').style.display="block";
    }
}

document.getElementById('p3_1_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('p3_1_label').innerHTML=fileName;
});

// ==============
// Form Survey P4
// ==============

function check_p4() {
    document.getElementById('hidden_p4').style.display="block";
}

// ==============
// Form Survey P5
// ==============

function check_p5() {
    document.getElementById('hidden_p5').style.display="block";
}

// ==============
// Form Survey P6
// ==============

function check_p6() {
    document.getElementById('hidden_p6').style.display="block";
}

// ==============
// Form Survey P7
// ==============

function check_p7() {
    document.getElementById('hidden_p7').style.display="block";
}

// ==============
// Form Survey P8
// ==============

function check_p8() {
    document.getElementById('hidden_p8').style.display="block";
}

// ==============
// Form Survey P9
// ==============

function check_p9() {
    document.getElementById('hidden_p9').style.display="block";
}

// ==============
// Form Survey P10
// ==============

function check_p10() {
    document.getElementById('hidden_p10').style.display="block";
}

// ==============
// Form Survey P11
// ==============

function check_p11() {
    document.getElementById('hidden_p11').style.display="block";
}

// ==============
// Form Survey P12
// ==============

function check_p12() {
    document.getElementById('hidden_p12').style.display="block";
}

// ==============
// Form Survey P13
// ==============

function check_p13() {
    document.getElementById('hidden_p13').style.display="block";
}