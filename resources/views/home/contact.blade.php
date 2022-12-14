@extends('layouts.app')
@section('content')
        <div class="container justify-content-center text-center">
            <p class="text-center">Let us know how we can help you better below!</p>
    
            <div id="form-main">
                <div id="form-div">
                
                    <form class="montform" id="reused_form" method="POST" action={{route('sendmail')}}>
                        @csrf
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" required placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
@endsection