# Select Editor Template

Select a block layout from a predefined list of templates in the new WordPress editor.

## Notes

* Changing an post's template will wipe out existing blocks. This is captured in revisions if you need to revert. I'd like to make that better. :)
* This only applies to the `post` post type right now. I'd like to extend it to work with others.
* There is no way to extend templates via PHP yet, but that won't be tough to toss on. See the next section for extending with JavaScript.

## Extending available templates

I'm open to ideas on how templates should be extended. See `src/select-editor-template/extend.js` for how things are currently managed. Any other plugin or theme can use `wp.hooks.addFilter()` to register additional templates or remove those added by others.

## Credits

* This project was originally bootstrapped with [Create Guten Block](https://github.com/ahmadawais/create-guten-block), thanks [@MrAhmadAwais](https://twitter.com/mrahmadawais/)!
* When first poking around for solutions, I found [WP Gutenberg Templates](https://github.com/generoi/wp-gutenberg-templates/), which provided some inspiration.
