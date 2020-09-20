## Jigsaw is a static site generator.

https://laracasts.com/series/static-site-generators/episodes/1

https://jigsaw.tighten.co/

install process:

`mkdir my-site`

`cd my-site`

`composer require tightenco/jigsaw`

`./vendor/bin/jigsaw init`

or

//it creates a blog starter
`./vendor/bin/jigsaw init blog`

or
//it creates a docs starter
`./vendor/bin/jigsaw init docs`

When you'd like to generate your site, run the build command from within your project root:

`./vendor/bin/jigsaw build`

---

{{date('F j, Y', $page->date)}}

to make the site to production:

`npm run production`

there will be a build_production folder.

That is need to be upload to the static site host.
