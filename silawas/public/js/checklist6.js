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

function check_b1_pks() {
    if(document.getElementById('check_b1_pks').checked) {
        document.getElementById('hidden_b1_pks').style.display="block";
    } else {
        document.getElementById('hidden_b1_pks').style.display="none";
    }
}

// ==============
// Form Survey B2
// ==============

function check_b2() {
    var b2_count_value = 0;
    if(document.getElementById('b2_1').checked) {
        b2_count_value = 1;
        document.getElementById('b2_count').value = b2_count_value;
        b2_detail_init(b2_count_value);
        document.getElementById('hidden_b2').style.display="block";
    } 
    else if(document.getElementById('b2_2').checked) {
        b2_count_value = 0;
        document.getElementById('b2_count').value = b2_count_value;
        b2_detail_init(b2_count_value);
        document.getElementById('hidden_b2').style.display="none";
    }
}

var b2_count_id = document.getElementById("b2_count");
function b2_plus(){
    var b2_count = b2_count_id.value;
    b2_count_id.value = ++b2_count;
    b2_detail_init(document.getElementById('b2_count').value);
}
function b2_minus(){
    var b2_count = b2_count_id.value;
    if (b2_count > 1) {
        b2_count_id.value = --b2_count;
        b2_detail_init(document.getElementById('b2_count').value);
    } 
    else if (b2_count == 1) {
        document.getElementById('b2_2').checked = true;
        check_b2();
    }
}

var b2_detail_html = '\
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

document.getElementById('b2_count').addEventListener('change', function(event) {
    event.preventDefault();
    b2_detail_init(this.value);
});

function b2_detail_init(val){
    document.getElementById('hidden_b2_detail').innerHTML = '';
    if (val != 0) {
        for (i=0; i<val; i++) {
            document.getElementById('hidden_b2_detail').innerHTML += b2_detail_html;
        }
    }
}

// ==============
// Form Survey B3
// ==============

function check_b3() {
    if(document.getElementById('b3_1').checked) {
        document.getElementById('hidden_b3').style.display="block";
    } else if(document.getElementById('b3_2').checked) {
        document.getElementById('hidden_b3').style.display="none";
    }
}

// ==============
// Form Survey B4
// ==============

function check_b4() {
    if(document.getElementById('b4_1').checked) {
        document.getElementById('hidden_b4').style.display="block";
    } else if(document.getElementById('b4_2').checked) {
        document.getElementById('hidden_b4').style.display="none";
    }
}

document.getElementById('b4_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    b4_label.innerHTML = fileName;
});

// ==============
// Form Survey B5
// ==============

function check_b5_1() {
    if(document.getElementById('check_b5_1').checked) {
        document.getElementById('hidden_b5_1').style.display="block";
    } else {
        document.getElementById('hidden_b5_1').style.display="none";
    }
}

function check_b5_2() {
    if(document.getElementById('check_b5_2').checked) {
        document.getElementById('hidden_b5_2').style.display="block";
    } else {
        document.getElementById('hidden_b5_2').style.display="none";
    }
}

function check_b5_3() {
    if(document.getElementById('check_b5_3').checked) {
        document.getElementById('hidden_b5_3').style.display="block";
    } else {
        document.getElementById('hidden_b5_3').style.display="none";
    }
}

// ==============
// Form Survey B6
// ==============

function check_b6() {
    if(document.getElementById('b6_1').checked) {
        document.getElementById('hidden_b6').style.display="block";
    } else if(document.getElementById('b6_2').checked) {
        document.getElementById('hidden_b6').style.display="none";
    }
}

// ==============
// Form Survey B7
// ==============

function check_b7() {
    if(document.getElementById('b7_1').checked) {
        document.getElementById('hidden_b7').style.display="block";
    } else if(document.getElementById('b7_2').checked) {
        document.getElementById('hidden_b7').style.display="none";
    }
}

// ==============
// Form Survey B8
// ==============

function check_b8() {
    if(document.getElementById('b8_1').checked) {
        document.getElementById('hidden_b8').style.display="block";
    } else if(document.getElementById('b8_2').checked) {
        document.getElementById('hidden_b8').style.display="none";
    }
}

// ==============
// Form Survey B9
// ==============

function check_b9() {
    if(document.getElementById('b9_1').checked) {
        document.getElementById('hidden_b9').style.display="block";
    } else if(document.getElementById('b9_2').checked) {
        document.getElementById('hidden_b9').style.display="none";
    }
}

// ==============
// Form Survey B10
// ==============

function check_b10() {
    if(document.getElementById('b10_1').checked) {
        document.getElementById('hidden_b10').style.display="block";
    } else if(document.getElementById('b10_2').checked) {
        document.getElementById('hidden_b10').style.display="none";
    }
}

// ==============
// Form Survey B11
// ==============

function check_b11() {
    if(document.getElementById('b11_1').checked) {
        document.getElementById('hidden_b11').style.display="block";
    } else if(document.getElementById('b11_2').checked) {
        document.getElementById('hidden_b11').style.display="none";
    }
}

