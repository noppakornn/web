function getFirstValue(value) {
    return console.log(value[0]); // แสดงเลขหน้าสุด
    // return console.log(value[value.length - 1]); // แสดงเลขหลังสุด
}

getFirstValue([1, 2, 3]); // 1
getFirstValue([80 , 5, 100]); // 80
getFirstValue([-500, 0, 50]); // -500