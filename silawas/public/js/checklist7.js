// =======================
// Form Umum Sumber Ternak
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
        var count_input = document.getElementById('hidden_p1_niu').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p1_niu').getElementsByTagName('input')[i].value=null;
    }
}

function check_p1_npwp() {
    if(document.getElementById('check_p1_npwp').checked) {
        document.getElementById('hidden_p1_npwp').style.display="block";
    } else {
        document.getElementById('hidden_p1_npwp').style.display="none";
        var count_input = document.getElementById('hidden_p1_npwp').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p1_npwp').getElementsByTagName('input')[i].value=null;
    }
}

function check_p1_siup() {
    if(document.getElementById('check_p1_siup').checked) {
        document.getElementById('hidden_p1_siup').style.display="block";
    } else {
        document.getElementById('hidden_p1_siup').style.display="none";
        var count_input = document.getElementById('hidden_p1_siup').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p1_siup').getElementsByTagName('input')[i].value=null;
    }
}

function check_p1_nib() {
    if(document.getElementById('check_p1_nib').checked) {
        document.getElementById('hidden_p1_nib').style.display="block";
    } else {
        document.getElementById('hidden_p1_nib').style.display="none";
        var count_input = document.getElementById('hidden_p1_nib').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p1_nib').getElementsByTagName('input')[i].value=null;
    }
}

