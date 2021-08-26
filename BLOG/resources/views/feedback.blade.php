<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Ziyaretçi Geri Bildirim Formu</h1>
    </div>
    <div style="background-color: yellow" id="error_div">
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>


        @endforeach
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="{{route('feedback-post')}}">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">İsminiz <a style="color: red">*</a> </label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Lütfen Adınızı Giriniz" required="required" data-error="Lütfen İsminizi Giriniz!"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Soyisminiz <a style="color: red">*</a></label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lütfen Soyadınızı Giriniz " required="required" data-error="Soyadını Giriniz!"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email <a style="color: red">*</a> </label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Mail Adresinizi Giriniz" required="required" data-error="E mail adresi boş bırakılamaz!"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Geri Bildirim Türünü Seçiniz<a style="color: red">*</a></label>
                                            <select id="form_need" name="need" class="form-control" required="required" data-error="Lütfen Bir Tür Seçiniz">
                                                <option value="" selected disabled>Geri Bildirim Türünü Seçiniz</option>
                                                <option>Eleştiri</option>
                                                <option>Tavsiye</option>
                                                <option>İstek</option>
                                                <option>Diğer</option>
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Mesajınız <a style="color: red">*</a></label>
                                            <textarea  style="resize: none"  id="form_message" name="message" class="form-control" placeholder="Lütfen Mesajınızı Giriniz" rows="4" required="required" data-error="Mesaj Alanı boş bırakılamaz"></textarea> </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block p-l-2 " value="Geri Bildirimi Gönder">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div><script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js')}}" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js')}}" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>
