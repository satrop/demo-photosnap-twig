#!/bin/bash

# Function to convert images in a directory
convert_directory() {
    local dir=$1
    find "$dir" -type f -name "*.jpg" | while read -r img; do
        # Create WebP version
        cwebp -q 85 "$img" -o "${img%.jpg}.webp"
        echo "Converted: $img to ${img%.jpg}.webp"
    done
}

# Convert images in all relevant directories
directories=(
    "build/images/features"
    "build/images/home"
    "build/images/pricing"
    "build/images/shared"
    "build/images/stories"
    "public/images/features"
    "public/images/home"
    "public/images/pricing"
    "public/images/shared"
    "public/images/stories"
)

for dir in "${directories[@]}"; do
    if [ -d "$dir" ]; then
        echo "Converting images in $dir..."
        convert_directory "$dir"
    fi
done

echo "Conversion complete!"
