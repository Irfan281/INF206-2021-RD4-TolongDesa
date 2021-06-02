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
        popUpLogout.classList.remove('popup-logout');
        popUpLogout.setAttribute('href', 'http://localhost/TolongDesa/public/masyarakat/logout');
        popUpLogout.click();
      }
    }
  )
}

//pop-up ketika ada orang tekan tombol "tolong"
function konfirmasiMenolong(popUp) {
  const swalWithBootstrapButtons2 = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success rounded-3 px-5 py-2',
      cancelButton: 'btn btn-outline-secondary me-3 px-5 py-2'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons2.fire({
    title: 'Konfirmasi',
    text: "Apakah kamu yakin untuk memberikan pertolongan ?",
    showCancelButton: true,
    confirmButtonText: 'Ya',
    cancelButtonText: 'Tidak',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      
      swalWithBootstrapButtons2.fire(
        '',
        'Kamu berhasil terdaftar sebagai penolong, yuk berikan pertolongan terbaikmu. Pertolonganmu akan tercatat jika peminta tolong telah mengkonfirmasi selesai.',
        ''
      ).then(function() {
        //kalo iya, Proses agar si penolong jadi terdaftar
        const id_mintatolong = popUp.dataset.id_mintatolong;
        popUp.classList.remove('popup-tolong');
        popUp.setAttribute('href', `http://localhost/TolongDesa/public/home/menolong/${id_mintatolong}`);
        popUp.click();
      })
    
    }
  })
}

//popup ketika ada orang tekan tombol "selesai" di riwayat
function selesai(popUp) {
  const swalWithBootstrapButtons3 = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success rounded-3 px-5 py-2',
      cancelButton: 'btn btn-outline-secondary me-3 px-5 py-2'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons3.fire({
    title: 'Konfirmasi',
    text: "Apabila kamu sudah mendapat pertolongan silakan untuk menekan tombol selesai. Pertolongan akan tercatat pada akun penolong",
    showCancelButton: true,
    confirmButtonText: 'Selesai',
    cancelButtonText: 'Batal',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {

      //kalo iya, Proses agar minta tolong selesai
      const id_mintatolong = popUp.dataset.id_mintatolong;
      const id_penolong = popUp.dataset.id_penolong;
      popUp.classList.remove('popup-selesai');
      popUp.setAttribute('href', `http://localhost/TolongDesa/public/home/tolongselesai/${id_mintatolong}/${id_penolong}`);
      popUp.click();
    }
  })
}

//popup ketika orang tekan tombol "tidak selesai" di riwayat
function tidakselesai(popUp) {
  const swalWithBootstrapButtons4 = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-danger rounded-3 px-5 py-2',
      denyButton: 'btn btn-secondary me-3 px-2 py-2'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons4.fire({
    title: 'Konfirmasi',
    text: "Anda dapat memilih pertolongan ini tidak selesai atau mengajukan permintaan tolong kembali",
    showDenyButton: true,
    confirmButtonText: 'Tidak Selesai',
    denyButtonText: 'Minta Tolong Kembali',
    reverseButtons: true
  }).then((result) => {
    const id_mintatolong = popUp.dataset.id_mintatolong;
    const id_penolong = popUp.dataset.id_penolong;
    if (result.isConfirmed) {
      //set langsung jadi "Tidak Selesai"
      popUp.classList.remove('popup-tidak_selesai');
      popUp.setAttribute('href', `http://localhost/TolongDesa/public/home/tolongtidakselesai/${id_mintatolong}/${id_penolong}/false`);
      popUp.click();
    } else if (result.isDenied) {
      //kalo pilih minta tolong kembali. Tampilin lagi post minta tolongnya di beranda
      //bestu set jadi "belum ada penolong"
      popUp.classList.remove('popup-tidak_selesai');
      popUp.setAttribute('href', `http://localhost/TolongDesa/public/home/tolongtidakselesai/${id_mintatolong}/${id_penolong}/true`);
      popUp.click();
    }
  })
}

const popUpRegistrasi = document.getElementsByClassName('popup-registrasi')[0];
const popUpDomisili = document.getElementsByClassName('popup-domisili')[0];
const popUpLogin = document.getElementsByClassName('popup-login')[0];
const popUpLogout = document.getElementsByClassName('popup-logout')[0];
const popUpTolong = document.getElementsByClassName('popup-tolong');
const popUpSelesai = document.getElementsByClassName('popup-selesai');
const popUpTidakSelesai = document.getElementsByClassName('popup-tidak_selesai');

if (popUpRegistrasi != undefined) {
  if (popUpRegistrasi.dataset.popup_registrasi == false) {
    daftargagal();
  }
  
  if (popUpRegistrasi.dataset.popup_registrasi == true) {
    daftarsukses();
  }
}

if (popUpDomisili != undefined) {
  popUpDomisili.addEventListener('click', function() {
    if(popUpDomisili.classList.contains('popup-domisili')){
      popUpDomisili.classList.remove('popup-domisili');
      domisili();
    }
  });
}

if (popUpLogin != undefined) {
  if (popUpLogin.dataset.popup_login == false) {
    logingagal();
  }
}

if (popUpLogout != undefined) {
  popUpLogout.addEventListener('click', function() {
    if(popUpLogout.classList.contains('popup-logout')){
      logout();
    }
  });
}

if (popUpTolong != undefined) {
  for (let popUp of popUpTolong) {
    popUp.addEventListener('click', function() {
      if(popUp.classList.contains('popup-tolong')){
        konfirmasiMenolong(popUp);
      }
    });
  }
}

if (popUpSelesai != undefined) {
  for (let popUp of popUpSelesai) {
    popUp.addEventListener('click', function() {
      if(popUp.classList.contains('popup-selesai')){
        selesai(popUp);
      }
    });
  }
}

if (popUpTidakSelesai != undefined) {
  for (let popUp of popUpTidakSelesai) {
    popUp.addEventListener('click', function() {
      if(popUp.classList.contains('popup-tidak_selesai')){
        tidakselesai(popUp);
      }
    });
  }
}