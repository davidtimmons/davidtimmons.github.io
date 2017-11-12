#!/bin/bash

##
# Scrape the <meta name="description"> key from the current website.
##

SITEMAP="metalsmith/build/sitemap.xml"
OUTPUT=$(cd `dirname $0` && pwd)/tmp/metadata.dat

# Strip all URLs out of the sitemap (which should match the live site.)
LINKS=$(                                          \
    sed -e 's/\(.*<loc>\)\(.*\)\(<\/loc>.*\)/\2/' \
        -e 's/<.*>//'                             \
        "$SITEMAP"                                \
)

# Get all metadata.
> "$OUTPUT"
for link in $LINKS
do
    # Parse the local sitemap to derive the corresponding markdown file names.
    MD_FILE=$(                                \
        echo "$link" |                        \
        sed -e "s/http.*io\/\(.*\)\//\1\.md/" \
            -e "s/.*404.*//"                  \
            -e "s/demos.*//"                  \
            -e "s/http.*/index.md/"           \
    )

    # Scrape the website.
    if [ "$MD_FILE" != "" ]; then
        VALUE=$(                                                               \
            curl --silent --show-error "$link" |                               \
            grep '<meta name="description"' |                                  \
            sed -e 's/\(<meta name="description" content="\)\(.*\)\(".*\)/\2/' \
        )
        echo "$MD_FILE|$VALUE" >> "$OUTPUT"
    fi
done
