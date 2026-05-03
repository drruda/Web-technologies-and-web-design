function PlusOrMinus(...numbers) {
    if (numbers.length % 2 === 0) {
    return numbers.reduce((acc, curr) => acc + curr, 0);
  } else {
    const reversed = [...numbers].reverse();
    return reversed.reduce((acc, curr) => acc - curr);
  }
}
console.log(PlusOrMinus(1, 2, 3, 4));
console.log(PlusOrMinus(1, 2, 3));