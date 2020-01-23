@extends('_layouts.master')

@section('content')
<h1 class="text-center">Contact</h1>
<br><br>
<div class="row">
    <form class="col-6 mx-auto" id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/scrat_games@gmx.de"
        method="post">
        <fieldset id="fs-frm-inputs">
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input class="form-control" type="text" name="name" id="full-name" placeholder="First and Last"
                    required="">
            </div>
            <div class="form-group">
                <label for="email-address">Email Address</label>
                <input class="form-control" type="email" name="_replyto" id="email-address"
                    placeholder="email@domain.tld" required="">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" rows="5" name="message" id="message"
                    placeholder="Dont hesitate to write a long message." required=""></textarea>
            </div>
            <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
        </fieldset>
        <input class="btn btn-secondary" type="submit" value="Submit">
    </form>
</div>
@endsection