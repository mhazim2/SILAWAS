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
        var count_input = document.getElementById('hidden_p3_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p3_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p3_2').style.display="block";
    }
}

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
    if(document.getElementById('p6_1').checked) {
        document.getElementById('hidden_p6_2').style.display="none";
        document.getElementById('hidden_p6_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p6_1').style.display="block";
    } else if(document.getElementById('p6_2').checked) {
        document.getElementById('hidden_p6_1').style.display="none";
        document.getElementById('hidden_p6_1').getElementsByTagName('input')[0].value=null;
        document.getElementById('p6_1_label').innerHTML="Pilih file...";
        document.getElementById('hidden_p6_2').style.display="block";
    }
}

document.getElementById('p6_1_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('p6_1_label').innerHTML=fileName;
});

// ==============
// Form Survey P7
// ==============

function check_p7() {
    if(document.getElementById('p7_1').checked) {
        document.getElementById('hidden_p7_2').style.display="none";
        document.getElementById('hidden_p7_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p7_1').style.display="block";
    } else if(document.getElementById('p7_2').checked) {
        document.getElementById('hidden_p7_1').style.display="none";
        document.getElementById('hidden_p7_1').getElementsByTagName('input')[0].value=null;
        document.getElementById('p7_1_label').innerHTML="Pilih file...";
        document.getElementById('hidden_p7_2').style.display="block";
    }
}

document.getElementById('p7_1_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('p7_1_label').innerHTML=fileName;
});

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

// ==============
// Form Survey P14
// ==============

function check_p14() {
    document.getElementById('hidden_p14').style.display="block";
}

// ==============
// Form Survey P15
// ==============

