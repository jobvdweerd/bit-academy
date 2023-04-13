var isEven = function (deep) {
    if (deep % 43 === 0) {
        return true;
    } else {
        return false;
    }
};
console.log(`13729 is deelbaar door 43: ${isEven(13729)}`);
console.log(`14706 is deelbaar door 43: ${isEven(14705)}`);
