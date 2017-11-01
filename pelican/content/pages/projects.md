Title: Projects
Date: 2014-05-29 23:19
Author: David Timmons
Slug: projects
Status: published

These projects are highlights from my past and current development work.
I love the creative challenge inherent in problem solving and
continually teach myself new skills to expand my repertoire. While some
projects here are proprietary, many are not. Everything below is my own
work unless specifically stated otherwise.

## » Mega Air Man
---
![Mega Air Man][mam-img]

*Mega Air Man* is a game demo written in *[Elm][]* and based on the NES
classic *Mega Man 2*. *Elm* is a cutting-edge ML-style language similar
to *Haskell* that natively supports a functional reactive architecture
in client-side Web applications.

<span class="project-details">
  Technology<br />
  Elm

  Link<br />
  [Demo][mam-demo] . [GitHub][mam-code]
</span>


## » React CSV Component
---
![React CSV Component][rcc-img]

This is a React/Flux module written in *JSX* and *Javascript (ES2015)*
that simulates a CSV (Comma-Separated Value) spreadsheet. It features
arithmetic string parsing using the shunting-yard algorithm, undo and
redo state tracking, customizable row and column counts, an optional
highlighted footer row, and data export into a CSV file (for modern
browsers.)

<span class="project-details">
  Technology<br />
  React . Flux . JSX. JavaScript (ES2015)

  Link<br />
  [Demo][rcc-demo] . [GitHub][rcc-code]
</span>


## » Hacka\_finder
---
![Hacka\_finder][haf-img]

*Hacka\_finder* is a single-page Web application (SPA) that matches
registered users into hackathon teams based on skills, event goals, and
location.

This app uses a modern approach to Web application design where most of
the "heavy lifting" is done on the client side. *AngularJS* and
*Bootstrap* power the front end while *Node.js* with *Express* and
*MongoDB* power the back end. Registered users search for upcoming
hackathons then find a team to join based on their unique search
criteria.

*Hacka\_finder* is a learning project built to study the MEAN stack
(MongoDB, Express, AngularJS, Node.js) and Web app development. I read
six books and many API references to learn all the technologies then
started building. This is the result!

<span class="project-details">
  Technology<br />
  MongoDB . Express . AngularJS . Node.js . Bootstrap . SASS . Mocha .
  Chai . Grunt . Yeoman

  Link<br />
  [Demo][haf-demo] . [GitHub][haf-code]
</span>


## » Simon Says Circuit
---
![Simon Says Circuit][ssc-img]

This *Arduino* project is similar to the electronic memory games made
popular in the 1980s. It uses a microcontroller and a variant of the C
programming language. The program creates a randomized sequence of
progressively complex LED flashes. A player must memorize the pattern
and input the correct sequence.

This version gives the player three chances. After entering an incorrect
pattern three times, the game is over. The player can reset the game by
moving the board to activate the tilt switch.

<span class="project-details">
  Technology<br />
  Arduino . Circuit Design . C

  Link<br />
  [GitHub][ssc-code]
</span>


## » Text Scalpel App
---
![Text Scalpel App][tsa-img]

*Text Scalpel App* is a Python *Flask* Web application designed using
the MVC architecture pattern.

A user enters his or her name then uploads a text document. The app
parses this file to find word counts and display a list of the most
common words. It also generates a random text paragraph using words
pulled from the file. Results are stored in a *SQLite* database using
relational tables that link users to their text analysis results.

<span class="project-details">
  Technology<br />
  Python . Flask

  Link<br />
  [GitHub][tsa-code]
</span>


## » Browser Checklist
---
![Browser Checklist][brc-img]

JavaScript drives this checklist application. It provides users an
interactive todo list using vanilla JavaScript, local storage,
geolocation, and the *Google Maps* API without the overhead of extensive
JavaScript libraries. *Modernizr* detects available browser features.
The application attempts to save tasks to local storage and falls back
to cookies when local storage is unavailable.

