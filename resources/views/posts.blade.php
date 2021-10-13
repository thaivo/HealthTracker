<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/app.css">

    <title>My page</title>

</head>

<body>
    <article>
        <a href="/posts/mypage">
            <h1>My Page</h1>
        </a>
        <p>
            I’m Suong Tran
            My name is Suong, a Programmer, Technology enthusiast and Web Developer currently located in Vietnam, looking for working around the globe.
        </p>
    </article>

    <article>
        <a href="/posts/aboutme">
            <h1>About Me</h1>
        </a>
        <p>
            Hello, my name is Suong and I am aspiring to become a Full Stack Web Developer. I have some experience with programming and I am familiar with HTML, CSS, JavaScript, Python, PHP, ASP.NET,…
        </p>
        <p>
            I have been working on some projects ranging from designing an accessible front page to making an interactive interface. While working on these projects, I have learned to appreciate other people’s effort to make a clean and accessible webpage for every type of users. This have inspired me to become a web developer that will be able to deliver high quality website.
        </p>
    </article>

    <article>
        <a href="/posts/projects">
            <h1>Projects</h1>
        </a>
        <ul>
            <li>
                Image Gallery
            </li>
            <li>
                Ticket system
            </li>
            <li>
                Cafe Management
            </li>
        </ul>
    </article>
</body>

</html>