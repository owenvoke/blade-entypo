#!/usr/bin/env bash

# Uses Icons from:
# https://github.com/adamwathan/entypo-optimized/tree/master/dist/icons

set -e

DIRECTORY=$(cd "$(dirname "$0")" && pwd)
ICONS_ROOT="${DIRECTORY}/../dist"
RESOURCES_ROOT="${DIRECTORY}/../resources/svg"

echo "Compiling Entypo..."

for FILE in "${ICONS_ROOT}/"*.svg; do
  FILENAME=${FILE##*/}

  if [ "$FILENAME" == ".gitignore" ]; then
    break
  fi

  # Compile icons...
  cp "${FILE}" "${RESOURCES_ROOT}/${FILENAME}"
  CLASS='<svg fill="currentColor"'
  sed -i "s/<svg/${CLASS}/" "${RESOURCES_ROOT}/${FILENAME}"
done

echo "All done!"
