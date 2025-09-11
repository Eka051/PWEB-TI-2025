const judul = document.getElementsByTagName("h1")[0]
judul.textContent = "Pemrograman Website"
judul.style.color = "#2FAB2E"
judul.style.fontFamily = "Consolas"
judul.style.fontSize = "4rem" // 1 rem = 8 px
// alert("Transaksi Berhasil")
// confirm("Apakah anda yakin ingin menghapus?")
// const nama = prompt("Masukkan nama kamu")

// if (nama == "Eka") {
//     judul.textContent = "Halo " + nama
// } else {
//     judul.textContent = "Kamu di Hack"
//     judul.style.color = "red"
//     judul.style.fontSize = "200px"
// }
// judul.innerText = "PWEB B"
const teks = document.getElementById("text")
const tombol = document.getElementsByClassName("tombol")[0]
const tes = document.querySelectorAll('#judul')

tombol.addEventListener('click', () => { 
    teks.style.color = "black"
    teks.style.fontSize = "25px"
})

teks.addEventListener('mouseover', () => {
    teks.style.color = "red"
})

teks.addEventListener('mouseout', () => {
    teks.style.color = "blue"
})

teks.addEventListener('click', () => {
    teks.style.fontSize = "80px"
})