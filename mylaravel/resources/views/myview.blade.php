<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="author" content="66160084">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <div class="container">
            <h1>Workshop #LARAVEL - FORM</h1>
            <form action="{{url('/mycontroller')}}"
                method="post">
                @csrf
                <div class="mb-3">
                    <label for="typeNumber" class="form-label">Type a number to generate multiplication table</label>
                    <input type="text" class="form-control" id="typeNumber" name="myinput">

                </div>
                <button type="submit" name="submit" class="btn btn-primary">Generate</button>
            </form>

            <div class='border mb-4'>
                <div class=''>
                    <h2 class=''>Mul-Table: {{$myinput}}</h2>
                    <div class=''>
                        <?php for ($i = 1; $i <= 12; $i++) { ?>

                            <div class=''>
                                <p class='m-0'>{{$myinput}} x {{$i}} = {{$i * $myinput}}</p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>
