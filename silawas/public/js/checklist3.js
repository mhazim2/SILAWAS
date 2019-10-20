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
        var count_input = document.getElementById('hidden_p3_1').getElementsByTagName('input').length;
        for (var i=0; i<count_input; i++) document.getElementById('hidden_p3_1').getElementsByTagName('input')[i].value=null;
        document.getElementById('hidden_p3_2').style.display="block";
    }
}

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

function check_p5() {
    if(document.getElementById('p5_1').checked) {
        document.getElementById('hidden_p5_2').style.display="none";
        document.getElementById('hidden_p5_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p5_1').style.display="block";
    } else if(document.getElementById('p5_2').checked) {
        document.getElementById('hidden_p5_1').style.display="none";
        document.getElementById('p5_1_1').checked=false;
        document.getElementById('p5_1_2').checked=false;
        document.getElementById('hidden_p5_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('hidden_p5_1').getElementsByTagName('input')[3].value=null;
        document.getElementById('hidden_p5_1').getElementsByTagName('input')[4].value=null;
        document.getElementById('hidden_p5_1').getElementsByTagName('input')[5].value=null;
        document.getElementById('hidden_p5_1').getElementsByTagName('input')[6].value=null;
        document.getElementById('hidden_p5_2').style.display="block";
    }
}

// ==============
// Form Survey P6
// ==============

var p6_count_id = document.getElementById("p6_count");
var hidden_p6_1_id = document.getElementById("hidden_p6_1");
var hidden_p6_2_id = document.getElementById("hidden_p6_2");
var hidden_p6_1_detail_id = document.getElementById("hidden_p6_1_detail");

function check_p6() {
    var p6_count_value = 0;
    if(document.getElementById('p6_1').checked) {
        hidden_p6_2_id.style.display="none";
        hidden_p6_2_id.getElementsByTagName('input')[0].value=null;
        p6_count_value = 1;
        p6_detail_init(p6_count_value);
        hidden_p6_1_id.style.display="block";
    } 
    else if(document.getElementById('p6_2').checked) {
        p6_count_value = 0;
        p6_detail_init(p6_count_value);
        hidden_p6_1_id.style.display="none";
        hidden_p6_2_id.style.display="block";
    }
}

function p6_plus(){
    var p6_count = p6_count_id.value;
    p6_count++;
    p6_detail_init(p6_count);
}

function p6_minus(){
    var p6_count = p6_count_id.value;
    if (p6_count > 1) {
        p6_count--;
        p6_detail_init(p6_count);
    } 
    else if (p6_count == 1) {
        document.getElementById('p6_2').checked = true;
        check_p6();
    }
}

var p6_detail_html = '\
    <div class="row bg-light p-2 mb-2">\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Nama Lengkap</label>\
                <input type="text" class="form-control" name="P6_1_1[]">\
                <small class="form-text text-muted"><b>Contoh:</b> Drh. Abcd</small>\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>Status Kepegawaian</label>\
                <input type="text" class="form-control" name="P6_1_2[]">\
                <small class="form-text text-muted"><b>Contoh:</b> Swasta</small>\
            </div>\
        </div>\
        <div class="col-lg-4">\
            <div class="form-group">\
                <label>No. Telepon</label>\
                <input type="text" class="form-control" name="P6_1_3[]">\
                <small class="form-text text-muted"><b>Contoh:</b> 08XXXXXXXXXX</small>\
            </div>\
        </div>\
    </div>\
';

p6_count_id.addEventListener('change', function(event) {
    event.preventDefault();
    p6_detail_init(this.value);
});

function p6_detail_init(val){
    var p6_count = p6_count_id.value;
    if (val != 0) {
        if (val>p6_count) {
            for (i=0; i<(val-p6_count); i++) {
                hidden_p6_1_detail_id.insertAdjacentHTML('beforeend', p6_detail_html);
            }
        } else if (val<p6_count) {
            for (i=0; i<(p6_count-val); i++) {
                hidden_p6_1_detail_id.removeChild(hidden_p6_1_detail_id.lastElementChild);
            }
        } else {
            hidden_p6_1_detail_id.innerHTML = '';
            for (i=0; i<val; i++) {
                hidden_p6_1_detail_id.innerHTML += p6_detail_html;
            }
        }
    } else {
        hidden_p6_1_detail_id.innerHTML = '';
    }
    p6_count_id.value = val;
}

// ==============
// Form Survey P7
// ==============

function check_p7() {
    if(document.getElementById('p7_1').checked) {
        document.getElementById('hidden_p7_2').style.display="none";
        document.getElementById('hidden_p7_2').getElementsByTagName('input')[0].value=null;
        document.getElementById('hidden_p7_1').style.display="block";
    } else if(document.getElementById('p7_2').checked) {
        document.getElementById('hidden_p7_1').style.display="none";
        document.getElementById('p7_1_1').checked=false;
        document.getElementById('p7_1_2').checked=false;
        document.getElementById('hidden_p7_1').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p7_2').style.display="block";
    }
}

// ==============
// Form Survey P8
// ==============

function check_p8() {
    if(document.getElementById('p8_1').checked) {
        document.getElementById('hidden_p8_2').style.display="none";
        document.getElementById('hidden_p8_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p8_1').style.display="block";
    } else if(document.getElementById('p8_2').checked) {
        document.getElementById('hidden_p8_1').style.display="none";
        document.getElementById('p8_1_1').checked=false;
        document.getElementById('p8_1_2').checked=false;
        document.getElementById('hidden_p8_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('p8_3_1').checked=false;
        document.getElementById('p8_3_2').checked=false;
        document.getElementById('hidden_p8_2').style.display="block";
    }
}

// ==============
// Form Survey P9
// ==============

function check_p9() {
    if(document.getElementById('p9_1').checked) {
        document.getElementById('hidden_p9_2').style.display="none";
        document.getElementById('hidden_p9_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p9_1').style.display="block";
    } else if(document.getElementById('p9_2').checked) {
        document.getElementById('hidden_p9_1').style.display="none";
        document.getElementById('p9_1_1').checked=false;
        document.getElementById('p9_1_2').checked=false;
        document.getElementById('hidden_p9_2').style.display="block";
    }
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
        document.getElementById('hidden_p11_1').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p11_2').style.display="block";
    }
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
    if(document.getElementById('p14_1').checked) {
        document.getElementById('hidden_p14_2').style.display="none";
        document.getElementById('hidden_p14_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p14_1').style.display="block";
    } else if(document.getElementById('p14_2').checked) {
        document.getElementById('hidden_p14_1').style.display="none";
        document.getElementById('hidden_p14_1').getElementsByTagName('input')[0].value=null;
        document.getElementById('p14_2_1').checked=false;
        document.getElementById('p14_2_2').checked=false;
        document.getElementById('hidden_p14_1').getElementsByTagName('input')[3].value=null;
        document.getElementById('hidden_p14_2').style.display="block";
    }
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
    if(document.getElementById('p17_1').checked) {
        document.getElementById('hidden_p17_2').style.display="none";
        document.getElementById('hidden_p17_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p17_1').style.display="block";
    } else if(document.getElementById('p17_2').checked) {
        document.getElementById('hidden_p17_1').style.display="none";
        document.getElementById('p17_1_1').checked=false;
        document.getElementById('p17_1_2').checked=false;
        document.getElementById('hidden_p17_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('hidden_p17_2').style.display="block";
    }
}

// ==============
// Form Survey P18
// ==============

function check_p18() {
    if(document.getElementById('p18_1').checked) {
        document.getElementById('hidden_p18_2').style.display="none";
        document.getElementById('hidden_p18_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p18_1').style.display="block";
    } else if(document.getElementById('p18_2').checked) {
        document.getElementById('hidden_p18_1').style.display="none";
        document.getElementById('p18_1_1').checked=false;
        document.getElementById('p18_1_2').checked=false;
        document.getElementById('hidden_p18_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('hidden_p18_1').getElementsByTagName('input')[3].value=null;
        document.getElementById('p18_4_1').checked=false;
        document.getElementById('p18_4_2').checked=false;
        document.getElementById('hidden_p18_2').style.display="block";
    }
}

// ==============
// Form Survey P19
// ==============

function check_p19() {
    if(document.getElementById('p19_1').checked) {
        document.getElementById('hidden_p19_2').style.display="none";
        document.getElementById('hidden_p19_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p19_1').style.display="block";
    } else if(document.getElementById('p19_2').checked) {
        document.getElementById('hidden_p19_1').style.display="none";
        document.getElementById('p19_1_1').checked=false;
        document.getElementById('p19_1_2').checked=false;
        document.getElementById('p19_2_1').checked=false;
        document.getElementById('p19_2_2').checked=false;
        document.getElementById('p19_3_1').checked=false;
        document.getElementById('p19_3_2').checked=false;
        document.getElementById('hidden_p19_2').style.display="block";
    }
}

// ==============
// Form Survey P20
// ==============

function check_p20() {
    if(document.getElementById('p20_1').checked) {
        document.getElementById('hidden_p20_2').style.display="none";
        document.getElementById('hidden_p20_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p20_1').style.display="block";
    } else if(document.getElementById('p20_2').checked) {
        document.getElementById('hidden_p20_1').style.display="none";
        document.getElementById('p20_1_1').checked=false;
        document.getElementById('p20_1_2').checked=false;
        document.getElementById('p20_2_1').checked=false;
        document.getElementById('p20_2_2').checked=false;
        document.getElementById('p20_3_1').checked=false;
        document.getElementById('p20_3_2').checked=false;
        document.getElementById('hidden_p20_1').getElementsByTagName('input')[6].value=null;
        document.getElementById('hidden_p20_1').getElementsByTagName('input')[7].value=null;
        document.getElementById('p20_6_1').checked=false;
        document.getElementById('p20_6_2').checked=false;
        document.getElementById('hidden_p20_2').style.display="block";
    }
}

// ==============
// Form Survey P21
// ==============

function check_p21() {
    if(document.getElementById('p21_1').checked) {
        document.getElementById('hidden_p21_2').style.display="none";
        document.getElementById('hidden_p21_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p21_1').style.display="block";
    } else if(document.getElementById('p21_2').checked) {
        document.getElementById('hidden_p21_1').style.display="none";
        document.getElementById('p21_1_1').checked=false;
        document.getElementById('p21_1_2').checked=false;
        document.getElementById('hidden_p21_2').style.display="block";
    }
}

// ==============
// Form Survey P22
// ==============

function check_p22() {
    if(document.getElementById('p22_1').checked) {
        document.getElementById('hidden_p22_2').style.display="none";
        document.getElementById('hidden_p22_2').getElementsByTagName('textarea')[0].value=null;
        document.getElementById('hidden_p22_1').style.display="block";
    } else if(document.getElementById('p22_2').checked) {
        document.getElementById('hidden_p22_1').style.display="none";
        document.getElementById('p22_1_1').checked=false;
        document.getElementById('p22_1_2').checked=false;
        document.getElementById('hidden_p22_1').getElementsByTagName('input')[2].value=null;
        document.getElementById('hidden_p22_2').style.display="block";
    }
}