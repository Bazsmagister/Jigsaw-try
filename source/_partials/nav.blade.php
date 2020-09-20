<nav class="navbar">

    <ul class="menu">
        <li><a class=" {{ $page->selected('') }}" href="/">Home</a></li>
        <li><a class="{{ $page->selected('about') }}" href="/about">About</a></li>
        <li><a class="{{ $page->selected('contact') }}" href="/contact">Contact</a></li>
        <li><a class="{{ $page->selected('blog') }}" href="/blog">Blog</a></li>
        <li><a class="{{ $page->selected('posts') }}" href="/posts">Posts</a></li>
    </ul>


</nav>