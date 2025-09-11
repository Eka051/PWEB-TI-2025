// external javascript
// console.log("Hello World")
// console.info("info")
// console.warn("warning")
// console.error("error")

// variabel di javascript
var nama = "Doni"
var nama = "Tes"

// tipe data di javascript
let teks = "sdfkajsdf" // string
let angka = 123 // number
let benarkah = false // boolean
let kelompok = ["jambu", 2, true, 14.5, [], {}] // array / list
let manusia = {} // object
let nantiAja; // undefined

// operator di javascript
// console.log(2 + 5)
// console.log(2 * 5)
// console.log(10 / 5)
// console.log(2 ** 3)
// console.log(8 % 3)
// console.log("a" + "b")
// console.log("10" - 101)
// console.log("10" + 101)
// console.log(2 == "2")
// console.log(2 === "2")
// console.log(0 / 0)
// NaN => Not a Number
// console.log(NaN === NaN)

// loop di javascript => for, while, do while
// for (let i = 0; i < 5; i++) {
//     console.log(i)
// }

// console.log("Batas for dan while")

// let ngulang = 1
// while (ngulang < 10) {
//     console.log(ngulang)
//     ngulang++
// }

// function di javascript
// 1. function declaration
function sapa(nama = "Doni") {
    console.log("Halo " + nama)
}
sapa("John")
sapa()

function tambah(a, b) {
    return a + b
}
const hasil = tambah(1,3)
console.log(hasil)
console.log(tambah(2, 5))

// 2. function expression
const kali = function (a, b) {
    return a * b
}
console.log(kali(2, 3))
console.log(kali(2, 4))

// 3. arrow function
// const bagi = (a, b) => a / b
const bagi = (a, b) => {
   return a / b
}
console.log(bagi(4, 2))
console.log(bagi(9, 3))


// if (nama == "Tes") {
//     let umur = 21
//     console.log(umur)
// }

// const pekerjaan = "web dev"


// if else
// let umur = 20
// umur = 18
// if (umur > 17) {
//     console.log("boleh buat ktp")
// } else {
//     console.log("masih bocah")
// }