function numberSplit(number) {
    total = [];
    if(number != 0) {
        if(number % 2 === 0) {
            total[0] = number / 2
            total[1] = number / 2
            return console.log(`(${total[0]} + ${total[1]})`);
        } else
            total[0] = number / 2
            total[1] = number / 2
            return console.log(`(${Math.ceil(total[0])} + ${Math.floor(total[1])})`);
    } else return console.log('your number invalid');
    
}

numberSplit(4); // (2 + 2)
numberSplit(10); // (5 + 5)
numberSplit(11); // (6 + 5)
numberSplit(-9); // (-4 + -5)