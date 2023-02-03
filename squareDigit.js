function square(number) {
    return + Array.from(number.toString(), v => v * v).join('');
}

console.log(square(9119)); // 811181
console.log(square(2483)); // 416649
console.log(square(3212)); // 9414