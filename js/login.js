const box = document.querySelector('.box');
const dark = document.querySelector('.dark');
const reg = document.querySelector('.register');
const log = document.querySelector('.login');

function myClick() {
    box.style.display = 'block';
    dark.style.display = 'block';
}

function toClose() {
    dark.style.display = "none";
    box.style.display = "none";
    document.getElementById('nis').value = "";
    document.getElementById('nama').value = "";
    document.getElementById('pw').value = "";
    document.getElementById('nis1').value = "";
    document.getElementById('nama1').value = "";
    document.getElementById('pw1').value = "";
    document.getElementById('cpw').value = "";
}

window.onclick = function(e) {
    if (e.target == dark) {
        dark.style.display = "none";
        box.style.display = "none";
        document.getElementById('nis').value = "";
        document.getElementById('nama').value = "";
        document.getElementById('pw').value = "";
        document.getElementById('nis1').value = "";
        document.getElementById('nama1').value = "";
        document.getElementById('pw1').value = "";
        document.getElementById('cpw').value = "";
    }
}

function regOpen() {
    reg.style.zIndex = "1";
    log.style.zIndex = "0";
}

function logOpen() {
    log.style.zIndex = "1";
    reg.style.zIndex = "0";
}

function login() {
    document.getElementById('nis').value = "";
    document.getElementById('nama').value = "";
    document.getElementById('pw').value = "";
}
window.onload = function() {
    loadClock();
}

function loadClock() {
    blntglthn = document.getElementById("d-m-y"),
        hrip = document.getElementById("hrip"),

        wkt = new Date(),
        bln = wkt.getMonth(),
        tgl = wkt.getDate(),
        thn = wkt.getFullYear(),
        hri = wkt.getDay();

    function whichMonth() {
        var blnfull = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ];
        var blnini = blnfull[bln];
        blntglthn.innerHTML = tgl + " " + blnini + " " + thn;
    }

    function whichDay() {
        mngu = [
            "Minggu",
            "Senin",
            "Selasa",
            "Rabu",
            "Kamis",
            "Jumat",
            "Sabtu",
        ];
        var hrini = mngu[hri];
        hrip.innerHTML = hrini;
    }
    whichMonth();
    whichDay();
}