# Heyn's Ice Cream

## File structure
Files were constructed and are based on the [Underscores starter theme](http://underscores.me/) from Automattic.
### js/
Javascript file. Nothing complicated.
### resources/
Fonts, imgs, and icons associated with the site.
### scss/
Source sass files. Files are imported and compiled within `style.scss` in the root directory.
#### scss/components
Base styles and partials like `typography.scss` and `grid.scss`.
#### scss/partials
Breakpoint based partials.
### inc/
Just a partial to help with Jetpack, if that is installed in the future.

## Setup
Sass is standard. Run `sass --watch style.scss:style.css` from the terminal to compile. Sass structure is a little wonky (I've come a long way since I built this site four months ago, promise). The gist is that the base files are partialed out pretty well in `scss/components`, so you shouldn't have much trouble there. 

The breakpoints are where it get's weird. You'll find `min-width` based media queries in the `root/style.scss` file, which import separate files located in `scss/partials`. For such a small site, this works. But looking back, I don't know why this was a good idea.

## Wordpress
This is a *very basic* install of Wordpress. The bare minimum of templates are being used to make the site function. 

* * *

**Questions?** [Email](mailto:ericstrattonbailey@gmail.com) or tweet at <a href="http://twitter.com/estrattonbailey" target="_blank">@estrattonbailey</a>. This site isn't great, looking back, but it's super simple and should be pretty easy to keep running in the future. So no hard feelings if you want to just yell at me.