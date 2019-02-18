#!/usr/bin/env bash

mkdir -p all

xmllint --xpath "//photo/@url_o" xml/list.xml | sed 's/ /\n/g' | awk -F '=' '{print $2}' | awk -F '"' '{print $2}' > all/list.txt


# xmllint --xpath "//photo" xml/list.xml
# xmllint --xpath "//photo/@url_o" xml/list.xml