// ==============
// Form Survey B12
// ==============

function check_b12() {
    if(document.getElementById('b12_1').checked) {
        document.getElementById('hidden_b12').style.display="block";
    } else if(document.getElementById('b12_2').checked) {
        document.getElementById('hidden_b12').style.display="none";
    }
}

// ==============
// Form Survey B13
// ==============

function check_b13() {
    if(document.getElementById('b13_1').checked) {
        document.getElementById('hidden_b13').style.display="block";
    } else if(document.getElementById('b13_2').checked) {
        document.getElementById('hidden_b13').style.display="none";
    }
}

// ==============
// Form Survey B14
// ==============

function check_b14() {
    if(document.getElementById('b14_1').checked) {
        document.getElementById('hidden_b14').style.display="block";
    } else if(document.getElementById('b14_2').checked) {
        document.getElementById('hidden_b14').style.display="none";
    }
}

// ==============
// Form Survey B15
// ==============

function check_b15() {
    if(document.getElementById('b15_1').checked) {
        document.getElementById('hidden_b15').style.display="block";
    } else if(document.getElementById('b15_2').checked) {
        document.getElementById('hidden_b15').style.display="none";
    }
}

// ==============
// Form Survey B16
// ==============

function check_b16() {
    if(document.getElementById('b16_1').checked) {
        document.getElementById('hidden_b16').style.display="block";
    } else if(document.getElementById('b16_2').checked) {
        document.getElementById('hidden_b16').style.display="none";
    }
}

// ==============
// Form Survey B17
// ==============

function check_b17() {
    if(document.getElementById('b17_1').checked) {
        document.getElementById('hidden_b17').style.display="block";
    } else if(document.getElementById('b17_2').checked) {
        document.getElementById('hidden_b17').style.display="none";
    }
}

// ==============
// Form Survey B18
// ==============

function check_b18() {
    if(document.getElementById('b18_1').checked) {
        document.getElementById('hidden_b18').style.display="block";
    } else if(document.getElementById('b18_2').checked) {
        document.getElementById('hidden_b18').style.display="none";
    }
}

// ==============
// Form Survey B28
// ==============

var b28_hidden_html = '\
    <div class="row">\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jumlah Unit</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="b28_1">\
                    <div class="input-group-append">\
                        <span class="input-group-text">unit</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Total Kapasitas</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="b28_2">\
                    <div class="input-group-append">\
                        <span class="input-group-text">ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Total Realisasi</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="b28_3">\
                    <div class="input-group-append">\
                        <span class="input-group-text">ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
';

function clear_b28() {
    document.getElementById('hidden_b28_1').style.display="none";
    document.getElementById('hidden_b28_2').style.display="none";
    document.getElementById('hidden_b28_3').style.display="none";
    document.getElementById('hidden_b28_4').style.display="none";
    document.getElementById('hidden_b28_5').style.display="none";
    document.getElementById('hidden_b28_1').innerHTML = '';
    document.getElementById('hidden_b28_2').innerHTML = '';
    document.getElementById('hidden_b28_3').innerHTML = '';
    document.getElementById('hidden_b28_4').innerHTML = '';
    document.getElementById('hidden_b28_5').innerHTML = '';
}

function check_b28() {
    if(document.getElementById('b28_1').checked) {
        clear_b28();
        document.getElementById('hidden_b28_1').innerHTML = b28_hidden_html;
        document.getElementById('hidden_b28_1').style.display="block";
    } 
    else if(document.getElementById('b28_2').checked) {
        clear_b28();
        document.getElementById('hidden_b28_2').innerHTML = b28_hidden_html;
        document.getElementById('hidden_b28_2').style.display="block";
    }
    else if(document.getElementById('b28_3').checked) {
        clear_b28();
        document.getElementById('hidden_b28_3').innerHTML = b28_hidden_html;
        document.getElementById('hidden_b28_3').style.display="block";
    }
    else if(document.getElementById('b28_4').checked) {
        clear_b28();
        document.getElementById('hidden_b28_4').innerHTML = b28_hidden_html;
        document.getElementById('hidden_b28_4').style.display="block";
    }
    else if(document.getElementById('b28_5').checked) {
        clear_b28();
        document.getElementById('hidden_b28_5').innerHTML = b28_hidden_html;
        document.getElementById('hidden_b28_5').style.display="block";
    }
}

// ==============
// Form Survey B29
// ==============

function check_b29() {
    if(document.getElementById('b29_1').checked) {
        document.getElementById('hidden_b29_2').style.display="none";
        document.getElementById('hidden_b29_1').style.display="block";
    } else if(document.getElementById('b29_2').checked) {
        document.getElementById('hidden_b29_1').style.display="none";
        document.getElementById('hidden_b29_2').style.display="block";
    }
}

// ==============
// Form Survey B30
// ==============

