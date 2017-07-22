#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

import os
import sys
sys.path.append(os.curdir)
from _config import *


#--------------------#
#- PELICAN SETTINGS -#
#--------------------#

# This file is only used if you use 'make publish' or explicitly specify it as your config file.
# See http://docs.getpelican.com/en/stable/settings.html.

#########
# Basic #
#########
USE_FOLDER_AS_CATEGORY = True
DEFAULT_CATEGORY = 'Other'
DISPLAY_PAGES_ON_MENU = True
DISPLAY_CATEGORIES_ON_MENU = False
DELETE_OUTPUT_DIRECTORY = True
OUTPUT_RETENTION = ['.keep']
OUTPUT_PATH = 'output/'
PATH = 'content'
PAGE_PATHS = ['pages']
ARTICLE_PATHS = ['articles']
PLUGINS = [
    #'deadlinks',
    'sitemap'
]
PLUGIN_PATHS = ['plugins']
STATIC_PATHS = ['demos', 'images', 'static']
STATIC_EXCLUDES = ['wordpress-theme']
SUMMARY_MAX_LENGTH = 40

#######
# URL #
#######
RELATIVE_URLS = False
AUTHOR_URL = ''
AUTHOR_SAVE_AS = AUTHOR_URL
AUTHORS_SAVE_AS = ''
ARTICLE_URL = '{slug}.html'
ARTICLE_SAVE_AS = ARTICLE_URL
DRAFT_URL = 'drafts/{slug}.html'
DRAFT_SAVE_AS = DRAFT_URL
PAGE_URL = '{slug}.html'
PAGE_SAVE_AS = PAGE_URL
CATEGORY_URL = 'category/{slug}.html'
CATEGORY_SAVE_AS = CATEGORY_URL
CATEGORIES_SAVE_AS = 'categories.html'
TAG_URL = ''
TAG_SAVE_AS = TAG_URL
TAGS_SAVE_AS = ''
ARCHIVES_SAVE_AS = 'archives.html'
MONTH_ARCHIVE_SAVE_AS = 'archives/{date:%Y}/{date:%m}/index.html'

#################
# Time and Date #
#################
DEFAULT_DATE = 'fs'
DEFAULT_DATE_FORMAT = '%B %d, %Y %X'

########
# Feed #
########
FEED_ALL_ATOM = 'feeds/all.atom.xml'
CATEGORY_FEED_ATOM = 'feeds/%s.atom.xml'
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

##############
# Pagination #
##############
DEFAULT_PAGINATION = 10

##########
# Themes #
##########
THEME = 'blue-penguin'

###########
# Plugins #
###########
DEADLINK_VALIDATION = True
DEADLINK_OPTS = {
    'archive': True,
    'classes': ['disabled'],
    'labels': False
}
SITEMAP = {
    'format': 'xml',
    'priorities': {
        'articles': 0.5,
        'indexes': 0.5,
        'pages': 0.9
    },
    'changefreqs': {
        'articles': 'monthly',
        'indexes': 'monthly',
        'pages': 'monthly'
    }
}
