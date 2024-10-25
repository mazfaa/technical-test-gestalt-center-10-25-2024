// Lama pengerjaan soal no. 4 : 3 menit

class Hewan {
  constructor(nama) {
    this.nama = nama;
  }

  bersuara() {
    return "Aku adalah Hewan";
  }
}

class Kucing extends Hewan {
  bersuara() {
    return "Meow";
  }
}

class Anjing extends Hewan {
  bersuara() {
    return "Woof";
  }
}

const kucing = new Kucing("Kucing");
const anjing = new Anjing("Anjing");

console.log("Soal No. 4 - OOP: ");

console.log(`${kucing.nama} bersuara: ${kucing.bersuara()}`);
console.log(`${anjing.nama} bersuara: ${anjing.bersuara()}`);
