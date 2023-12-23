console.log('enqueued like old skool');

document.addEventListener("DOMContentLoaded", () => {   
    console.log('here goes...');
    let isDef = document.getElementsByClassName('leadText');
    console.log(isDef[0].innerHTML);
    setTimeout(() => {
        console.log("Delayed for 3 seconds.");
        isDef[0].innerHTML = 'NIIIIICE!';
        console.log(isDef[0].innerHTML);
    }, "3000");
   
});

