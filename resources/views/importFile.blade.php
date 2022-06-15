<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import File</title>
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            TRA CỨU THÔNG TIN TUYỂN SINH
        </h2>
        <div class="logo">
            <img src="{{ url('image/logo.png') }}" alt="">
        </div>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <div class="custom-file text-left">
                   <input type="file" name="file" class="custom-file-input" id="customFile">
                </div>
            </div>
            <button class="btn btn-primary">Import</button>
            
        </form>
    </div>
</body>
<footer>
    
   
    <div class="contact">
        <a href="https://www.facebook.com/quangit30/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/duongquang12/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="tel:0333568287" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a href="mailto:duongquang30052000@gmail.com" target="_blank"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
        
        
    </div>
     <div class="copyright">
        <p> &copy; Copyright Dương Văn Quang</p>
    </div>
</footer>
</html>