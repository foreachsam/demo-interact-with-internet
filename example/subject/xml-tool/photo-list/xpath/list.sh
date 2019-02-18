#!/usr/bin/env bash

mkdir -p all

xpath -q -e '//photo/@url_o' xml/list.xml | awk -F '=' '{print $2}' | awk -F '"' '{print $2}' > all/list.txt


# xpath -q -e '//photo' xml/list.xml
# xpath -q -e '//photo/@url_o' xml/list.xml
