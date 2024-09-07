# Taglist jQuery Plugin
This is a jQuery-based component that is useful to automatically generate tags, similar to the way GMail for example does when you enter email ids in the "To" section when composing an email. As you complete an email, and move on to the next email, a tag is created in the input field. The jQuery plugin - taglist.jquery.js is to be included in the HTML page. For an example of how to use this plugin check index.html, and the associated demo.js script included within it.

## Known bugs
1. Text input width doesn't take up entire width when it falls on a new line.
2. Sometimes whitespace left behind from input buffer causes user to force pressing backspace thrice before deleting a tag.
3. JS error (not fatal) when backspace is pressed multiple times when no tag exists
4. Clicking on list container does not take focus to input element

## Todos
1. Fix bugs
2. Minification of JS + CSS
3. Comma delimiting of tags not supported for user keyboard input (works in paste mode)

## Notes
The use of 'paste' event has been avoided for better browser compatibility.