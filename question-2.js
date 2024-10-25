// Lama pengerjaan soal no. 2 : 6 menit

function rectangleNumber() {
  let result = "";

  for (let i = 1; i <= 10; i++) {
    if (i > 5) {
      result += i;
    }

    for (let j = 0; j < i; j++) {
      result += "0";
    }

    if (i < 6) {
      result += i + "\n";
    }

    if (i > 5) {
      result += "\n";
    }
  }

  console.log("Soal No. 2: ");

  return result;
}

export default rectangleNumber;
