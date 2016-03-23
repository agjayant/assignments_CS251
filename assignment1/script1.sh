#!/bin/bash
echo -n "Namaskar, "   # -n to avoid new line
for name in $@      # looping over all arguments
do
	echo -n "$name  "
done
echo ""
