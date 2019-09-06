// ==============
// Form Survey P1
// ==============

function check_p1_niu() {
    if(document.getElementById('check_p1_niu').checked) {
        document.getElementById('hidden_p1_niu').style.display="block";
    } else {
        document.getElementById('hidden_p1_niu').style.display="none";
        document.getElementById('hidden_p1_niu').getElementsByTagName('input')[0].value=null;
    }
}

function check_p1_npwp() {
    if(document.getElementById('check_p1_npwp').checked) {
        document.getElementById('hidden_p1_npwp').style.display="block";
    } else {
        document.getElementById('hidden_p1_npwp').style.display="none";
        document.getElementById('hidden_p1_npwp').getElementsByTagName('input')[0].value=null;
    }
}

function check_p1_siup() {
    if(document.getElementById('check_p1_siup').checked) {
        document.getElementById('hidden_p1_siup').style.display="block";
    } else {
        document.getElementById('hidden_p1_siup').style.display="none";
        document.getElementById('hidden_p1_siup').getElementsByTagName('input')[0].value=null;
    }
}

function check_p1_nib() {
    if(document.getElementById('check_p1_nib').checked) {
        document.getElementById('hidden_p1_nib').style.display="block";
    } else {
        document.getElementById('hidden_p1_nib').style.display="none";
        document.getElementById('hidden_p1_nib').getElementsByTagName('input')[0].value=null;
    }
}

// ==============
// Form Survey P2
// ==============

function check_p2() {
    if(document.getElementById('p2_1').checked) {
        document.getElementById('hidden_p2').style.display="block";
    } else if(document.getElementById('p2_2').checked) {
        document.getElementById('hidden_p2').style.display="none";
        document.getElementById('hidden_p2').getElementsByTagName('input')[0].value=null;
        document.getElementById('p2_label').innerHTML="Pilih file...";
    }
}

document.getElementById('p2_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('p2_label').innerHTML=fileName;
});

// ==============
// Form Survey P3
// ==============

function check_p3() {
    if(document.getElementById('p3_1').checked) {
        document.getElementById('hidden_p3').style.display="block";
    } else if(document.getElementById('p3_2').checked) {
        document.getElementById('hidden_p3').style.display="none";
        document.getElementById('hidden_p3').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P4
// ==============

function check_p4() {
    if(document.getElementById('p4_1').checked) {
        document.getElementById('hidden_p4').style.display="block";
    } else if(document.getElementById('p4_2').checked) {
        document.getElementById('hidden_p4').style.display="none";
        document.getElementById('hidden_p4').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P5
// ==============

function check_p5() {
    if(document.getElementById('p5_1').checked) {
        document.getElementById('hidden_p5').style.display="block";
    } else if(document.getElementById('p5_2').checked) {
        document.getElementById('hidden_p5').style.display="none";
        var count_input = document.getElementById('hidden_p5').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p5').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p5').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P6
// ==============

function check_p6() {
    if(document.getElementById('p6_1').checked) {
        document.getElementById('hidden_p6').style.display="block";
    } else if(document.getElementById('p6_2').checked) {
        document.getElementById('hidden_p6').style.display="none";
        document.getElementById('hidden_p6').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P7
// ==============

function check_p7() {
    if(document.getElementById('p7_1').checked) {
        document.getElementById('hidden_p7').style.display="block";
    } else if(document.getElementById('p7_2').checked) {
        document.getElementById('hidden_p7').style.display="none";
        document.getElementById('hidden_p7').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P8
// ==============

function check_p8() {
    if(document.getElementById('p8_1').checked) {
        document.getElementById('hidden_p8').style.display="block";
    } else if(document.getElementById('p8_2').checked) {
        document.getElementById('hidden_p8').style.display="none";
        document.getElementById('hidden_p8').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P9
// ==============

function check_p9() {
    if(document.getElementById('p9_1').checked) {
        document.getElementById('hidden_p9').style.display="block";
    } else if(document.getElementById('p9_2').checked) {
        document.getElementById('hidden_p9').style.display="none";
        document.getElementById('hidden_p9').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P10
// ==============

function check_p10() {
    if(document.getElementById('p10_1').checked) {
        document.getElementById('hidden_p10').style.display="block";
    } else if(document.getElementById('p10_2').checked) {
        document.getElementById('hidden_p10').style.display="none";
        document.getElementById('hidden_p10').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P11
// ==============

function check_p11() {
    if(document.getElementById('p11_1').checked) {
        document.getElementById('hidden_p11').style.display="block";
    } else if(document.getElementById('p11_2').checked) {
        document.getElementById('hidden_p11').style.display="none";
        document.getElementById('hidden_p11').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P12
// ==============

function check_p12() {
    if(document.getElementById('p12_1').checked) {
        document.getElementById('hidden_p12').style.display="block";
    } else if(document.getElementById('p12_2').checked) {
        document.getElementById('hidden_p12').style.display="none";
        document.getElementById('hidden_p12').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P13
// ==============

function check_p13() {
    if(document.getElementById('p13_1').checked) {
        document.getElementById('hidden_p13').style.display="block";
    } else if(document.getElementById('p13_2').checked) {
        document.getElementById('hidden_p13').style.display="none";
        document.getElementById('hidden_p13').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P14
// ==============

function check_p14() {
    if(document.getElementById('p14_1').checked) {
        document.getElementById('hidden_p14').style.display="block";
    } else if(document.getElementById('p14_2').checked) {
        document.getElementById('hidden_p14').style.display="none";
        document.getElementById('hidden_p14').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P15
// ==============

function check_p15() {
    if(document.getElementById('p15_1').checked) {
        document.getElementById('hidden_p15').style.display="block";
    } else if(document.getElementById('p15_2').checked) {
        document.getElementById('hidden_p15').style.display="none";
        document.getElementById('hidden_p15').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P16
// ==============

function check_p16() {
    if(document.getElementById('p16_1').checked) {
        document.getElementById('hidden_p16').style.display="block";
    } else if(document.getElementById('p16_2').checked) {
        document.getElementById('hidden_p16').style.display="none";
        document.getElementById('hidden_p16').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P17
// ==============

function check_p17() {
    if(document.getElementById('p17_1').checked) {
        document.getElementById('hidden_p17').style.display="block";
    } else if(document.getElementById('p17_2').checked) {
        document.getElementById('hidden_p17').style.display="none";
        document.getElementById('hidden_p17').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P18
// ==============

function check_p18() {
    if(document.getElementById('p18_1').checked) {
        document.getElementById('hidden_p18').style.display="block";
    } else if(document.getElementById('p18_2').checked) {
        document.getElementById('hidden_p18').style.display="none";
        document.getElementById('hidden_p18').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P19
// ==============

function check_p19() {
    if(document.getElementById('p19_1').checked) {
        document.getElementById('hidden_p19').style.display="block";
    } else if(document.getElementById('p19_2').checked) {
        document.getElementById('hidden_p19').style.display="none";
        document.getElementById('hidden_p19').getElementsByTagName('textarea')[0].value=null;
    }
}