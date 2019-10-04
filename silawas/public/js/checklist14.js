// ======================
// Form Umum Jenis Produk
// ======================

function check_jenisProduk() {
    if(document.getElementById('option_jenisProduk_lainnya').selected) {
        document.getElementById('hidden_jenisProduk_lainnya').style.display="block";
    } else {
        document.getElementById('hidden_jenisProduk_lainnya').style.display="none";
        document.getElementById('hidden_jenisProduk_lainnya').getElementsByTagName('input')[0].value=null;
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

var p1_count_id = document.getElementById("p1_count");
var hidden_p1_1_id = document.getElementById("hidden_p1_1");
var hidden_p1_2_id = document.getElementById("hidden_p1_2");
var hidden_p1_1_detail_id = document.getElementById("hidden_p1_1_detail");

function check_p1() {
    var p1_count_value = 0;
    if(document.getElementById('p1_1').checked) {
        hidden_p1_2_id.style.display="none";
        hidden_p1_2_id.getElementsByTagName('textarea')[0].value=null;
        p1_count_value = 1;
        p1_1_detail_init(p1_count_value);
        hidden_p1_1_id.style.display="block";
    } 
    else if(document.getElementById('p1_2').checked) {
        p1_count_value = 0;
        p1_1_detail_init(p1_count_value);
        hidden_p1_1_id.style.display="none";
        hidden_p1_2_id.style.display="block";
    }
}

function p1_plus(){
    var p1_count = p1_count_id.value;
    p1_count++;
    p1_1_detail_init(p1_count);
}

function p1_minus(){
    var p1_count = p1_count_id.value;
    if (p1_count > 1) {
        p1_count--;
        p1_1_detail_init(p1_count);
    } 
    else if (p1_count == 1) {
        document.getElementById('p1_2').checked = true;
        check_p1();
    }
}

var p1_1_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nama Unit Usaha</label>\
                <input type="text" class="form-control" name="P1_1_1[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nomor NKV</label>\
                <input type="text" class="form-control" name="P1_1_2[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Tanggal NKV</label>\
                <input type="text" class="form-control" name="P1_1_3[]">\
            </div>\
        </div>\
    </div>\
';

function p1_1_detail_init(val){
    var p1_count = p1_count_id.value;
    if (val != 0) {
        if (val>p1_count) {
            for (i=0; i<(val-p1_count); i++) {
                hidden_p1_1_detail_id.insertAdjacentHTML('beforeend', p1_1_detail_html);
            }
        } else if (val<p1_count) {
            for (i=0; i<(p1_count-val); i++) {
                hidden_p1_1_detail_id.removeChild(hidden_p1_1_detail_id.lastElementChild);
            }
        } else {
            hidden_p1_1_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p1_1_detail_id.innerHTML += p1_1_detail_html;
            }
        }
    } else {
        hidden_p1_1_detail_id.innerHTML = '';
    }
    p1_count_id.value = val;
}

// ==============
// Form Survey P2
// ==============

var p2_count_id = document.getElementById("p2_count");
var hidden_p2_1_id = document.getElementById("hidden_p2_1");
var hidden_p2_2_id = document.getElementById("hidden_p2_2");
var hidden_p2_1_detail_id = document.getElementById("hidden_p2_1_detail");

function check_p2() {
    var p2_count_value = 0;
    if(document.getElementById('p2_1').checked) {
        hidden_p2_2_id.style.display="none";
        hidden_p2_2_id.getElementsByTagName('textarea')[0].value=null;
        p2_count_value = 1;
        p2_1_detail_init(p2_count_value);
        hidden_p2_1_id.style.display="block";
    } 
    else if(document.getElementById('p2_2').checked) {
        p2_count_value = 0;
        p2_1_detail_init(p2_count_value);
        hidden_p2_1_id.style.display="none";
        hidden_p2_2_id.style.display="block";
    }
}

function p2_plus(){
    var p2_count = p2_count_id.value;
    p2_count++;
    p2_1_detail_init(p2_count);
}

function p2_minus(){
    var p2_count = p2_count_id.value;
    if (p2_count > 1) {
        p2_count--;
        p2_1_detail_init(p2_count);
    } 
    else if (p2_count == 1) {
        document.getElementById('p2_2').checked = true;
        check_p2();
    }
}

var p2_1_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Nama Unit Usaha</label>\
                <input type="text" class="form-control" name="P2_1_1[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Nomor Sertifikat</label>\
                <input type="text" class="form-control" name="P2_1_2[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Tanggal Sertifikat</label>\
                <input type="text" class="form-control" name="P2_1_3[]">\
            </div>\
        </div>\
        <div class="col-lg-3">\
            <div class="form-group">\
                <label>Masa Berlaku</label>\
                <div class="input-group">\
                    <input type="text" class="form-control" name="P2_1_4[]">\
                    <div class="input-group-append">\
                        <span class="input-group-text">Tahun</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
';

function p2_1_detail_init(val){
    var p2_count = p2_count_id.value;
    if (val != 0) {
        if (val>p2_count) {
            for (i=0; i<(val-p2_count); i++) {
                hidden_p2_1_detail_id.insertAdjacentHTML('beforeend', p2_1_detail_html);
            }
        } else if (val<p2_count) {
            for (i=0; i<(p2_count-val); i++) {
                hidden_p2_1_detail_id.removeChild(hidden_p2_1_detail_id.lastElementChild);
            }
        } else {
            hidden_p2_1_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p2_1_detail_id.innerHTML += p2_1_detail_html;
            }
        }
    } else {
        hidden_p2_1_detail_id.innerHTML = '';
    }
    p2_count_id.value = val;
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
        hidden_p3_2_id.getElementsByTagName('textarea')[0].value=null;
        p3_count_value = 1;
        p3_1_detail_init(p3_count_value);
        hidden_p3_1_id.style.display="block";
    } 
    else if(document.getElementById('p3_2').checked) {
        p3_count_value = 0;
        p3_1_detail_init(p3_count_value);
        hidden_p3_1_id.style.display="none";
        hidden_p3_2_id.style.display="block";
    }
}

function p3_plus(){
    var p3_count = p3_count_id.value;
    p3_count++;
    p3_1_detail_init(p3_count);
}

function p3_minus(){
    var p3_count = p3_count_id.value;
    if (p3_count > 1) {
        p3_count--;
        p3_1_detail_init(p3_count);
    } 
    else if (p3_count == 1) {
        document.getElementById('p3_2').checked = true;
        check_p3();
    }
}

var p3_1_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nomor Sertifikat</label>\
                <input type="text" class="form-control" name="P3_1_1[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Tanggal Sertifikat</label>\
                <input type="text" class="form-control" name="P3_1_2[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nama Instansi</label>\
                <input type="text" class="form-control" name="P3_1_3[]">\
            </div>\
        </div>\
    </div>\
';

function p3_1_detail_init(val){
    var p3_count = p3_count_id.value;
    if (val != 0) {
        if (val>p3_count) {
            for (i=0; i<(val-p3_count); i++) {
                hidden_p3_1_detail_id.insertAdjacentHTML('beforeend', p3_1_detail_html);
            }
        } else if (val<p3_count) {
            for (i=0; i<(p3_count-val); i++) {
                hidden_p3_1_detail_id.removeChild(hidden_p3_1_detail_id.lastElementChild);
            }
        } else {
            hidden_p3_1_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p3_1_detail_id.innerHTML += p3_1_detail_html;
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
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nomor Rekomendasi</label>\
                <input type="text" class="form-control" name="P4_1_1[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Tanggal Rekomendasi</label>\
                <input type="text" class="form-control" name="P4_1_2[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nama Instansi</label>\
                <input type="text" class="form-control" name="P4_1_3[]">\
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