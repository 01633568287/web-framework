<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Search</title>
</head>

<body style="height: 100vh;display:flex;flex-direction:column;justify-content:space-between">
    <div>
        <h2>TRA CỨU THÔNG TIN TUYỂN SINH</h2>
    <form action="" method="get">
        <div class="search">
            <input type="text" id="name" name="name" placeholder="Nhập họ tên học sinh cần tìm...." class="form-control">
            <input type="text" name="id" id="id" placeholder="Nhập mã học sinh cần tìm...." class="form-control">
            {{-- <input type="text" id="name" name="name" placeholder="Nhập họ tên học sinh cần tìm...."> --}}
            {{-- <input type="text" name="id" id="id" placeholder="Nhập mã học sinh cần tìm...."> --}}
            <button type="submit" class="btn btn-success">Tìm Kiếm</button>
        </div>
        
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Mã học sinh</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Ghi chú</th>
                </tr>
            </thead>
            <tbody>
                @if (!$students->isEmpty())
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id_student }}</td>
                            <td>{{ $student->fullname }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->description }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>Trống dữ liệu</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </form>
    </div>
    <footer>


        <div class="contact">
            <a href="https://www.facebook.com/quangit30/" target="_blank"><i class="fa fa-globe"
                    aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/duongquang12/" target="_blank"><i class="fa fa-instagram"
                    aria-hidden="true"></i></a>
            <a href="tel:0333568287" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <a href="mailto:duongquang30052000@gmail.com" target="_blank"><i class="fa fa-envelope-open-o"
                    aria-hidden="true"></i></a>
    
    
        </div>
        <div class="copyright">
            <p> &copy; Copyright Dương Văn Quang</p>
        </div>
    </footer>
</body>


</html>
