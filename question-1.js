// Lama pengerjaan soal no. 1: 33 menit

let cars = ["Volvo", "BMW", "Toyota", "Kijang"];

function rotateArray() {
  for (let i = 0; i < cars.length; i++) {
    console.log(cars.join(", "));

    let firstElement = cars[0];
    let elementToBeMoveAtFirstIndex = "";

    if (i == cars.length - 1) {
      elementToBeMoveAtFirstIndex = cars[i];
    }

    elementToBeMoveAtFirstIndex = cars[i + 1];

    cars[0] = elementToBeMoveAtFirstIndex;

    if (i == cars.length - 1) {
      cars[i] = firstElement;
      return;
    }

    cars[i + 1] = firstElement;
  }

  console.log("Soal No. 1 - Rotate Array: ");
}

export default rotateArray;
