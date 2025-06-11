#!/usr/bin/env bash
#find . -name '*.html' -type f -exec sed -i 's/, offizielle Website/, offizielle Website/g' {} +
#find . -name '*.html' -type f -exec sed -i 's/(besucht: /(besucht: /g' {} +
shopt -s globstar dotglob
for file in **/*.html; do
    if [[ -f $file && ! -L $file ]]; then
      echo $file
      sed -i 's/, offizielle Website/, offizielle Website/g' "./$file"
      sed -i 's/(besucht: /(besucht: /g' "./$file"
    fi
done
