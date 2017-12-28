---
title: Projects
date: {{ now }}
author: David Timmons
slug: projects
draft: false
metaDescription: These projects are highlights from my past and current development work.
---

These projects are highlights from my past and current development work.
I love the creative challenge inherent in problem solving and
continually teach myself new skills to expand my repertoire. While some
projects here are proprietary, many are not. Everything below is my own
work unless specifically stated otherwise.


<h2><span class="headline-image">»</span> Metalsmith Plugin: Inject Metadata</h2>
<p>
  <img src="{{ imagePath }}projects/metalsmith-inject-metadata.jpg"
       alt="Metalsmith Plugin: Inject Metadata"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}projects/metalsmith-inject-metadata.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

*Inject Metadata* is a plugin for *[Metalsmith][]*, a Node.js static site generator.
This plugin injects Metalsmith metadata values into source file data during the build process.
Metadata values can be used as program constants containing such things as file paths or
configuration settings. Whereas template plugins pull data from the file object, this plugin
injects data into the file object before the template build step occurs.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    Node.js . Metalsmith . TDD [Mocha, Chai, Sinon, Rewire, Travis CI]
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/metalsmith-inject-metadata"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
  <p class="project-tag">NPM</p>
  <p>
    <a href="https://www.npmjs.com/package/metalsmith-inject-metadata" rel="nofollow">
      <img alt="NPM version" src="https://img.shields.io/npm/v/metalsmith-inject-metadata.svg" style="max-width:100%;">
    </a>
    <a href="https://www.npmjs.com/package/metalsmith-inject-metadata" rel="nofollow">
      <img alt="downloads" src="https://img.shields.io/npm/dm/metalsmith-inject-metadata.svg" style="max-width:100%;">
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Metalsmith Plugin: Preview</h2>
<p>
  <img src="{{ imagePath }}projects/metalsmith-preview.jpg"
       alt="Metalsmith Plugin: Preview"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}projects/metalsmith-preview.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

*Preview* is a plugin for *[Metalsmith][]*, a Node.js static site generator.
This plugin generates a customizable text preview for each HTML, Markdown, or plain text
source file. Previews can be generated based on word count, character count, or custom markers
placed within the source text.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    Node.js . Metalsmith . TDD [Mocha, Chai, Sinon, Rewire, Travis CI]
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/metalsmith-preview"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
  <p class="project-tag">NPM</p>
  <p>
    <a href="https://www.npmjs.com/package/metalsmith-preview" rel="nofollow">
      <img alt="NPM version" src="https://img.shields.io/npm/v/metalsmith-preview.svg" style="max-width:100%;">
    </a>
    <a href="https://www.npmjs.com/package/metalsmith-preview" rel="nofollow">
      <img alt="downloads" src="https://img.shields.io/npm/dm/metalsmith-preview.svg" style="max-width:100%;">
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Bowling Score</h2>
<p>
  <img src="{{ imagePath }}projects/bowling-score.jpg"
       alt="Bowling Score"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}projects/bowling-score.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

