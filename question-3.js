// Lama pengerjaan soal no. 3 : 52 menit

function countString() {
  const sentence =
    "Coding merupakan kegiatan yang dimana kamu memberitahukan komputer apa yang harus dia kerjakan untuk kamu. Sebuah kode yang ada pada skrip bisa diibaratkan layaknya bahasa sehari-hari. Setiap kode yang kamu tulis akan membantu komputer untuk mengetahui dan memahami apa yang ingin kamu lakukan pada komputer";

  let amountOfLetters = sentence.length;
  let amountOfWords = sentence.split(" ").length;
  let amoutOfVowels = sentence.matchAll(/[aiueo]/g);
  let amoutOfConsonantLetters = sentence.matchAll(/[bcdfghjklmnpqrstvwxyz]/gi);
  let mostWords = 0;
  let mostFrequentlyWords = 0;

  const splittedSentece = sentence.split(" ");

  for (const word of splittedSentece) {
    const currentMostWords = mostWords;

    if (currentMostWords < word.length) {
      mostWords = word.length;
    }
  }

  const cleanedText = sentence.toLowerCase().replace(/[.,]/g, "");
  const words = cleanedText.split(" ");
  const wordCounts = {};

  words.forEach((word) => {
    if (word in wordCounts) {
      wordCounts[word]++;
    } else {
      wordCounts[word] = 1;
    }
  });

  let mostCommonWord = "";
  let mostCommonCount = 0;

  for (const [word, count] of Object.entries(wordCounts)) {
    if (count > mostCommonCount) {
      mostCommonCount = count;
      mostCommonWord = word;
    }
  }

  console.log("Soal No. 3 - String: ");

  console.log(`Jumlah huruf dalam string: ${amountOfLetters}`);
  console.log(`Jumlah kata dalam string: ${amountOfWords}`);
  console.log(`Jumlah huruf vokal string: ${[...amoutOfVowels].length}`);
  console.log(
    `Jumlah huruf konsonan dalam string: ${[...amoutOfConsonantLetters].length}`
  );
  console.log(
    `Kata yang paling sering muncul: "${mostCommonWord}" dengan jumlah kemunculan: ${mostCommonCount} kali.`
  );
}

export default countString;
