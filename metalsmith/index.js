// Import libraries.
let Metalsmith  = require('metalsmith');

// Import plugins.
let markdown    = require('metalsmith-markdown');
let drafts      = require('metalsmith-drafts');
let permalinks  = require('metalsmith-permalinks');
let layouts     = require('metalsmith-layouts');
let debug       = require('metalsmith-debug');

// Enable debugging in the <metalsmith-debug> plugin.
process.env.DEBUG='metalsmith:* metalsmith';


///////////
// BUILD //
///////////

Metalsmith(__dirname)
  .metadata({
    title: "My Static Site & Blog",
    description: "It's about saying »Hello« to the World.",
    generator: "Metalsmith",
    url: "http://www.metalsmith.io/"
  })
  .source('./src')
  .destination('./build')
  .clean(true)
  .use(markdown({ // See: https://github.com/segmentio/metalsmith-markdown
    gfm: true,
    tables: true,
    breaks: false,
  }))
  .use(drafts())    // See: https://github.com/segmentio/metalsmith-drafts
  .use(permalinks({ // See: https://github.com/segmentio/metalsmith-permalinks
    pattern: ':slug',
  }))
  .use(layouts({ // See: https://github.com/superwolff/metalsmith-layouts
    engine: 'handlebars',
  }))
  .use(debug()) // See: https://github.com/mahnunchik/metalsmith-debug
  .build(function(err, files) {
    if (err) { throw err; }
  });
