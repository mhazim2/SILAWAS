// =======================
// Form Umum Sumber Produk
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

// ===========================
// Form Umum Wilayah Peredaran
// ===========================

function check_wilayahPeredaran_1() {
    if(document.getElementById('wilayahPeredaran_1').checked) {
        document.getElementById('hidden_wilayahPeredaran_1').style.display="block";
    } else {
        document.getElementById('hidden_wilayahPeredaran_1').style.display="none";
        document.getElementById('hidden_wilayahPeredaran_1').getElementsByTagName('input')[0].value=null;
    }    
}    

function check_wilayahPeredaran_2() {
    if(document.getElementById('wilayahPeredaran_2').checked) {
        document.getElementById('hidden_wilayahPeredaran_2').style.display="block";
    } else {
        document.getElementById('hidden_wilayahPeredaran_2').style.display="none";
        document.getElementById('hidden_wilayahPeredaran_2').getElementsByTagName('input')[0].value=null;
    }    
}    

function check_wilayahPeredaran_3() {
    if(document.getElementById('wilayahPeredaran_3').checked) {
        document.getElementById('hidden_wilayahPeredaran_3').style.display="block";
    } else {
        document.getElementById('hidden_wilayahPeredaran_3').style.display="none";
        document.getElementById('hidden_wilayahPeredaran_3').getElementsByTagName('input')[0].value=null;
    }    
}    

function check_wilayahPeredaran_4() {
    if(document.getElementById('wilayahPeredaran_4').checked) {
        document.getElementById('hidden_wilayahPeredaran_4').style.display="block";
    } else {
        document.getElementById('hidden_wilayahPeredaran_4').style.display="none";
        document.getElementById('hidden_wilayahPeredaran_4').getElementsByTagName('input')[0].value=null;
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
        document.getElementById('hidden_p1_1').getElementsByTagName('input')[1].value=null;
    }
}

function check_p1_2() {
    if(document.getElementById('check_p1_2').checked) {
        document.getElementById('hidden_p1_2').style.display="block";
    } else {
        document.getElementById('hidden_p1_2').style.display="none";
        document.getElementById('hidden_p1_2').getElementsByTagName('input')[0].value=null;
        document.getElementById('hidden_p1_2').getElementsByTagName('input')[1].value=null;
    }
}

function check_p1_3() {
    if(document.getElementById('check_p1_3').checked) {
        document.getElementById('hidden_p1_3').style.display="block";
    } else {
        document.getElementById('hidden_p1_3').style.display="none";
        document.getElementById('hidden_p1_3').getElementsByTagName('input')[0].value=null;
        document.getElementById('hidden_p1_3').getElementsByTagName('input')[1].value=null;
    }
}

function check_p1_4() {
    if(document.getElementById('check_p1_4').checked) {
        document.getElementById('hidden_p1_4').style.display="block";
    } else {
        document.getElementById('hidden_p1_4').style.display="none";
        document.getElementById('hidden_p1_4').getElementsByTagName('input')[0].value=null;
        document.getElementById('hidden_p1_4').getElementsByTagName('input')[1].value=null;
    }
}

// ==============
// Form Survey P2
// ==============

function check_p2() {
    if(document.getElementById('p2_1').checked) {
        document.getElementById('hidden_p2_2').style.display="none";
        document.getElementById('p2_6_1').checked=false;
        document.getElementById('p2_6_2').checked=false;
        document.getElementById('hidden_p2_1').style.display="block";
    } else if(document.getElementById('p2_2').checked) {
        document.getElementById('hidden_p2_1').style.display="none";
        var count_input = document.getElementById('hidden_p2_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p2_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p2_1').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('p2_5_label').innerHTML="Pilih file...";
        document.getElementById('hidden_p2_2').style.display="block";
    }
}

document.getElementById('p2_5_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('p2_5_label').innerHTML=fileName;
});

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
    if(document.getElementById('p4_1').checked) {
        document.getElementById('hidden_p4_2').style.display="none";
        document.getElementById('hidden_p4_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p4_1').style.display="block";
    } else if(document.getElementById('p4_2').checked) {
        document.getElementById('hidden_p4_1').style.display="none";
        var count_input = document.getElementById('hidden_p4_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p4_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p4_2').style.display="block";
    }
}

// ==============
// Form Survey P5
// ==============

var p5_count_id = document.getElementById("p5_count");
var hidden_p5_1_id = document.getElementById("hidden_p5_1");
var hidden_p5_2_id = document.getElementById("hidden_p5_2");
var hidden_p5_1_detail_id = document.getElementById("hidden_p5_1_detail");

