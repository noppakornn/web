function allDigit(name, number) {

    let sum = 0;
    for (let index = 0; index < number; index++) {
        sum += name[index];
        
    }
    console.log(sum);
}

allDigit([1, 2, 4, 8],3);
allDigit([10, 100, 10000],2);
allDigit([5, 25, 625],0);