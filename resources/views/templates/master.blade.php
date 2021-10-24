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

        .getintouchbutton {
        display: inline-block;
        padding: 12px 24px;
        border: 1px solid #4f4f4f;
        border-radius: 4px;
        transition: all 0.2s ease-in;
        position: relative;
        overflow: hidden;
        font-size: 19px;
        color: black;
        z-index: 1;
        }

        .getintouchbutton:before {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%) scaleY(1) scaleX(1.25);
        top: 100%;
        width: 140%;
        height: 180%;
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 50%;
        display: block;
        transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
        z-index: -1;
        }

        .getintouchbutton:after {
        content: "";
        position: absolute;
        left: 55%;
        transform: translateX(-50%) scaleY(1) scaleX(1.45);
        top: 180%;
        width: 160%;
        height: 190%;
        background-color: #39bda7;
        border-radius: 50%;
        display: block;
        transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
        z-index: -1;
        }

        .getintouchbutton:hover {
        color: #ffffff;
        border: 1px solid #39bda7;
        }

        .getintouchbutton:hover:before {
        top: -35%;
        background-color: #39bda7;
        transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
        }

        .getintouchbutton:hover:after {
        top: -45%;
        background-color: #39bda7;
        transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
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
