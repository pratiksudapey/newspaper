<!DOCTYPE html>
<html lang="en">
<head>
    @include("templates.master_parts.meta_tag")
    @include("templates.master_parts.style")
</head>
<body>
@include("templates.master_parts.header")
@yield("body_section")
</body>
@include("templates.master_parts.footer")
@include("templates.master_parts.script")
</html>
