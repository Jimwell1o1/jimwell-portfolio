var projects = [
    {
        title: "Aspect Clothing",
        type: "E-commerce",
        description: "Aspect Clothing is a forward-thinking fashion brand for unique aesthetic clothing, especially for those who are into streetwear and everyday comfort.",
        technology: "Wordpress | Elementor | WooCommerce",
        link: "https://aspectofficial.com",
        image: "assets/img/project-1.jpg",
    },
    {
        title: "Ticketwaveph",
        type: "E-commerce",
        description: "Ticketwaveph is a platform that offers a wide range of tickets for various curated events, museums, and popular attractions.",
        technology: "Shopify | Liquid | CSS | JS",
        link: "https://ticketwaveph.com",
        image: "assets/img/project-3.jpg",
    },
    {
        title: "EasySellPH",
        type: "E-commerce",
        description: "EasySellPH is a dropshipping company that makes people achieve their goals by offering them a minimal inventory opportunity.",
        technology: "Laravel | Bootstrap | MySQL | JS",
        link: "https://www.easysellph.page.gd",
        image: "assets/img/course-1.jpg",
    },
    {
        title: "Camella Homes General Trias",
        type: "Landing Page",
        description: "Camella Homes General Trias is a residential development project that offers house and lot packages in General Trias, Cavite.",
        technology: "HTML | Tailwind CSS",
        link: "https://camellahomes.page.gd",
        image: "assets/img/project-2.jpg",
    },
    {
        title: "MCY Dental Clinic",
        type: "Landing Page",
        description: "MCY Dental Clinic is a dental clinic that provides a wide range of dental services to help patients achieve optimal oral health.",
        technology: "Vanilla PHP | Bootstrap | MySQL | JS",
        link: "https://mcydental.page.gd",
        image: "assets/img/course-2.jpg",
    },
    {
        title: "E-sports News and Info",
        type: "Blog Site",
        description: "E-sports News and Info is a platform that provides the latest news, updates, and information about the e-sports industry.",
        technology: "Laravel | Bootstrap | MySQL | JS",
        link: "https://esportsnews.page.gd/",
        image: "assets/img/course-3.jpg",
    },
];

var html2 = '';
projects.forEach(function(item) {
    html2 += '<div class="col-lg-4 col-md-6 d-flex align-items-stretch pt-4">';
    html2 += '<div class="course-item">';
    html2 += `<img src="${item.image}" class="img-fluid" alt="...">`;
    html2 += '<div class="course-content">';
    html2 += '<div class="d-flex justify-content-between align-items-center mb-3">';
    html2 += `<h4>${item.type}</h4>`;
    html2 += '</div>';
    html2 += `<h3><a href="${item.link}" target="_blank">${item.title}</a></h3>`;
    html2 += `<p>${item.description}</p>`;
    html2 += `<p class="text-muted my-2"><small>${item.technology}</small></p>`;
    html2 += '<div class="trainer d-flex justify-content-between align-items-center">';
    html2 += '<div class="trainer-profile d-flex align-items-center">';
    html2 += `<span><a href="${item.link}" target="_blank">Visit Website</a></span>`;
    html2 += '</div>';
    html2 += '<div class="trainer-rank d-flex align-items-center">';
    html2 += '<i class="bx bx-laptop"></i>&nbsp;';
    html2 += '<i class="bx bx-mobile-alt"></i>';
    html2 += '</div>';
    html2 += '</div>';
    html2 += '</div>';
    html2 += '</div>';
    html2 += '</div>';
});

document.getElementById('projects').innerHTML = html2;
