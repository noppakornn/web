function squareDigits(value) {
    value = value.toString();
    let result = "";
    for (let index = 0; index < value.length; index++) {
        result += Math.pow(value[index],2);
        
    }
    result = parseInt(result)
    console.log(result);
}

squareDigits(9119); // 811181
squareDigits(2483); // 416649
squareDigits(3212); // 9414