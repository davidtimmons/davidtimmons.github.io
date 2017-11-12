// Import libraries.
let Metalsmith  = require('metalsmith');

// Import plugins.
let debug          = require('metalsmith-debug');
let defaultValues  = require('metalsmith-default-values');
let drafts         = require('metalsmith-drafts');
let injectMetadata = require('./plugins/inject-metadata.js');
let layouts        = require('metalsmith-layouts');
let markdown       = require('metalsmith-markdown');
let permalinks     = require('metalsmith-permalinks');
let preview        = require('./plugins/preview.js');
let sitemap        = require('metalsmith-sitemap');

// Define constants.
const BUILD_DIR = './build';
const ROOT_PATH = 'http://david.timmons.io/';


///////////
// BUILD //
///////////

Metalsmith(__dirname)
  .metadata({
    siteTitle: 'David Timmons',
    rootPath: ROOT_PATH,
    imagePath: ROOT_PATH + 'static/images/',
    gaAccount: 'UA-19610273-1',
    gaDomain: 'timmons.io',
    keyBingWebmasterTools: 'D62CBC40FC8F577CAA5D68B79E806194',
    keyGoogleSearchConsole: '24km3JXEzfZ0tKZah9epCVlDwLIepVGsQmuKgQi4hzo',
  })
  .source('./src')
  .destination(BUILD_DIR)
  .ignore([
    'wordpress-theme',
  ])
  .clean(true)
  .use(debug()) // See: https://github.com/mahnunchik/metalsmith-debug
  .use(drafts()) // See: https://github.com/segmentio/metalsmith-drafts
  .use(defaultValues([ // See: https://github.com/woodyrew/metalsmith-default-values
    {
      pattern: 'index.md',
      defaults: {
        layout: 'page.html',
      }
    },
    {
      pattern: '404.md',
      defaults: {
        layout: '404.html',
      }
    },
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
    fileKeys: ['contents', 'hero'],
    metadataKeys: ['imagePath', 'rootPath'],
  }))
  .use(preview({
    pattern: 'articles/**/*.md',
    words: 40,
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
    partials: 'layouts/partials',
  }))
  .use(sitemap({ // See: https://github.com/ExtraHop/metalsmith-sitemap 
    hostname: ROOT_PATH,
    omitIndex: true,
    pattern: ['**/*.html', '!**/bower_components/**'],
  }))
  .build(function(err, files) {
    if (err) { throw err; }
  });
