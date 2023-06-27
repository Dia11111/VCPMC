function active_navbar_mini() {
    const icon_right_navbar = document.querySelector('.icon-right-navbar');
    const main_navbar = document.querySelector('.navbar');
    const navbar_hidden = document.querySelector('.navbar-hidden');

    main_navbar.classList.add('enactive-navbar');
    navbar_hidden.style.display = 'flex';


    document.querySelector('.container-web').style.width = 'calc(100% - 40px)';
    document.querySelector('.container-web').style.marginLeft = '40px';

    icon_right_navbar.addEventListener('click', () => {
        main_navbar.classList.toggle('active-navbar');
    });

    document.addEventListener('click', (e) => {
        if (!main_navbar.contains(e.target) && !icon_right_navbar.contains(e.target)) {
            main_navbar.classList.remove('active-navbar');
        }
    });
}