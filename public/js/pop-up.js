const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success container rounded-pill mt-4',
    },
    buttonsStyling: false
})

function domisili() {
  swalWithBootstrapButtons.fire({
    html: 'Saat ini TolongDesa baru hanya dapat ' +
      'digunakan di Desa Beurawe. Apabila ' +
      'anda seorang kepala desa dan ingin ' +
      'menggunakan TolongDesa dapat ' +
      'menghubungi melalui laman Kontak',
    confirmButtonText: 'Ok',
  })
}

function daftargagal() {
  swalWithBootstrapButtons.fire({
    icon: 'error',
    title : 'Proses Daftar Gagal',
    html : 'Email tersebut telah digunakan. ' +
            'Mohon gunakan email lain.',
  })
}

function logingagal() {
  swalWithBootstrapButtons.fire({
    icon: 'error',
    title : 'Proses Login Gagal',
    html : 'Pastikan Email dan Password ' +
            'Yang dimasukkan Benar',
  })
}

function daftarsukses() {
  Swal.fire({
    icon: 'success',
    title : 'Daftar akun berhasil 🎉',
    text : 'Silakan melakukan login',
    showConfirmButton: false,
    timer : 1500
  })
}

function logout() {
  const swalWithBootstrapButtons1 = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-danger rounded-3 px-5 py-2',
      cancelButton: 'btn btn-outline-secondary me-3 px-5 py-2'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons1.fire({ 
    title: 'Apakah anda yakin ingin keluar?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Keluar',
    cancelButtonText: 'Batal',
    reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        // Jika tombol keluar ditekan, proses fungsi logout
      }
    }
  )
}

// const popUp = document.getElementsByClassName('popup');
// if (popUp[0].dataset.popup_registrasi == false) {
//   daftargagal();
// }
// if (popUp[0].dataset.popup_registrasi == true) {
//   daftarsukses();
// }
// if (popUp[1] != undefined) {
//   if (popUp[1].dataset.popup_login == false) {
//     logingagal();
//   }
// }
const popUpRegistrasi = document.getElementsByClassName('popup-registrasi')[0];
const popUpDomisili = document.getElementsByClassName('popup-domisili')[0];
const popUpLogin = document.getElementsByClassName('popup-login')[0];

if (popUpRegistrasi.dataset.popup_registrasi == false) {
  daftargagal();
}

if (popUpDomisili != undefined) {
  popUpDomisili.addEventListener('click', function() {
    if(popUpDomisili.classList.contains('popup-domisili')){
      popUpDomisili.classList.remove('popup-domisili');
      domisili();
    }
  });
}

if (popUpRegistrasi.dataset.popup_registrasi == true) {
  daftarsukses();
}

if (popUpLogin != undefined) {
  if (popUpLogin.dataset.popup_login == false) {
    logingagal();
  }
}
