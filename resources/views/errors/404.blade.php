<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>404</title>
        @include('admin.layouts.head_styles')
    </head>

    <body>
        <main class="app-content m-0">
            <div class="page-error tile">
                <h1><i class="fa fa-exclamation-circle"></i> Error 404: Page not found</h1>
                <p>The page you have requested is not found.</p>
                <p><a class="btn btn-primary" href="javascript:window.history.back();">Go Back</a></p>
            </div>
        </main>

    </body>

</html>