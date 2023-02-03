function sliceSum(number1, number2) {
    
    let sum = 0;
    for (let index = 0; index < number2; index++) {
        sum += number1[index];
        
    }
    console.log(sum);
}

sliceSum([1, 3, 2], 2) // 4
sliceSum([4, 2, 5, 7], 4) // 18
sliceSum([3, 6, 2], 0) // 0