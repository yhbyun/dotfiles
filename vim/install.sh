#!/bin/sh

# vim bundles directory
vim_bundles="$HOME/vimfiles/bundle"

# make vim bundles dir
if [ ! -d "$vim_bundles" ]; then
    mkdir -p "$vim_bundles"
fi
