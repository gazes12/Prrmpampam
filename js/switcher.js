document.addEventListener('DOMContentLoaded', () =>{
    const switchers = document.querySelectorAll('.change-theme');
    switchers.forEach(switcher => {
        switcher.addEventListener('click', () =>{
            applyTheme(switcher.dataset.theme);
        })
    });

    function applyTheme(themeName){
        let themeUrl = `css/themes/${themeName}.css`;
        document.querySelector('[title="theme"]').setAttribute('href', themeUrl);
        localStorage.setItem('theme', themeName);
    }

    let activeTheme = localStorage.getItem('theme');
    if(activeTheme === null){
        applyTheme('dark');
    }else{
        applyTheme(activeTheme);
    }

    const windowWidth = window.innerWidth;
    const menuList = document.querySelector('.menu__list');
    if(windowWidth < 992){
        const theme = document.querySelector('.theme');
        menuList.append(theme);
    }else{
        const headerContainer = document.querySelector('.header__container');
        headerContainer.append(theme);
    }
})
