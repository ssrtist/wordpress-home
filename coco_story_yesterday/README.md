# Story Book Viewer

Simple static HTML viewer for the story images in the `images/` folder.

Usage:

1. Open `index.html` in a browser.
2. Navigate with the arrow buttons, `First`/`Last`, or keyboard arrows.

Notes:
- Images are normalized using CSS `object-fit: contain` and constrained to the viewport.
- If you add or remove image files, update `script.js` images array accordingly, or serve the site with a small server that provides a file list.
