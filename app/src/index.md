---
title: About
date: {{ now }}
author: David Timmons
slug: about
draft: false
metaDescription: >-
    My name is David Timmons. I'm a technologist, entrepreneur, and business veteran.
    Welcome to my home on the Web!
permalink: false
---
<div class="flex flex-wrap md:flex-no-wrap mb-2">
  <div class="bg-dark-tar hidden mr-2 rounded-lg xl:flex xl:items-center">
    <div
      style="min-height: 200px; min-width: 200px;"
      class="bg-img-portrait bg-no-repeat block m-6 rounded-lg"
      >
    </div>
  </div>
  <div class="bg-dark-tar mr-0 md:mr-2 p-6 rounded-lg">
    <h3 class="border-b border-dark-coal leading-snug mixin:text-headline text-2xl">
      tl;dr
    </h3>
    <p>
      My name is David. I'm a full-stack software engineer with deep experience in
      front-end engineering and marketing technology. Check out my
      [GitHub]({{ social.github }} "David Timmons on GitHub")
      profile to explore my open-source work or
      [LinkedIn]({{ social.linkedin }} "David Timmons on LinkedIn")
      to learn more about my career.
    </p>
  </div>
  <div class="bg-dark-tar md:bg-img-pattern flex-grow mt-2 md:mt-0 p-6 rounded-lg text-shadow-darker whitespace-no-wrap">
    <h3 class="border-b border-dark-coal leading-snug mb-4 text-2xl mixin:text-headline md:border-none md:mb-0 md:text-base">
      Favorite tech:
    </h3>
    <ul class="list-custom list-custom-clear-light">
      <li>JavaScript</li>
      <li>Node.js</li>
      <li>Go (Golang)</li>
      <li>CSS</li>
      <li>functional programming</li>
    </ul>
  </div>
</div>

<div class="flex flex-wrap sm:flex-no-wrap">
  <div class="bg-dark-tar sm:mr-2 p-6 rounded-lg">
    <h3 class="border-b border-dark-coal leading-snug mixin:text-headline text-2xl">
      Bio
    </h3>
    <p>
      I am motivated by curiosity. I have a strong, innate desire to learn and continually
      seek new ideas, acquire new skills, and refine existing abilities. Software engineering
      is my primary focus, though I also have experience in business with an emphasis on
      technology and marketing.
    </p>
    <p>
      I have career experience at startups and enterprises as well as my own business
      ventures. My engineering experience spans the entire software stack (i.e. front-end,
      back-end, database, and some mobile).
    </p>
    <p>
      A focus on strong front-end engineering methodologies combined with a drive toward
      quality and best practice in all things defines my professional approach.
    </p>
  </div>

  <div class="bg-img-pattern mt-2 sm:mt-0 sm:max-w-sm p-6 rounded-lg text-shadow-darker w-full">
    <h3 class="leading-snug mixin:text-headline">
      Name:
    </h3>
    <p class="mt-0 mb-4">
      David Timmons
    </p>
    <h3 class="leading-snug mixin:text-headline">
      Location:
    </h3>
    <p class="leading-snug mt-0 mb-4 whitespace-no-wrap">
      Austin, TX <span class="mx-1 text-clear-light">•</span> USA
    </p>
    <h3 class="leading-snug mixin:text-headline">
      Work:
    </h3>
    <p class="mt-0 mb-4">
        Software Engineer
        <span class="whitespace-no-wrap">
          <span class="mx-1 text-clear-light">@</span>
          <a
            class="no-underline hover:text-purple text-aqua"
            href="https://www.abrigo.com/"
            rel="nofollow"
            target="_blank"
            >
            Abrigo
          </a>
        </span>
    </p>
    <h3 class="leading-snug mixin:text-headline">
      Email:
    </h3>
    <p class="mt-0 mb-4">
      <a
        class="no-underline hover:text-purple text-aqua"
        href="mailto:{{ social.email }}"
        title="Click here to email me."
        >
        {{ social.email }}
      </a>
    </p>
    <h3 class="leading-snug mixin:text-headline">
      Social:
    </h3>
    <ul class="list-custom-inline list-custom-clear-light whitespace-no-wrap">
      <li>
        <a
          class="no-underline hover:text-purple text-aqua"
          href="{{ social.github }}"
          title="Click here to visit my GitHub profile."
          target="_blank"
          >
          GitHub
        </a>
      </li>
      <li>
        <a
          class="no-underline hover:text-purple text-aqua"
          href="{{ social.linkedin }}"
          title="Click here to visit my LinkedIn profile."
          target="_blank"
          >
          LinkedIn
        </a>
      </li>
    </ul>
  </div>
</div>
