About collage images (homepage)
================================
Current: about-collage-reference.png is used for BOTH frames in index.php, with
different CSS object-position values to suggest two photos.

When you have final photography:
1. Save as e.g. about-primary.jpg and about-secondary.jpg in this folder.
2. In index.php, update the two <img> src paths.
3. Tweak object-position in sms-theme.css under:
   .sms-about-pro__img-primary img
   .sms-about-pro__img-secondary img

White frame = 8px padding on the image wrappers (pure #fff), square corners.
