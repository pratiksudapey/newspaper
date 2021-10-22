<!DOCTYPE html>
<html lang="en">
<head>
    @include("templates.master_parts.meta_tag")
    @include("templates.master_parts.style")
    <style>
        .zoom{
            overflow: hidden;
        }
        .zoom img{
            width: 100%;
            transition: 0.5s all ease-in-out;
            
        }
  
        .zoom:hover img{
            transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
</head>
<body>
@include("templates.master_parts.header")
@yield("body_section")
</body>
@include("templates.master_parts.footer")
@include("templates.master_parts.script")
</html>
