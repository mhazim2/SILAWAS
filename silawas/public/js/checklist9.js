// ==========================
// Form Umum Jenis Pengolahan
// ==========================

function check_jenisPengolahan() {
    if(document.getElementById('option_jenisPengolahan_lainnya').selected) {
        document.getElementById('hidden_jenisPengolahan_lainnya').style.display="block";
    } else {
        document.getElementById('hidden_jenisPengolahan_lainnya').style.display="none";
        document.getElementById('hidden_jenisPengolahan_lainnya').getElementsByTagName('input')[0].value=null;
    }
}

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

var p3_count_id = document.getElementById("p3_count");
var hidden_p3_1_id = document.getElementById("hidden_p3_1");
var hidden_p3_2_id = document.getElementById("hidden_p3_2");
var hidden_p3_1_detail_id = document.getElementById("hidden_p3_1_detail");

function check_p3() {
    var p3_count_value = 0;
    if(document.getElementById('p3_1').checked) {
        hidden_p3_2_id.style.display="none";
        hidden_p3_2_id.getElementsByTagName('input')[0].value=null;
        p3_count_value = 1;
        p3_detail_init(p3_count_value);
        hidden_p3_1_id.style.display="block";
    } 
    else if(document.getElementById('p3_2').checked) {
        p3_count_value = 0;
        p3_detail_init(p3_count_value);
        hidden_p3_1_id.style.display="none";
        hidden_p3_2_id.style.display="block";
    }
}

function p3_plus(){
    var p3_count = p3_count_id.value;
    p3_count++;
    p3_detail_init(p3_count);
}

function p3_minus(){
    var p3_count = p3_count_id.value;
    if (p3_count > 1) {
        p3_count--;
        p3_detail_init(p3_count);
    } 
    else if (p3_count == 1) {
        document.getElementById('p3_2').checked = true;
        check_p3();
    }
}

var p3_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nama Lengkap</label>\
                <input type="text" class="form-control" name="P3_1_1[]">\
                <small class="form-text text-muted"><b>Contoh:</b> Drh. Abcd</small>\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Status Kepegawaian</label>\
                <input type="text" class="form-control" name="P3_1_2[]">\
                <small class="form-text text-muted"><b>Contoh:</b> Swasta</small>\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>No. Telepon</label>\
                <input type="text" class="form-control" name="P3_1_3[]">\
                <small class="form-text text-muted"><b>Contoh:</b> 08XXXXXXXXXX</small>\
            </div>\
        </div>\
    </div>\
';

p3_count_id.addEventListener('change', function(event) {
    event.preventDefault();
    p3_detail_init(this.value);
});

function p3_detail_init(val){
    var p3_count = p3_count_id.value;
    if (val != 0) {
        if (val>p3_count) {
            for (i=0; i<(val-p3_count); i++) {
                hidden_p3_1_detail_id.insertAdjacentHTML('beforeend', p3_detail_html);
            }
        } else if (val<p3_count) {
            for (i=0; i<(p3_count-val); i++) {
                hidden_p3_1_detail_id.removeChild(hidden_p3_1_detail_id.lastElementChild);
            }
        } else {
            hidden_p3_1_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p3_1_detail_id.innerHTML += p3_detail_html;
            }
        }
    } else {
        hidden_p3_1_detail_id.innerHTML = '';
    }
    p3_count_id.value = val;
}

// ==============
// Form Survey P4
// ==============

var p4_count_id = document.getElementById("p4_count");
var hidden_p4_1_id = document.getElementById("hidden_p4_1");
var hidden_p4_2_id = document.getElementById("hidden_p4_2");
var hidden_p4_1_detail_id = document.getElementById("hidden_p4_1_detail");