<span class="project-details">
  Technology<br />
  JavaScript . Modernizr . Google Maps

  Link<br />
  [GitHub][brc-code]
</span>


## » Fortune 100 Pricing Tool
---
![Fortune 100 Pricing Tool][fpt-img]

This tool suite supports the sales function at a *Fortune 100*
corporation. It determines customer eligibility for current promotional
offers based on geography and product selection then exports a price
quote into a standalone document.

I built this tool entirely in *Microsoft Excel* using a
*Model-View-Controller* (MVC) pattern. Here's how it works:

1.  Shows current prices and user interaction controls on visible
    worksheets.
2.  Stores all price points and discounts within hidden worksheets that
    act as an application database.
3.  Enables user interaction controls to interface with approximately
    2,000 lines of code written in the Microsoft *Visual Basic for
    Applications* (VBA) language.
4.  Updates the hidden database worksheets and the visible interface
    worksheets based on user interactions that access the VBA code.

<span class="project-details">
  Technology<br />
  Microsoft VBA . Microsoft Excel

  Link<br />
  Closed-source software project
</span>


## » Website Animation Control Panel
---
![Website Animation Control Panel][wap-img]

This animation control panel enables non-technical content managers to
enter desired text within a modified *WordPress* interface then select a
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

<span class="project-details">
  Technology<br />
  JavaScript . jQuery . PHP

  Link<br />
  Closed-source software project
</div>


## » Front-End Web Development
---
![Front End Web Development][few-img]

My experience with front-end Web development includes responsive and
fluid design, landing pages, email templates, and *WordPress* themes.
While I build certain projects from scratch, I base many others on
standards-compliant frameworks, such as *HTML5 Boilerplate*, to
circumvent the many browser quirks confronting modern Web development.
My Web projects often include *jQuery* or vanilla JavaScript and a
healthy dose of SEO.

<span class="project-details">
  Technology<br />
  HTML . CSS . JavaScript . jQuery . PHP

  Link<br />
  Various projects
</div>


[mam-img]: {filename}/images/2016/02/mega-air-man.jpg
  "Mega Air Man"

[mam-demo]: http://mega-air-man.timmons.io
  "Click here to play the demo."

[mam-code]: https://github.com/davidtimmons/mega-air-man
  "Click here to see the project code."

[rcc-img]: {filename}/images/2016/01/react-csv-component.jpg
  "React CSV Component"

[rcc-demo]: http://react-csv.timmons.io
  "Click here to see a demo."

[rcc-code]: https://github.com/davidtimmons/react-csv
  "Click here to see the project code."

[haf-img]: {filename}/images/2015/08/hackafinder-home.jpg
  "Hacka_finder"

[haf-demo]: http://hackafinder.timmons.io
  "Click here to see a demo."

[haf-code]: https://github.com/davidtimmons/hackafinder
  "Click here to see the project code."

[ssc-img]: {filename}/images/2014/08/simon-says-breadboard.jpg
  "Simon Says Circuit"

[ssc-code]: https://github.com/davidtimmons/simon-says-circuit
  "Click here to see the project code."

[tsa-img]: {filename}/images/2014/08/text-scalpel-app-dashboard.png
  "Text Scalpel App"

[tsa-code]: https://github.com/davidtimmons/text-scalpel-app
  "Click here to see the project code."

[brc-img]: {filename}/images/2014/08/browser-checklist.jpg
  "Browser Checklist"

[brc-code]: https://github.com/davidtimmons/browser-checklist
  "Click here to see the project code."

[fpt-img]: {filename}/images/2014/05/fortune-100-pricing-tool.jpg
  "Fortune 100 Pricing Tool"

[wap-img]: {filename}/images/2014/05/website-animation-control-panel.jpg
  "Website Animation Control Panel"

[few-img]: {filename}/images/2014/05/front-end-web-development.jpg
  "Front-End Web Development"

[Elm]: http://elm-lang.org/
  "Click here to learn more about Elm."
