@extends('layouts.master')
@section('title')
Contact 
@stop
@section('content')

 <div id="bigWrapper" class="relative">
        <!-- Check if is home page and apply slider -->
        <div id="pageHeader"
            style="background: url('web_sanosil/uploads/2015/09/iStock_000083683745_schmal.jpg') no-repeat 50% 50%; background-size: cover;">
            <div class="container relative height100 555">
                <div id="pageTitleHolder">
                    <!-- <h1 id="pageTitle" class="bold white">
                    Contact                </h1> -->
                    <h1 id="pageTitle" class="bold white">Kontak</h1>
                    <div id="pageDescription" class="white">
                    Silahkan menghubungi kami </div>
                </div>
            </div>
        </div>
        <div id="pageWrapper">
            <div class="container">
                <div class="contact-section">
                    <h2 class="bigTitle off TinTitleLine upperCaseText blue bigTitleContactMargin">
                        <span class='light'></span> <span class='bold'>Lokasi Kantor</span> </h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="contactFields addressField">
                                        <div class="contactFieldHeader bold">
                                            Alamat : </div>
                                        <div class="contactFieldBody">
                                        Jl. Bulak Setro Indah 2 Blok B No.51, Kel. Bulak, Kec. Bulak, Kota SBY, Jawa Timur 60124</div>
                                    </div>
                                    <div class="contactFields telefonField">
                                        <div class="contactFieldHeader bold">
                                        Telepon 1 : </div>
                                        <div class="contactFieldBody">
                                        031 5150 1901 </div><br>
                                        <div class="contactFieldHeader bold">
                                        Telepon 2 : </div>
                                        <div class="contactFieldBody">
                                        031 6005 0192 </div><br>
                                        <div class="contactFieldHeader bold">
                                        Handphone: </div>
                                    <div class="contactFieldBody">
                                        0812 3270 413 </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="contactFields internetField">
                                        <div class="contactFieldHeader bold">
                                            Website: </div>
                                        <div class="contactFieldBody">
                                            <a href="/sanosil">www.sanosil.co.id</a>
                                        </div>
                                    </div>
                                    <div class="contactFields emailField">
                                        <div class="contactFieldHeader bold">
                                            E-Mail: </div>
                                        <div class="contactFieldBody">
                                            <a href="mailto:pratamindo.rizky@gmail.com">pratamindo.rizky@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="contactFields faxField">
                                        <div class="contactFieldHeader bold">
                                            Fax: </div>
                                        <div class="contactFieldBody">
                                        031 5150 1902 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 firstImage">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15832.289979767767!2d112.782591!3d-7.232572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3518e426d1cb5914!2sPT.%20Pratamindo%20Mitra%20Rizky!5e0!3m2!1sid!2sid!4v1584611389933!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contactMap1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15832.289979767767!2d112.782591!3d-7.232572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3518e426d1cb5914!2sPT.%20Pratamindo%20Mitra%20Rizky!5e0!3m2!1sid!2sid!4v1584611389933!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div> -->
                </div>
                <div class="contact-section">
                    <h2 class="bigTitle off TinTitleLine upperCaseText blue bigTitleContactFormMargin">
                        <span class='light'>Form</span> <span class='bold'>Kontak</span> </h2>
                    <div id="requiredText">Untuk menghubungi team kami silahkan isi form di bawah ini *</div>
                    <div class='contact-form-wrapper'>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <form id="sanosilForm" class="clearfix" method="post" action="{{route('send.mail')}}">
                        @csrf()
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <span class="fieldHolder">
                                        <input type="text" id="name" name="name" placeholder="NAMA" autocomplete="off"
                                            required="required" />
                                        <span class="requiredField">*</span>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <span class="fieldHolder">
                                        <input type="email" id="email" name="email" placeholder="E-MAIL"
                                            autocomplete="off" required="required" />
                                        <span class="requiredField">*</span>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <span class="fieldHolder">
                                        <input type="number" id="phone" name="phone" placeholder="TELEPON"
                                            autocomplete="off" required="required" />
                                        <span class="requiredField">*</span>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <span class="fieldHolder">
                                        <input type="text" id="subtitle" name="subtitle" placeholder="JUDUL"
                                            autocomplete="off" required="required" />
                                        <span class="requiredField">*</span>
                                    </span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea id="message" name="message" placeholder="PESAN" /></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div id="googlecaptcha_wrapper">
                                        <div id="googlecapatcha"></div>
                                    </div>
                                    <input type="submit" id="submit" value="Kirim Pesan">
                                    <input type="hidden" name="langPref" id="langPref" value="en" />
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.validate.js"></script>
        <script src="https://www.google.com/recaptcha/api.js?hl=en" async defer></script>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5VY3C_GQkyNnQl42cW_17SUisE5iP9zY&sensor=false">
        </script>
    </div>
    @endsection
