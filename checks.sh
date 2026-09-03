#!/usr/bin/env bash
if [ -n "$GITHUB_ENV" ]; then
	echo "VALIDATE_CSS=false" >>"$GITHUB_ENV"
	echo "VALIDATE_CSS_STYLELINT=false" >>"$GITHUB_ENV"
fi
echo 0
