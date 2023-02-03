function repeatString(string, num) {
    let result = "";
    if (typeof (string) === 'string') {
        for (let index = 0; index < num; index++) {
            result += string;
            
        }
        return console.log(result);
    } else return console.log("Not a string");
}

repeatString("Mubashi", 2); // MubashiMubashi
repeatString("Matt", 3); // MattMattMatt
repeatString(1990, 7); // Not a sting