function highestDigit(digit) {

    Str = digit.toString().split('');
    let temp = Str[0];
    for (let index = 0; index < Str.length; index++) {
        if (temp < Str[index]); {
            temp = Str[index];
        }
    }
    return temp;
}

console.log(highestDigit(379)); // 9
console.log(highestDigit(2)); // 2
console.log(highestDigit(377401)); // 7