function check_p5() {
    var p5_count_value = 0;
    if(document.getElementById('p5_1').checked) {
        hidden_p5_2_id.style.display="none";
        hidden_p5_2_id.getElementsByTagName('textarea')[0].value=null;
        p5_count_value = 1;
        p5_1_detail_init(p5_count_value);
        hidden_p5_1_id.style.display="block";
    } 
    else if(document.getElementById('p5_2').checked) {
        p5_count_value = 0;
        p5_1_detail_init(p5_count_value);
        hidden_p5_1_id.style.display="none";
        hidden_p5_2_id.style.display="block";
    }
}

function p5_plus(){
    var p5_count = p5_count_id.value;
    p5_count++;
    p5_1_detail_init(p5_count);
}

function p5_minus(){
    var p5_count = p5_count_id.value;
    if (p5_count > 1) {
        p5_count--;
        p5_1_detail_init(p5_count);
    } 
    else if (p5_count == 1) {
        document.getElementById('p5_2').checked = true;
        check_p5();
    }
}

var p5_1_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Nama Suplier</label>\
                <input type="text" class="form-control" name="P5_1_1[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Asal</label>\
                <input type="text" class="form-control" name="P5_1_2[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Tanggal</label>\
                <input type="text" class="form-control" name="P5_1_3[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Jumlah</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="P5_1_4[]">\
                    <div class="input-group-append">\
                        <span class="input-group-text">Ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
';

function p5_1_detail_init(val){
    var p5_count = p5_count_id.value;
    if (val != 0) {
        if (val>p5_count) {
            for (i=0; i<(val-p5_count); i++) {
                hidden_p5_1_detail_id.insertAdjacentHTML('beforeend', p5_1_detail_html);
            }
        } else if (val<p5_count) {
            for (i=0; i<(p5_count-val); i++) {
                hidden_p5_1_detail_id.removeChild(hidden_p5_1_detail_id.lastElementChild);
            }
        } else {
            hidden_p5_1_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p5_1_detail_id.innerHTML += p5_1_detail_html;
            }
        }
    } else {
        hidden_p5_1_detail_id.innerHTML = '';
    }
    p5_count_id.value = val;
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
        document.getElementById('p6_1_1').checked=false;
        document.getElementById('p6_1_2').checked=false;
        document.getElementById('hidden_p6_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('p6_3_1').checked=false;
        document.getElementById('p6_3_2').checked=false;
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

function check_p10() {
    if(document.getElementById('p10_1').checked) {
        document.getElementById('hidden_p10_2').style.display="none";
        document.getElementById('hidden_p10_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p10_1').style.display="block";
    } else if(document.getElementById('p10_2').checked) {
        document.getElementById('hidden_p10_1').style.display="none";
        document.getElementById('p10_1_1').checked=false;
        document.getElementById('p10_1_2').checked=false;
        document.getElementById('hidden_p10_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('hidden_p10_1').getElementsByTagName('input')[3].value=null;
        document.getElementById('p10_4_1').checked=false;
        document.getElementById('p10_4_2').checked=false;
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
        document.getElementById('p11_1_1').checked=false;
        document.getElementById('p11_1_2').checked=false;
        document.getElementById('p11_2_1').checked=false;
        document.getElementById('p11_2_2').checked=false;
        document.getElementById('p11_3_1').checked=false;
        document.getElementById('p11_3_2').checked=false;
        document.getElementById('hidden_p11_2').style.display="block";
    }
}

// ==============
// Form Survey P12
// ==============

function check_p12() {
    if(document.getElementById('p12_1').checked) {
        document.getElementById('hidden_p12_2').style.display="none";
        document.getElementById('hidden_p12_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p12_1').style.display="block";
    } else if(document.getElementById('p12_2').checked) {
        document.getElementById('hidden_p12_1').style.display="none";
        document.getElementById('p12_1_1').checked=false;
        document.getElementById('p12_1_2').checked=false;
        document.getElementById('p12_2_1').checked=false;
        document.getElementById('p12_2_2').checked=false;
        document.getElementById('p12_3_1').checked=false;
        document.getElementById('p12_3_2').checked=false;
        document.getElementById('hidden_p12_1').getElementsByTagName('input')[6].value=null;
        document.getElementById('hidden_p12_1').getElementsByTagName('input')[7].value=null;
        document.getElementById('p12_6_1').checked=false;
        document.getElementById('p12_6_2').checked=false;
        document.getElementById('hidden_p12_2').style.display="block";
    }
}

// ==============
// Form Survey P13
// ==============

function check_p13() {
    if(document.getElementById('p13_1').checked) {
        document.getElementById('hidden_p13_2').style.display="none";
        document.getElementById('hidden_p13_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p13_1').style.display="block";
    } else if(document.getElementById('p13_2').checked) {
        document.getElementById('hidden_p13_1').style.display="none";
        document.getElementById('p13_1_1').checked=false;
        document.getElementById('p13_1_2').checked=false;
        document.getElementById('hidden_p13_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('hidden_p13_2').style.display="block";
    }
}