#!/bin/bash

##
# Convert Markdown files with a Pelican metadata format to a YAML metadata format.
##

# Get the directory where this script is located.
THIS_DIRECTORY=$(cd `dirname $0` && pwd)

# Substitute this directory name for the directory where the content is located.
SRC_DIRECTORY=${THIS_DIRECTORY%`basename $THIS_DIRECTORY`}src

# Define paths to markdown files that should change.
ARTICLES=$SRC_DIRECTORY/articles/*/*.md
PAGES=$SRC_DIRECTORY/pages/*.md

# Get absolute path of all markdown files.
FILES=$(ls -d -1 $ARTICLES $PAGES)

# Change file contents.
for file in $FILES
do
    sed -i \
        -e 's/Title:/---\ntitle:/'           \
        -e 's/Date:/date:/'                  \
        -e 's/Author:/author:/'              \
        -e 's/Category:/category:/'          \
        -e 's/Slug:/slug:/'                  \
        -e 's/Status:\(.*\)/status:\1\n---/' \
        -e 's/status: draft/draft: true/'    \
        -e 's/status:\(.*\)/draft: false/'   \
    "$file"
done