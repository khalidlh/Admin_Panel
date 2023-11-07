<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <!-- Custom styles for this template-->
    {{-- <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .imgbg {

            background-image: url("{{ asset('assets/img/bg_message.avif') }}");
            background-repeat: no-repeat;
            /* width: 100%; */
            background-size: cover;
            background-attachment: fixed;
            /* opacity: 0.8; */
        }
        body{
    background-color: rgb(182, 207, 207) ;  
     }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center mt-5">
        <div class="card text-center imgbg" style="width: 38rem;color:rgb(232, 229, 229);font-style:oblique">
            <div class="card-header">
                Bienvenu khalid lahmidi
            </div>
            <div class="card-body">
                <h5 class="card-title">Message</h5>
                <p class="card-text">
                    Bonjour Nom utilisateur.<br>
                    in ne vous reste plus qu'une etape pour activer le compte,pour ce faire,
                    vous devez verifier votre email, dans lequel vous recevrez un lien vous permettant d'activer votre
                    compte.
                </p>
                <a href="#" class="btn btn-primary " target="__planck">Go to your mail</a>
            </div>
        </div>
    </div>
</body>

</html>
