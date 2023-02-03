function move(string) {
    StrUppercase = "";
    StrLowercase = "";
    count = 0;

    while (count < string.length) {
        
        switch (string[count]) {
            case string[count].toUppercase : StrUppercase += string[count]; count++;
                break;
            default : StrLowercase += string[count]; count++;
                break;
        }
    
    }
    return console.log(StrUppercase + StrLowercase);
}

move("hApPy");
move("moveMENT");
move("shOrtCASE");