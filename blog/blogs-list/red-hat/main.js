// Populate blogs data from JSON file
str = '{ "blogs": [{"title": "My first day at Red Hat", "link": "www.dostonbek.com", "date_published": "May 21, 2019"}, \
                    {"title": "My first day at Red Hat", "link": "www.dostonbek.com", "date_published": "May 21, 2019"}]}'

function blogPopulate() {
    var data = JSON.parse(str)
    console.log(data.blogs[0].title);

    var blogs = document.getElementById("blogs");

    for (i in data.blogs) {
        console.log(data.blogs[i]);


        var a = document.createElement('a');
        a['href'] = data.blogs[i].link;
        a['target'] = "_blank";
        a.className += 'each-blog';

        var title = document.createElement('h3');
        title.className += 'blog-title';
        title.innerHTML = data.blogs[i].title;

        var date_published = document.createElement('p');
        date_published.innerHTML = "Date published: " + data.blogs[i].date_published;
        
        a.appendChild(title);
        a.appendChild(date_published);
        
        blogs.appendChild(a);

    }

}

