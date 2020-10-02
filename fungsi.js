// function myFungsi() {
    var dataEmail   = document.getElementById('inputEmail').value;
    var dataNama    = document.getElementById('inputNama').value;
    var dataAlamat  = document.getElementById('inputAddress').value;
    document.getElementById('dataEmail').innerHTML  = dataEmail;
    document.getElementById('dataNama').innerHTML   = dataNama;
    document.getElementById('dataAlamat').innerHTML = dataAlamat;
//   }

// rumus luas //
function rumusLuas() {
  var dataSisi1   = document.getElementById('inputsisi1').value;
  var dataSisi2   = document.getElementById('inputsisi2').value;
  var dataPilihan = document.getElementById('inputRumus').value;
  var hasil;
  // rumus persegi //
  if (dataPilihan=='rumusPersegi') {
    hasil = dataSisi1*dataSisi2;
  }
  // rumus segitiga //
if ( dataPilihan=='rumusSegitiga'){
    hasil=dataSisi1*dataSisi2*0.5;
}
  document.getElementById('hasil1').innerHTML  = hasil;
}

// rumus volume //
function rumusVolume(){
    var sisipanjang =document.getElementById('inputpanjang').value;
    var sisilebar =document.getElementById('inputlebar').value;
    var sisitinggi =document.getElementById('inputtinggi').value;
    var dataPilihan =document.getElementById('inputRumus2').value;
    var hasil2;
    // rumus tabung//
    if ( dataPilihan=='rumusTabung') {
        hasil2=sisilebar*sisilebar* sisitinggi*3.14;
    }
    // rumus kubus//
    if ( dataPilihan=='rumusKubus'){
        hasil2=sisipanjang*sisipanjang*sisipanjang;
    }
    // rumus balok//
    if ( dataPilihan=='rumusBalok'){
        hasil2=sisipanjang*sisilebar*sisitinggi;
    }

    document.getElementById('hasil2').innerHTML = hasil2;
}
 //rumus diskon//
 function rumusProduk(){
     var harga =document.getElementById('inputharga').value;
     var produk =document.getElementById('inputproduk').value;
     var dataPilihan =document.getElementById('inputRumus3').value;
     var hasil3;
     //rumus 10%//
     if ( dataPilihan=='diskon10'){
         hasil3=(harga*produk)-(harga*produk*0.1);
     }
     if (dataPilihan=='diskon20'){
         hasil3=(harga*produk)-(harga*produk*0.2);
     }
     if(dataPilihan=='diskon30'){
         hasil3=(harga*produk)-(harga*produk*0.3);
     }
     if ( dataPilihan=='diskon55'){
         hasil3=(harga*produk)-(harga*produk*0.55);
     }
     if ( dataPilihan=='diskon70'){
         hasil3=(harga*produk)-(harga*produk*0.7);
     }

     document.getElementById('hasil3').innerHTML = hasil3;
 }
 function rumusGanjilGenap(){
     var ganjil =document.getElementById('inputganjil').value;
     var genap =document.getElementById('inputgenap').value;
     dataPilihan =document.getElementById('inputRumus4').value;
     var hasil4;
     //rumus ganjil//
     if (dataPilihan =='ganjil'){
         hasil4 = 
     }
     
 }