const total = document.querySelector('#totalPrice');
const distance = document.querySelector('#distance');
const km_price = document.querySelector('#kmPrice');

let count = 0;

setInterval(() => {
    if (distance.value != '') {
        if (count == 0) {
            count += 1;
            for (let i = 0; i < distance.value; i += 1000) {
                let answer_a = i / 1000;
                let answer_b = Math.floor(distance.value / 1000);
                if (answer_a == answer_b) {
                    total.value = answer_b * Number(km_price.value);
                }
            }
        }
    }
}, 1000);