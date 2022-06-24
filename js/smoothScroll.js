const anchors = document.querySelectorAll('a[href*="#"]');
for(let anchor of anchors){
    anchor.addEventListener('click', (e) =>{
        e.preventDefault();
        const block = document.querySelector(anchor.getAttribute('href'));
        block.scrollIntoView({
            behavior: "smooth",
            block: "end"
        })
    });
}