function check_p4() {
    var p4_count_value = 0;
    if(document.getElementById('p4_1').checked) {
        hidden_p4_2_id.style.display="none";
        hidden_p4_2_id.getElementsByTagName('textarea')[0].value=null;
        p4_count_value = 1;
        p4_1_detail_init(p4_count_value);
        hidden_p4_1_id.style.display="block";
    } 
    else if(document.getElementById('p4_2').checked) {
        p4_count_value = 0;
        p4_1_detail_init(p4_count_value);
        hidden_p4_1_id.style.display="none";
        hidden_p4_2_id.style.display="block";
    }
}

function p4_plus(){
    var p4_count = p4_count_id.value;
    p4_count++;
    p4_1_detail_init(p4_count);
}

function p4_minus(){
    var p4_count = p4_count_id.value;
    if (p4_count > 1) {
        p4_count--;
        p4_1_detail_init(p4_count);
    } 
    else if (p4_count == 1) {
        document.getElementById('p4_2').checked = true;
        check_p4();
    }
}

var p4_1_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Nama Suplier</label>\
                <input type="text" class="form-control" name="P4_1_1[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Asal</label>\
                <input type="text" class="form-control" name="P4_1_2[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Tanggal</label>\
                <input type="text" class="form-control" name="P4_1_3[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Jumlah</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="P4_1_4[]">\
                    <div class="input-group-append">\
                        <span class="input-group-text">MT</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
';

function p4_1_detail_init(val){
    var p4_count = p4_count_id.value;
    if (val != 0) {
        if (val>p4_count) {
            for (i=0; i<(val-p4_count); i++) {
                hidden_p4_1_detail_id.insertAdjacentHTML('beforeend', p4_1_detail_html);
            }
        } else if (val<p4_count) {
            for (i=0; i<(p4_count-val); i++) {
                hidden_p4_1_detail_id.removeChild(hidden_p4_1_detail_id.lastElementChild);
            }
        } else {
            hidden_p4_1_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p4_1_detail_id.innerHTML += p4_1_detail_html;
            }
        }
    } else {
        hidden_p4_1_detail_id.innerHTML = '';
    }
    p4_count_id.value = val;
}

// ==============
// Form Survey P5
// ==============

function check_p5() {
    if(document.getElementById('p5_1').checked) {
        document.getElementById('hidden_p5_2').style.display="none";
        document.getElementById('hidden_p5_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p5_1').style.display="block";
    } else if(document.getElementById('p5_2').checked) {
        document.getElementById('hidden_p5_1').style.display="none";
        var count_input = document.getElementById('hidden_p5_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p5_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p5_2').style.display="block";
    }
}

// ==============
// Form Survey P6
// ==============

