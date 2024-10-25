// Lama pengerjaan soal no. 5 : 13 menit

const data = [
  [9, 5, 2],
  [1, 3, 8],
  [10, 15, 12],
  [4, 7, 6],
  [13, 11, 14],
];

const sortedData = data.map((subArray) => subArray.sort((a, b) => a - b));
console.log("Array setelah diurutkan:", sortedData);

const flatData = data.flat();
const oddCount = flatData.filter((number) => number % 2 !== 0).length;
console.log("Jumlah elemen ganjil:", oddCount);

const maxValue = Math.max(...flatData);
console.log("Nilai terbesar:", maxValue);