function check_b30() {
    if(document.getElementById('b30_1').checked) {
        document.getElementById('hidden_b30_2').style.display="none";
        document.getElementById('hidden_b30_1').style.display="block";
    } else if(document.getElementById('b30_2').checked) {
        document.getElementById('hidden_b30_1').style.display="none";
        document.getElementById('hidden_b30_2').style.display="block";
    }
}

// ==============
// Form Survey B31
// ==============

function check_b31() {
    if(document.getElementById('b31_1').checked) {
        b31_count_value = 1;
        document.getElementById('b31_count').value = b31_count_value;
        b31_detail_init(b31_count_value);
        document.getElementById('hidden_b31').style.display="block";
    } 
    else if(document.getElementById('b31_2').checked) {
        b31_count_value = 1;
        document.getElementById('b31_count').value = b31_count_value;
        b31_detail_init(b31_count_value);
        document.getElementById('hidden_b31').style.display="block";
    }
    else if(document.getElementById('b31_3').checked) {
        b31_count_value = 1;
        document.getElementById('b31_count').value = b31_count_value;
        b31_detail_init(b31_count_value);
        document.getElementById('hidden_b31').style.display="block";
    }
    else if(document.getElementById('b31_4').checked) {
        b31_count_value = 1;
        document.getElementById('b31_count').value = b31_count_value;
        b31_detail_init(b31_count_value);
        document.getElementById('hidden_b31').style.display="block";
    }
    else {
        b31_count_value = 0;
        document.getElementById('b31_count').value = b31_count_value;
        b31_detail_init(b31_count_value);
        document.getElementById('hidden_b31').style.display="none";
    }
}

function clear_b31(){
    document.getElementById('b31_1').checked = false;
    document.getElementById('b31_2').checked = false;
    document.getElementById('b31_3').checked = false;
    document.getElementById('b31_4').checked = false;
}

var b31_count_id = document.getElementById("b31_count");
function b31_plus(){
    var b31_count = b31_count_id.value;
    b31_count_id.value = ++b31_count;
    b31_detail_init(document.getElementById('b31_count').value);
}
function b31_minus(){
    var b31_count = b31_count_id.value;
    if (b31_count > 1) {
        b31_count_id.value = --b31_count;
        b31_detail_init(document.getElementById('b31_count').value);
    }
    else if (b31_count == 1) {
        clear_b31();
        check_b31();
    }
}

var b31_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Nama Penerima</label>\
                <input type="text" class="form-control" name="b31_nama[]">\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jenis Produk</label>\
                <input type="text" class="form-control" name="b31_jenis[]">\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jumlah Produk</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="b31_jumlah[]">\
                    <div class="input-group-append">\
                        <span class="input-group-text">ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="col-md-12">\
            <div class="form-group">\
                <label>Alamat Penerima</label>\
                <textarea class="form-control" rows="3" name="b31_alamat[]"></textarea>\
            </div>\
        </div>\
    </div>\
';

function b31_detail_init(val){
    document.getElementById('hidden_b31_detail').innerHTML = '';
    for (i=0; i<val; i++) {
        document.getElementById('hidden_b31_detail').innerHTML += b31_detail_html;
    }
}

// ==============
// Form Survey B32
// ==============

var b32_hidden_html = '\
    <div class="row">\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jenis Alat</label>\
                <input type="text" class="form-control" name="b32_jenis">\
            </div>\
        </div>\
        <div class="col-md-4">\
            <div class="form-group">\
                <label>Jumlah Alat</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="b32_unit">\
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
                    <input type="text" class="form-control" name="b32_kapasitas">\
                    <div class="input-group-append">\
                        <span class="input-group-text">ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
';

function clear_b32() {
    document.getElementById('hidden_b32_1').style.display="none";
    document.getElementById('hidden_b32_2').style.display="none";
    document.getElementById('hidden_b32_3').style.display="none";
    document.getElementById('hidden_b32_1').innerHTML = '';
    document.getElementById('hidden_b32_2').innerHTML = '';
    document.getElementById('hidden_b32_3').innerHTML = '';
}

function check_b32() {
    if(document.getElementById('b32_1').checked) {
        clear_b32();
        document.getElementById('hidden_b32_1').innerHTML = b32_hidden_html;
        document.getElementById('hidden_b32_1').style.display="block";
    } 
    else if(document.getElementById('b32_2').checked) {
        clear_b32();
        document.getElementById('hidden_b32_2').innerHTML = b32_hidden_html;
        document.getElementById('hidden_b32_2').style.display="block";
    }
    else if(document.getElementById('b32_3').checked) {
        clear_b32();
        document.getElementById('hidden_b32_3').innerHTML = b32_hidden_html;
        document.getElementById('hidden_b32_3').style.display="block";
    }
}

// ==============
// Form Survey B33
// ==============

function check_b33() {
    if(document.getElementById('b33_1').checked) {
        document.getElementById('hidden_b33').style.display="block";
    } else if(document.getElementById('b33_2').checked) {
        document.getElementById('hidden_b33').style.display="none";
    }
}