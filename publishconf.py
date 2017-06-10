#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

import os
import sys
sys.path.append(os.curdir)
from pelicanconf import *


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
PAGE_PATHS = ['pages']
ARTICLE_PATHS = ['articles']
STATIC_PATHS = ['images', 'static']
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

########
# Feed #
########
FEED_ALL_ATOM = 'feeds/all.atom.xml'
CATEGORY_FEED_ATOM = 'feeds/%s.atom.xml'

##########
# Themes #
##########
THEME = 'notmyidea'
