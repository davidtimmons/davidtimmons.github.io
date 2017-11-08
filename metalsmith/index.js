// Import libraries.
let Metalsmith  = require('metalsmith');

// Import plugins.
let debug          = require('metalsmith-debug');
let defaultValues  = require('metalsmith-default-values');
let drafts         = require('metalsmith-drafts');
let injectMetadata = require('./plugin/inject-metadata.js');
let layouts        = require('metalsmith-layouts');
let markdown       = require('metalsmith-markdown');
let permalinks     = require('metalsmith-permalinks');

// Define constants.
const BUILD_DIR = './build';
const ROOT_PATH = 'http://david.timmons.io/';


///////////
// BUILD //
///////////

Metalsmith(__dirname)
  .metadata({
    title: "My Static Site & Blog",
    description: "It's about saying »Hello« to the World.",
    generator: "Metalsmith",
    url: "http://www.metalsmith.io/",
    rootPath: ROOT_PATH,
    imagePath: ROOT_PATH + 'static/images/',
  })
  .source('./src')
  .destination(BUILD_DIR)
  .ignore([
    'root',
  ])
  .clean(true)
  .use(debug()) // See: https://github.com/mahnunchik/metalsmith-debug
  .use(drafts()) // See: https://github.com/segmentio/metalsmith-drafts
  .use(defaultValues([ // See: https://github.com/woodyrew/metalsmith-default-values
    {
      pattern: 'articles/**/*.md',
      defaults: {
        layout: 'article.html',
      }
    },
    {
      pattern: 'pages/**/*.md',
      defaults: {
        layout: 'page.html',
      }
    },
  ]))
  .use(injectMetadata({
    pattern: '**/*.md',
    fileKeys: 'contents',
    metadataKeys: ['imagePath', 'rootPath'],
  }))
  .use(markdown({ // See: https://github.com/segmentio/metalsmith-markdown
    gfm: true,
    tables: true,
    breaks: false,
  }))
  .use(permalinks({ // See: https://github.com/segmentio/metalsmith-permalinks
    pattern: ':slug',
  }))
  .use(layouts({ // See: https://github.com/superwolff/metalsmith-layouts
    engine: 'handlebars',
  }))
  .build(function(err, files) {
    if (err) { throw err; }
  });


// Move root files to the build directory.
Metalsmith(__dirname)
  .source('./src/root')
  .destination(BUILD_DIR)
  .clean(true)
  .build(function(err, files) {
    if (err) { throw err; }
  });