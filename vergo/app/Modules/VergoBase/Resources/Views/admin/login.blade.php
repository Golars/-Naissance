@extends('vergo_base::admin.layouts.simple')

{{-- Content --}}
@section('content')
<div id="login" class="form">
    <section class="login_content">
        @if(isset($errors))
            @foreach($errors as $error)
                <div class="alert alert-success" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        {!! Form::open(['route' => 'admin:login', 'class' => 'form-horizontal form-label-left', 'enctype' => 'multipart/form-data']) !!}
            <img src="http://39crzn4d8yok782oj2sl02r1.wpengine.netdna-cdn.com/wp-content/uploads/2015/08/Web-Design-Ledger-200px-tall.png" width="200px">
            <div>
                <input name="email" type="text" class="form-control" placeholder="E-Mail" required="" />
            </div>
            <div>
                <input name="password" type="password" class="form-control" placeholder="Пароль" required="" />
            </div>
            <div>
                <button type="submit" class="btn btn-success btn-lg submit">Войти</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

                <div class="clearfix"></div>
                <br />
                <div>
                    <h1><i class="fa fa-copyright" style="font-size: 26px;"></i> VERGO</h1>

                    <p>©2015-{{date('Y')}} All Rights Reserved. Privacy and Terms</p>
                </div>
            </div>
        {!! Form::close()!!}
        <!-- form -->
    </section>
    <!-- content -->
</div>
@stop