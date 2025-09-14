var exp = [
{
    position: "Full-Stack Developer",
    exp: "Feb 2023 - Jan 2025",
    loc: "Thynker Tech Inc. ",
    bullets: [
    "Designed, developed, and integrated Laravel APIs for multiple forms and frontend frameworks.",
    "Built reusable, efficient PHP modules and solved complex performance and architectural issues."
    ]
},
{
    position: "Web Developer",
    exp: "Aug 2022 - Jan 2023",
    loc: "Prime Outsourcing Inc.",
    bullets: [
    "Implemented responsive, user-friendly interfaces using Tailwind CSS and based on design specifications.",
    "Refactored backend APIs into modular, maintainable components, improving code readability and future scalability."
    ]
},
{
    position: "Full-Stack Developer",
    exp: "Jan 2022 - Aug 2022",
    loc: "EasySellPH, Pasig City, PH",
    bullets: [
    "Lead in the design, development, and implementation of the graphic, layout, and production of the website.",
    "Used vast knowledge about using coding, designing, markup languages and especially the functions of the application."
    ]
},
];

var html = '';

exp.forEach(function(item) {
html += '<div class="resume-item">';
html += `<h4>${item.position}</h4>`;
html += `<h5>${item.exp}</h5>`;
html += `<p><em>${item.loc}</em></p>`;
html += '<ul>';
item.bullets.forEach(function(bullet) {
    html += `<li>${bullet}</li>`;
});
html += '</ul>';
html += '</div>';
});

document.getElementById('experiences').innerHTML = html;
