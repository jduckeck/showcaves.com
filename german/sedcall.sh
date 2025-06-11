#!/usr/bin/env bash
echo $0
find . -name '*.html' -type f -exec sed -i 's/, offizielle Website/, offizielle Website/g' {} +
find . -name '*.html' -type f -exec sed -i 's/(besucht: /(besucht: /g' {} +