function check_p1_pks() {
    if(document.getElementById('check_p1_pks').checked) {
        document.getElementById('hidden_p1_pks').style.display="block";
    } else {
        document.getElementById('hidden_p1_pks').style.display="none";
        var count_input = document.getElementById('hidden_p1_pks').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p1_pks').getElementsByTagName('input')[i].value=null;
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

var p3_count_id = document.getElementById("p3_count");
var hidden_p3_id = document.getElementById("hidden_p3");
var hidden_p3_detail_id = document.getElementById("hidden_p3_detail");

function check_p3() {
    var p3_count_value = 0;
    if(document.getElementById('p3_1').checked) {
        p3_count_value = 1;
        p3_detail_init(p3_count_value);
        hidden_p3_id.style.display="block";
    } 
    else if(document.getElementById('p3_2').checked) {
        p3_count_value = 0;
        p3_detail_init(p3_count_value);
        hidden_p3_id.style.display="none";
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
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Nama Lengkap</label>\
                <input type="text" class="form-control" name="pj_teknis_id[]">\
                <small class="form-text text-muted"><b>Contoh:</b> Drh. Abcd</small>\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Status Kepegawaian</label>\
                <input type="text" class="form-control" name="pj_teknis_status[]">\
                <small class="form-text text-muted"><b>Contoh:</b> Swasta</small>\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>No. Telepon</label>\
                <input type="text" class="form-control" name="pj_teknis_date[]">\
                <small class="form-text text-muted"><b>Contoh:</b> 08XXXXXXXXXX</small>\
            </div>\
        </div>\
    </div>\
';

document.getElementById('p3_count').addEventListener('change', function(event) {
    event.preventDefault();
    p3_detail_init(this.value);
});

function p3_detail_init(val){
    var p3_count = p3_count_id.value;
    if (val != 0) {
        if (val>p3_count) {
            for (i=0; i<(val-p3_count); i++) {
                hidden_p3_detail_id.insertAdjacentHTML('beforeend', p3_detail_html);
            }
        } else if (val<p3_count) {
            for (i=0; i<(p3_count-val); i++) {
                hidden_p3_detail_id.removeChild(hidden_p3_detail_id.lastElementChild);
            }
        } else {
            hidden_p3_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p3_detail_id.innerHTML += p3_detail_html;
            }
        }
    } else {
        hidden_p3_detail_id.innerHTML = '';
    }
    p3_count_id.value = val;
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
        document.getElementById('p5_label').innerHTML = 'Pilih file...';
    }
}

document.getElementById('p5_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('p5_label').innerHTML = fileName;
});

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

// ==============
// Form Survey P20
// ==============

function check_p20() {
    if(document.getElementById('p20_1').checked) {
        document.getElementById('hidden_p20').style.display="block";
    } else if(document.getElementById('p20_2').checked) {
        document.getElementById('hidden_p20').style.display="none";
        document.getElementById('hidden_p20').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P21
// ==============

function check_p21() {
    if(document.getElementById('p21_1').checked) {
        document.getElementById('hidden_p21').style.display="block";
    } else if(document.getElementById('p21_2').checked) {
        document.getElementById('hidden_p21').style.display="none";
        document.getElementById('hidden_p21').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey P22
// ==============

function check_p22() {
    if(document.getElementById('p22_1').checked) {
        document.getElementById('hidden_p22').style.display="block";
    } else if(document.getElementById('p22_2').checked) {
        document.getElementById('hidden_p22').style.display="none";
        document.getElementById('hidden_p22').getElementsByTagName('textarea')[0].value=null;
    }
}

// ==============
// Form Survey p23
// ==============

function check_p23() {
    if(document.getElementById('p23_1').checked) {
        document.getElementById('hidden_p23_2').style.display="none";
        document.getElementById('hidden_p23_2').getElementsByTagName('input')[0].value=null;
        document.getElementById('hidden_p23_1').style.display="block";
    } else if(document.getElementById('p23_2').checked) {
        document.getElementById('hidden_p23_1').style.display="none";
        var count_input = document.getElementById('hidden_p23_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p23_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p23_2').style.display="block";
    }
}

// ==============
// Form Survey p24
// ==============

function check_p24() {
    if(document.getElementById('p24_1').checked) {
        document.getElementById('hidden_p24_2').style.display="none";
        document.getElementById('hidden_p24_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p24_1').style.display="block";
    } else if(document.getElementById('p24_2').checked) {
        document.getElementById('hidden_p24_1').style.display="none";
        var count_input = document.getElementById('hidden_p24_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p24_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p24_2').style.display="block";
    }
}

// ==============
// Form Survey P25
// ==============

var p25_hidden_html = '\
    <div class="row">\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jenis Alat</label>\
                <input type="text" class="form-control" name="P25_jenisAlat">\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jumlah Alat</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="P25_jumlahAlat">\
                    <div class="input-group-append">\
                        <span class="input-group-text">unit</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Kapasitas</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="P25_kapasitas">\
                    <div class="input-group-append">\
                        <span class="input-group-text">ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
';

function clear_p25() {
    document.getElementById('hidden_p25_1').style.display="none";
    document.getElementById('hidden_p25_2').style.display="none";
    document.getElementById('hidden_p25_3').style.display="none";
    document.getElementById('hidden_p25_1').innerHTML = '';
    document.getElementById('hidden_p25_2').innerHTML = '';
    document.getElementById('hidden_p25_3').innerHTML = '';
}

function check_p25() {
    if(document.getElementById('p25_1').checked) {
        clear_p25();
        document.getElementById('hidden_p25_1').innerHTML = p25_hidden_html;
        document.getElementById('hidden_p25_1').style.display="block";
    } 
    else if(document.getElementById('p25_2').checked) {
        clear_p25();
        document.getElementById('hidden_p25_2').innerHTML = p25_hidden_html;
        document.getElementById('hidden_p25_2').style.display="block";
    }
    else if(document.getElementById('p25_3').checked) {
        clear_p25();
        document.getElementById('hidden_p25_3').innerHTML = p25_hidden_html;
        document.getElementById('hidden_p25_3').style.display="block";
    }
}

// ==============
// Form Survey P26
// ==============

var p26_count_id = document.getElementById("p26_count");
var hidden_p26_id = document.getElementById("hidden_p26");
var hidden_p26_detail_id = document.getElementById("hidden_p26_detail");

function check_p26() {
    var p26_count_value = 0;
    if(document.getElementById('p26_1').checked) {
        p26_count_value = 1;
        p26_detail_init(p26_count_value);
        hidden_p26_id.style.display="block";
    } 
    else if(document.getElementById('p26_2').checked) {
        p26_count_value = 1;
        p26_detail_init(p26_count_value);
        hidden_p26_id.style.display="block";
    } 
    else if(document.getElementById('p26_3').checked) {
        p26_count_value = 1;
        p26_detail_init(p26_count_value);
        hidden_p26_id.style.display="block";
    } 
    else if(document.getElementById('p26_4').checked) {
        p26_count_value = 1;
        p26_detail_init(p26_count_value);
        hidden_p26_id.style.display="block";
    }
    else {
        p26_count_value = 0;
        p26_detail_init(p26_count_value);
        hidden_p26_id.style.display="none";
    }
}

function clear_p26(){
    document.getElementById('p26_1').checked = false;
    document.getElementById('p26_2').checked = false;
    document.getElementById('p26_3').checked = false;
    document.getElementById('p26_4').checked = false;
}

function p26_plus(){
    var p26_count = p26_count_id.value;
    p26_count++;
    p26_detail_init(p26_count);
}

function p26_minus(){
    var p26_count = p26_count_id.value;
    if (p26_count > 1) {
        p26_count--;
        p26_detail_init(p26_count);
    } 
    else if (p26_count == 1) {
        clear_p26();
        check_p26();
    }
}

var p26_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Nama Penerima</label>\
                <input type="text" class="form-control" name="P26_nama[]">\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jenis Produk</label>\
                <input type="text" class="form-control" name="P26_jenis[]">\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jumlah Produk</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="P26_jumlah[]">\
                    <div class="input-group-append">\
                        <span class="input-group-text">ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="col-md-12">\
            <div class="form-group">\
                <label>Alamat Penerima</label>\
                <textarea class="form-control" rows="2" name="P26_alamat[]"></textarea>\
            </div>\
        </div>\
    </div>\
';

function p26_detail_init(val){
    var p26_count = p26_count_id.value;
    if (val != 0) {
        if (val>p26_count) {
            for (i=0; i<(val-p26_count); i++) {
                hidden_p26_detail_id.insertAdjacentHTML('beforeend', p26_detail_html);
            }
        } else if (val<p26_count) {
            for (i=0; i<(p26_count-val); i++) {
                hidden_p26_detail_id.removeChild(hidden_p26_detail_id.lastElementChild);
            }
        } else {
            hidden_p26_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p26_detail_id.innerHTML += p26_detail_html;
            }
        }
    } else {
        hidden_p26_detail_id.innerHTML = '';
    }
    p26_count_id.value = val;
}