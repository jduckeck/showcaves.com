#!/usr/bin/env bash
echo $0
find . -type f -exec sed -i 's/, offizielle Website/, offizielle Website/g' {} +
find . -type f -exec sed -i 's/(besucht: /(besucht: /g' {} +
