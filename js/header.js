const section = document.querySelectorAll('section');
const dude = document.querySelector('.new');

const options={
    threshold: 0.7
}

let observer = new IntersectionObserver(navcheck, options);

function navcheck(entries)
{
    
}