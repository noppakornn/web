function pingPong(ping, wins) {
    let arr = [];
    let count = 0;
    if (wins == true) {
        for (let index = 0; index < ping.length; index++) {
            arr[count] = "Ping!";
            arr[count + 1] = "Pong!";
            count+=2;
        }
        console.log(arr);
    } else if (wins == false) {
        for (let index = 0; index < ping.length; index++) {
            if (index === (ping.length - 1)) {
                arr[count] = "Ping!";
                break;
            } else
                arr[count] = "Ping!";
                arr[count + 1] = "Pong!";
                count += 2;
        }
        console.log(arr);
    }
}

pingPong(["Ping!"], true);
pingPong(["Ping!", "Ping!"], false);
pingPong(["Ping!", "Ping!", "Ping!"], true);