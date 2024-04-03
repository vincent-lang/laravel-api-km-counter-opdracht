let origins = '';
let destinations = '';

setInterval(() => {
    const pick_up = document.querySelector('#pick_up_adress');
    const drop_off = document.querySelector('#drop_off_adress');
    if (pick_up.value != "" && drop_off.value != "") {
        return origins = pick_up.value, destinations = drop_off.value;
    }
}, 1000);

function save() {
    if (origins != "" && destinations != "") {
        test();
    }
}

async function test() {
    let call = await fetch('https://api.distancematrix.ai/maps/api/distancematrix/json?origins=' + origins + '&destinations=' + destinations + '&key=Ysilbtb8ecm7usXVxnPrucSXpVNqxPXU71XDbjY5zy1JfvE1CXwMVvn3eMrXFr5u');
    let get = await call.json();
    // console.log(get.rows[0].elements[0].distance);
    // console.log(get.rows[0].elements[0]);

    const put = document.querySelector('#distance').value = get.rows[0].elements[0].distance.value;
}