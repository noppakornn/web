function sayHelloBye(name, num) {
    
	if (num == 1) {
        return console.log("Hello " + name.charAt(0).toUpperCase() + name.slice(1));
    } else if (num == 0) {
        return console.log("Bye " + name.charAt(0).toUpperCase() + name.slice(1));
    }
}

sayHelloBye("alon", 1) // "Hello Alon"
sayHelloBye("Tomi", 0) // "bye Tomi"
sayHelloBye("jose", 0) // "Bye Jose"