for file in *
do
filename=$(echo $file | cut -d'.' -f 1)
cwebp -q 80 "$file" -o "$filename.webp"
done