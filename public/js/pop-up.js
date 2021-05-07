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