*Bowling Score* is a Python service that manages a bowling game for multiple players.
The service takes in pins knocked down, tracks frame scores, and calculates a running total
for each player. Scoring mechanics are based on the overview found at the *ThoughtCo.*
["Bowling Scoring"](https://www.thoughtco.com/bowling-scoring-420895) article.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    Python 3
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/bowling-score"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Mega Air Man</h2>
<p>
  <img src="{{ imagePath }}2016/02/mega-air-man.jpg"
       alt="Mega Air Man"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2016/02/mega-air-man.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

*Mega Air Man* is a game demo written in [Elm][] and based on the NES
classic *Mega Man 2*. Elm is a cutting-edge ML-style language similar
to Haskell that natively supports a functional reactive architecture
in client-side Web applications.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    Elm
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="{{ buildPath }}demos/mega-air-man/"
       title="Click here to play the demo.">
      Demo
    </a> .
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/mega-air-man"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> React CSV Component</h2>
<p>
  <img src="{{ imagePath }}2016/01/react-csv-component.jpg"
       alt="React CSV Component"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2016/01/react-csv-component.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

This is a React/Flux module written in JSX and Javascript (ES2015)
that simulates a CSV (Comma-Separated Value) spreadsheet. It features
arithmetic string parsing using the shunting-yard algorithm, undo and
redo state tracking, customizable row and column counts, an optional
highlighted footer row, and data export into a CSV file (for modern
browsers.)

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    React . Flux . JSX . JavaScript (ES2015)
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="{{ buildPath }}demos/react-csv/"
       title="Click here to see the demo.">
      Demo
    </a> .
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/react-csv"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Hacka_finder</h2>
<p>
  <img src="{{ imagePath }}2015/08/hackafinder-home.jpg"
       alt="Hacka_finder"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2015/08/hackafinder-home.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

*Hacka\_finder* is a single-page Web application (SPA) that matches
registered users into hackathon teams based on skills, event goals, and
location.

This app uses a modern approach to Web application design where most of
the "heavy lifting" is done on the client side. AngularJS and
Bootstrap power the front end while Node.js with Express and
MongoDB power the back end. Registered users search for upcoming
hackathons then find a team to join based on their unique search
criteria.

*Hacka\_finder* is a learning project built to study the MEAN stack
(MongoDB, Express, AngularJS, Node.js) and Web app development. I read
six books and many API references to learn all the technologies then
started building. This is the result!

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    MongoDB . Express . AngularJS . Node.js . Bootstrap . SASS . Mocha . Chai . Grunt . Yeoman
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/hackafinder"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Simon Says Circuit</h2>
<p>
  <img src="{{ imagePath }}2014/08/simon-says-breadboard.jpg"
       alt="Simon Says Circuit"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2014/08/simon-says-breadboard.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

This *Arduino* project is similar to the electronic memory games made
popular in the 1980s. It uses a microcontroller and a variant of the C
programming language. The program creates a randomized sequence of
progressively complex LED flashes. A player must memorize the pattern
and input the correct sequence.

This version gives the player three chances. After entering an incorrect
pattern three times, the game is over. The player can reset the game by
moving the board to activate the tilt switch.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    Arduino . Circuit Design . C
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/simon-says-circuit"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Text Scalpel App</h2>
<p>
  <img src="{{ imagePath }}2014/08/text-scalpel-app-dashboard.png"
       alt="Text Scalpel App"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2014/08/text-scalpel-app-dashboard.png 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

*Text Scalpel App* is a Python Web application designed using
Flask and the MVC architecture pattern.

A user enters his or her name then uploads a text document. The app
parses this file to find word counts and display a list of the most
common words. It also generates a random text paragraph using words
pulled from the file. Results are stored in a SQLite database using
relational tables that link users to their text analysis results.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    Python . Flask . SQLite
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/text-scalpel-app"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Browser Checklist</h2>
<p>
  <img src="{{ imagePath }}2014/08/browser-checklist.jpg"
       alt="Browser Checklist"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2014/08/browser-checklist.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

JavaScript drives this checklist application. It provides users an
interactive todo list using vanilla JavaScript, local storage,
geolocation, and the *Google Maps* API without the overhead of extensive
JavaScript libraries. Modernizr detects available browser features.
The application attempts to save tasks to local storage and falls back
to cookies when local storage is unavailable.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    JavaScript . Modernizr . Google Maps
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    <a class="posts-nav-link"
       href="https://github.com/davidtimmons/browser-checklist"
       title="Click here to see the project code.">
      GitHub
    </a>
  </p>
</div>


<h2><span class="headline-image">»</span> Fortune 100 Pricing Tool</h2>
<p>
  <img src="{{ imagePath }}2014/05/fortune-100-pricing-tool.jpg"
       alt="Fortune 100 Pricing Tool"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2014/05/fortune-100-pricing-tool.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

This tool suite supports the sales function at a *Fortune 100*
corporation. It determines customer eligibility for current promotional
offers based on geography and product selection then exports a price
quote into a standalone document.

I built this tool entirely in *Microsoft Excel* using a
Model-View-Controller (MVC) pattern. Here's how it works:

1.  Shows current prices and user interaction controls on visible
    worksheets.
2.  Stores all price points and discounts within hidden worksheets that
    act as an application database.
3.  Enables user interaction controls to interface with approximately
    2,000 lines of code written in the Microsoft *Visual Basic for
    Applications* (VBA) language.
4.  Updates the hidden database worksheets and the visible interface
    worksheets based on user interactions that access the VBA code.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    Microsoft VBA . Microsoft Excel
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    Closed-source software project
  </p>
</div>


<h2><span class="headline-image">»</span> Website Animation Control Panel</h2>
<p>
  <img src="{{ imagePath }}2014/05/website-animation-control-panel.jpg"
       alt="Website Animation Control Panel"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2014/05/website-animation-control-panel.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

This animation control panel enables non-technical content managers to
enter desired text within a modified WordPress interface then select a
custom animation style and timing for each entered phrase. Animated
phrases appear on the homepage in specified order with the custom
animations applied. The project weight is approximately 200 lines of
code. Here's how it works:

1.  Injects specified animation options into each HTML tag containing an
    animated phrase.
2.  Constructs a JavaScript object containing all user-defined animation
    attributes associated with a phrase.
3.  Places all such objects into a queue.
4.  Strips each queued object of extraneous HTML tags to isolate the
    text nodes.
5.  Recursively plays each animation according to the options stored in
    the queued object.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    JavaScript . jQuery . PHP
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    Closed-source software project
  </p>
</div>


<h2><span class="headline-image">»</span> Front-End Web Development</h2>
<p>
  <img src="{{ imagePath }}2014/05/front-end-web-development.jpg"
       alt="Front-End Web Development"
       class="project-img shadow aligncenter size-full"
       srcset="{{ imagePath }}2014/05/front-end-web-development.jpg 648w"
       sizes="(max-width: 648px) 100vw, 648px">
</p>

My experience with front-end Web development includes responsive and
fluid design, landing pages, email templates, and WordPress themes.
While I build certain projects from scratch, I base many others on
standards-compliant frameworks, such as HTML5 Boilerplate, to
circumvent the many browser quirks confronting modern Web development.
My Web projects often include jQuery or vanilla JavaScript and a
healthy dose of SEO.

<div class="posts-nav shadow project-details">
  <p class="project-tag">Technology</p>
  <p class="project-tech">
    HTML . CSS . JavaScript . jQuery . PHP
  </p>
  <p class="project-tag">Link</p>
  <p class="project-link">
    Various projects
  </p>
</div>


[Elm]: http://elm-lang.org/ "Click here to learn more about Elm."
[Metalsmith]: http://www.metalsmith.io/ "Click here to learn more about Metalsmith."