function check_p15() {
    document.getElementById('hidden_p15').style.display="block";
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

function check_p17() {
    document.getElementById('hidden_p17').style.display="block";
}

// ==============
// Form Survey P18
// ==============

function check_p18() {
    document.getElementById('hidden_p18').style.display="block";
}

// ==============
// Form Survey P19
// ==============

function check_p19() {
    document.getElementById('hidden_p19').style.display="block";
}

// ==============
// Form Survey P20
// ==============

function check_p20() {
    document.getElementById('hidden_p20').style.display="block";
}

// ==============
// Form Survey P21
// ==============

function check_p21() {
    document.getElementById('hidden_p21').style.display="block";
}

// ==============
// Form Survey P22
// ==============

function check_p22() {
    document.getElementById('hidden_p22').style.display="block";
}

// ==============
// Form Survey P23
// ==============

function check_p23() {
    document.getElementById('hidden_p23').style.display="block";
}

// ==============
// Form Survey P24
// ==============

function check_p24() {
    document.getElementById('hidden_p24').style.display="block";
}

// ==============
// Form Survey P25
// ==============

function check_p25() {
    document.getElementById('hidden_p25').style.display="block";
}

// ==============
// Form Survey P26
// ==============

function check_p26() {
    if(document.getElementById('p26_1').checked) {
        document.getElementById('hidden_p26_2').style.display="none";
        document.getElementById('hidden_p26_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p26_1').style.display="block";
    } else if(document.getElementById('p26_2').checked) {
        document.getElementById('hidden_p26_1').style.display="none";
        document.getElementById('hidden_p26_1').getElementsByTagName('input')[0].value=null;
        document.getElementById('p26_1_label').innerHTML="Pilih file...";
        document.getElementById('hidden_p26_2').style.display="block";
    }
}

document.getElementById('p26_1_file').addEventListener('change', function(event) {
    event.preventDefault();
    var fileName = this.files[0].name;
    document.getElementById('p26_1_label').innerHTML=fileName;
});

// ==============
// Form Survey P27
// ==============

function check_p27() {
    document.getElementById('hidden_p27').style.display="block";
}

// ==============
// Form Survey P28
// ==============

function check_p28() {
    if(document.getElementById('p28_1').checked) {
        document.getElementById('hidden_p28_2').style.display="none";
        document.getElementById('hidden_p28_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p28_1').style.display="block";
    } else if(document.getElementById('p28_2').checked) {
        document.getElementById('hidden_p28_1').style.display="none";
        document.getElementById('hidden_p28_1').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p28_2').style.display="block";
    }
}

// ==============
// Form Survey P29
// ==============

function check_p29() {
    if(document.getElementById('p29_1').checked) {
        document.getElementById('hidden_p29_2').style.display="none";
        document.getElementById('hidden_p29_2').getElementsByTagName('input')[0].value=null;
        document.getElementById('hidden_p29_1').style.display="block";
    } else if(document.getElementById('p29_2').checked) {
        document.getElementById('hidden_p29_1').style.display="none";
        var count_input = document.getElementById('hidden_p29_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p29_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p29_2').style.display="block";
    }
}

// ==============
// Form Survey P30
// ==============

function check_p30() {
    if(document.getElementById('p30_1').checked) {
        document.getElementById('hidden_p30_2').style.display="none";
        document.getElementById('hidden_p30_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p30_1').style.display="block";
    } else if(document.getElementById('p30_2').checked) {
        document.getElementById('hidden_p30_1').style.display="none";
        var count_input = document.getElementById('hidden_p30_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p30_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p30_2').style.display="block";
    }
}

// ==============
// Form Survey P32
// ==============

var p32_count_id = document.getElementById("p32_count");
var hidden_p32_id = document.getElementById("hidden_p32");
var hidden_p32_detail_id = document.getElementById("hidden_p32_detail");
var check_p32_1 = document.getElementById("p32_1");
var check_p32_2 = document.getElementById("p32_2");
var check_p32_3 = document.getElementById("p32_3");
var check_p32_4 = document.getElementById("p32_4");

function check_p32() {
    var p32_count_value = 0;
    if(check_p32_1.checked || check_p32_2.checked || check_p32_3.checked || check_p32_4.checked) {
        p32_count_value = 1;
        p32_detail_init(p32_count_value);
        hidden_p32_id.style.display = "block";
    }
    else {
        p32_count_value = 0;
        p32_detail_init(p32_count_value);
        hidden_p32_id.style.display = "none";
    }
}

function clear_p32(){
    check_p32_1.checked = false;
    check_p32_2.checked = false;
    check_p32_3.checked = false;
    check_p32_4.checked = false;
}

function p32_plus(){
    var p32_count = p32_count_id.value;
    p32_count++;
    p32_detail_init(p32_count);
}

function p32_minus(){
    var p32_count = p32_count_id.value;
    if (p32_count > 1) {
        p32_count--;
        p32_detail_init(p32_count);
    } 
    else if (p32_count == 1) {
        clear_p32();
        check_p32();
    }
}

var p32_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nama Penerima</label>\
                <input type="text" class="form-control" name="P32_1[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Jenis Produk</label>\
                <input type="text" class="form-control" name="P32_2[]">\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Jumlah Produk</label>\
                <div class="input-group mb-3">\
                    <input type="text" class="form-control" name="P32_3[]">\
                    <div class="input-group-append">\
                        <span class="input-group-text">ton</span>\
                    </div>\
                </div>\
            </div>\
        </div>\
        <div class="col-lg-12">\
            <div class="form-group">\
                <label>Alamat Penerima</label>\
                <textarea class="form-control" rows="3" name="P32_4[]"></textarea>\
            </div>\
        </div>\
    </div>\
';

function p32_detail_init(val){
    var p32_count = p32_count_id.value;
    if (val != 0) {
        if (val>p32_count) {
            for (i=0; i<(val-p32_count); i++) {
                hidden_p32_detail_id.insertAdjacentHTML('beforeend', p32_detail_html);
            }
        } else if (val<p32_count) {
            for (i=0; i<(p32_count-val); i++) {
                hidden_p32_detail_id.removeChild(hidden_p32_detail_id.lastElementChild);
            }
        } else {
            hidden_p32_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p32_detail_id.innerHTML += p32_detail_html;
            }
        }
    } else {
        hidden_p32_detail_id.innerHTML = '';
    }
    p32_count_id.value = val;
}