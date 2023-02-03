function removeDups(Str) {

    let NotMatch = [];
    for (let index = 0; index < Str.length; index++) {
        if (!NotMatch.includes(Str[index])) {
            NotMatch[index] = Str[index];
        } 
    }
    return NotMatch;
}

console.log(removeDups([1, 0, 1, 0])); // 1, 0
console.log(removeDups(["The", "big", "cat"])); // The, big, cat
console.log(removeDups(["John", "Taylor", "John"])); // John, Taylor