function check_p6() {
    if(document.getElementById('p6_1').checked) {
        document.getElementById('hidden_p6_2').style.display="none";
        document.getElementById('hidden_p6_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p6_1').style.display="block";
    } else if(document.getElementById('p6_2').checked) {
        document.getElementById('hidden_p6_1').style.display="none";
        var count_input = document.getElementById('hidden_p6_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p6_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p6_2').style.display="block";
    }
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

function clear_p10() {
    document.getElementById('p10_1_1').checked=false;
    document.getElementById('p10_1_2').checked=false;
    document.getElementById('p10_2_1').checked=false;
    document.getElementById('p10_2_2').checked=false;
    document.getElementById('p10_3_1').checked=false;
    document.getElementById('p10_3_2').checked=false;
}

function check_p10() {
    if(document.getElementById('p10_1').checked) {
        document.getElementById('hidden_p10_2').style.display="none";
        document.getElementById('hidden_p10_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p10_1').style.display="block";
    } else if(document.getElementById('p10_2').checked) {
        document.getElementById('hidden_p10_1').style.display="none";
        clear_p10();
        document.getElementById('hidden_p10_2').style.display="block";
    }
}

// ==============
// Form Survey P11
// ==============

function check_p11() {
    if(document.getElementById('p11_1').checked) {
        document.getElementById('hidden_p11_2').style.display="none";
        document.getElementById('hidden_p11_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p11_1').style.display="block";
    } else if(document.getElementById('p11_2').checked) {
        document.getElementById('hidden_p11_1').style.display="none";
        var count_input = document.getElementById('hidden_p11_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p11_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p11_2').style.display="block";
    }
}

// ==============
// Form Survey P12
// ==============

function clear_p12() {
    document.getElementById('p12_1_1').checked=false;
    document.getElementById('p12_1_2').checked=false;
    document.getElementById('hidden_p12_1').getElementsByTagName('input')[2].value=null;
    document.getElementById('hidden_p12_1').getElementsByTagName('input')[3].value=null;
    document.getElementById('hidden_p12_1').getElementsByTagName('input')[4].value=null;
}

function check_p12() {
    if(document.getElementById('p12_1').checked) {
        document.getElementById('hidden_p12_2').style.display="none";
        document.getElementById('hidden_p12_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p12_1').style.display="block";
    } else if(document.getElementById('p12_2').checked) {
        document.getElementById('hidden_p12_1').style.display="none";
        clear_p12();
        document.getElementById('hidden_p12_2').style.display="block";
    }
}

// ==============
// Form Survey P13
// ==============

function clear_p13() {
    document.getElementById('p13_1_1').checked=false;
    document.getElementById('p13_1_2').checked=false;
    document.getElementById('hidden_p13_1').getElementsByTagName('input')[2].value=null;
    document.getElementById('hidden_p13_1').getElementsByTagName('input')[3].value=null;
    document.getElementById('p13_4_1').checked=false;
    document.getElementById('p13_4_2').checked=false;
}

function check_p13() {
    if(document.getElementById('p13_1').checked) {
        document.getElementById('hidden_p13_2').style.display="none";
        document.getElementById('hidden_p13_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p13_1').style.display="block";
    } else if(document.getElementById('p13_2').checked) {
        document.getElementById('hidden_p13_1').style.display="none";
        clear_p13();
        document.getElementById('hidden_p13_2').style.display="block";
    }
}

// ==============
// Form Survey P14
// ==============

function check_p14() {
    document.getElementById('hidden_p14').style.display="block";
}

// ==============
// Form Survey P15
// ==============

function clear_p15() {
    document.getElementById('p15_1_1').checked=false;
    document.getElementById('p15_1_2').checked=false;
    document.getElementById('p15_2_1').checked=false;
    document.getElementById('p15_2_2').checked=false;
    document.getElementById('hidden_p15_1').getElementsByTagName('input')[4].value=null;
    document.getElementById('hidden_p15_1').getElementsByTagName('input')[5].value=null;
    document.getElementById('p15_5_1').checked=false;
    document.getElementById('p15_5_2').checked=false;
}

function check_p15() {
    if(document.getElementById('p15_1').checked) {
        document.getElementById('hidden_p15_2').style.display="none";
        document.getElementById('hidden_p15_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p15_1').style.display="block";
    } else if(document.getElementById('p15_2').checked) {
        document.getElementById('hidden_p15_1').style.display="none";
        clear_p15();
        document.getElementById('hidden_p15_2').style.display="block";
    }
}

// ==============
// Form Survey P16
// ==============

function check_p16() {
    document.getElementById('hidden_p16').style.display="block";
}

// ==============
// Form Survey P17
// ==============

function clear_p17() {
    document.getElementById('p17_1_1').checked=false;
    document.getElementById('p17_1_2').checked=false;
    document.getElementById('hidden_p17_1').getElementsByTagName('input')[2].value=null;
}

function check_p17() {
    if(document.getElementById('p17_1').checked) {
        document.getElementById('hidden_p17_2').style.display="none";
        document.getElementById('hidden_p17_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p17_1').style.display="block";
    } else if(document.getElementById('p17_2').checked) {
        document.getElementById('hidden_p17_1').style.display="none";
        clear_p17();
        document.getElementById('hidden_p17_2').style.display="block";
    }
}