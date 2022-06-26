<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    @include('base.includeCeo')
    @include('base.includeCss')
    
</head>
<body class="is-boxed has-animations">

    <div class="body-wrap">

       @include('body.header')
       @include('body.main')
       @include('body.footer') 

    </div>

    @include('base.includeScript')
</body>
</html>
