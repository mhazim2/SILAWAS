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

function check_p1_pks() {
    if(document.getElementById('check_p1_pks').checked) {
        document.getElementById('hidden_p1_pks').style.display="block";
    } else {
        document.getElementById('hidden_p1_pks').style.display="none";
        document.getElementById('hidden_p1_pks').getElementsByTagName('input')[0].value=null;
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
        var count_input = document.getElementById('hidden_p2').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p2').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p2').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P3
// ==============

function clear_p3() {
    document.getElementById('p3_1_ket_1').checked = false;
    document.getElementById('p3_1_ket_2').checked = false;
    document.getElementById('p3_2_1').checked = false;
    document.getElementById('p3_2_2').checked = false;
    var count_input = document.getElementById('hidden_p3_ket_2').getElementsByTagName('input').length;
    for (var i=0; i<count_input; i++) document.getElementById('hidden_p3_ket_2').getElementsByTagName('input')[i].value=null;
    document.getElementById('hidden_p3_ket_2').getElementsByTagName('textarea')[0].value=null;
}

function check_p3_1() {
    if(document.getElementById('p3_1_1').checked) {
        document.getElementById('hidden_p3_ket_1').style.display="block";
        document.getElementById('hidden_p3_2').style.display="block";
    } else if(document.getElementById('p3_1_2').checked) {
        document.getElementById('hidden_p3_ket_1').style.display="none";
        document.getElementById('hidden_p3_2').style.display="none";
        document.getElementById('hidden_p3_ket_2').style.display="none";
        clear_p3();
    }
}

function check_p3_2() {
    if(document.getElementById('p3_2_1').checked) {
        document.getElementById('hidden_p3_ket_2').style.display="block";
    } else if(document.getElementById('p3_2_2').checked) {
        document.getElementById('hidden_p3_ket_2').style.display="none";
        var count_input = document.getElementById('hidden_p3_ket_2').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p3_ket_2').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p3_ket_2').getElementsByTagName('textarea')[0].value=null;
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
        var count_input = document.getElementById('hidden_p4').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p4').getElementsByTagName('input')[i].value=null;
    }
}

// ==============
// Form Survey P5
// ==============

var p5_count_id = document.getElementById("p5_count");
var hidden_p5_id = document.getElementById("hidden_p5");
var hidden_p5_detail_id = document.getElementById("hidden_p5_detail");

function check_p5() {
    var p5_count_value = 0;
    if(document.getElementById('p5_1').checked) {
        p5_count_value = 1;
        p5_detail_init(p5_count_value);
        hidden_p5_id.style.display="block";
    } 
    else if(document.getElementById('p5_2').checked) {
        p5_count_value = 0;
        p5_detail_init(p5_count_value);
        hidden_p5_id.style.display="none";
    }
}

function p5_plus(){
    var p5_count = p5_count_id.value;
    p5_count++;
    p5_detail_init(p5_count);
}

function p5_minus(){
    var p5_count = p5_count_id.value;
    if (p5_count > 1) {
        p5_count--;
        p5_detail_init(p5_count);
    } 
    else if (p5_count == 1) {
        document.getElementById('p5_2').checked = true;
        check_p5();
    }
}

var p5_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Nama Suplier</label>\
                <input type="text" class="form-control" name="P5_1[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Alamat</label>\
                <input type="text" class="form-control" name="P5_2[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Tanggal</label>\
                <input type="text" class="form-control" name="P5_3[]">\
            </div>\
        </div>\
        <div class="col-lg-2">\
            <div class="form-group">\
                <label>Jumlah</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="P5_4[]">\
                    <div class="input-group-append">\
                        <span class="input-group-text">Kg</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
';

function p5_detail_init(val){
    var p5_count = p5_count_id.value;
    if (val != 0) {
        if (val>p5_count) {
            for (i=0; i<(val-p5_count); i++) {
                hidden_p5_detail_id.insertAdjacentHTML('beforeend', p5_detail_html);
            }
        } else if (val<p5_count) {
            for (i=0; i<(p5_count-val); i++) {
                hidden_p5_detail_id.removeChild(hidden_p5_detail_id.lastElementChild);
            }
        } else {
            hidden_p5_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p5_detail_id.innerHTML += p5_detail_html;
            }
        }
    } else {
        hidden_p5_detail_id.innerHTML = '';
    }
    p5_count_id.value = val;
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

function clear_p7(){
    document.getElementById('p7_1_ket').checked = false;
    document.getElementById('p7_2_ket').checked = false;
}

function check_p7() {
    if(document.getElementById('p7_1').checked) {
        document.getElementById('hidden_p7').style.display="block";
    } else if(document.getElementById('p7_2').checked) {
        document.getElementById('hidden_p7').style.display="none";
        clear_p7();
    }
}

// ==============
// Form Survey P8
// ==============

function clear_p8(){
    document.getElementById('p8_ket_1').value = null;
    document.getElementById('p8_ket_2_1').checked = false;
    document.getElementById('p8_ket_2_2').checked = false;
}

function check_p8() {
    if(document.getElementById('p8_1').checked) {
        document.getElementById('hidden_p8').style.display="block";
    } else if(document.getElementById('p8_2').checked) {
        document.getElementById('hidden_p8').style.display="none";
        clear_p8();
    }
}

// ==============
// Form Survey P9
// ==============

function clear_p9(){
    document.getElementById('p9_ket_1').checked = false;
    document.getElementById('p9_ket_2').checked = false;
}

function check_p9() {
    if(document.getElementById('p9_1').checked) {
        document.getElementById('hidden_p9').style.display="block";
    } else if(document.getElementById('p9_2').checked) {
        document.getElementById('hidden_p9').style.display="none";
        clear_p9();
    }
}

// ==============
// Form Survey P10
// ==============

function clear_p10(){
    document.getElementById('p10_ket_1_1').checked = false;
    document.getElementById('p10_ket_1_2').checked = false;
    document.getElementById('p10_ket_2').value = null;
    document.getElementById('p10_ket_3').value = null;
}

function check_p10() {
    if(document.getElementById('p10_1').checked) {
        document.getElementById('hidden_p10').style.display="block";
    } else if(document.getElementById('p10_2').checked) {
        document.getElementById('hidden_p10').style.display="none";
        clear_p10();
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