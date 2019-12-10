@extends('layouts.empty')

@section('meta_title', 'Заголовок страницы')
@section('meta_description', 'Описание страницы')

@section('content')
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <span class="error-block" style="color: #ff4b4b;font-size: 14px;display:none;"></span>
                        <form class="row login_form" id="contactForm" >
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="login" name="login" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="button" id="loginSubmit" value="submit" class="button button-login w-100">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script>
    $( document ).ready(function() {
        $('#loginSubmit').click(function(){
            $('.error-block').hide();
            $.ajax({
                type: "POST",
                url: 'http://hubnail.loc/auth',
                dataType: "json",
                data: {login:$('#login').val(), password:$('#password').val()},
                success : function(data){
                    $('.error-block').html('');
                    window.location.replace("http://hubnail.loc/admin/home");
                },
                error: function(data){
                    $('.error-block').html('');
                    $.each(  data.responseJSON.errors, function( key, value ) {
                        $('.error-block').prepend( '<p>' + key + ": " + value + '</p>');
                    });
                    $('.error-block').show();
                }
            });
        });
    });
</script>


