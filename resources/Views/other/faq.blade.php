@extends('layout.master')

@section('title', 'FAQ')

@section('content')
    <div class="accordion" id="accordionExample" style="margin: 2rem;">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How to create an account?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    To create an account, click on the "Sign Up" button on the homepage. You will be asked to provide your email address and create a password. After you submit this information, you will receive a confirmation email. Click on the link in the email to confirm your account.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How to post a movie review?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    To post a movie review, first, make sure you are logged in. Then, navigate to the page of the movie you want to review. Click on the "Write a Review" button and fill out the form that appears. When you are done, click "Submit" to post your review.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How to report inappropriate comments?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    If you see a comment that you believe is inappropriate or violates our community guidelines, you can report it by clicking on the "Report" button next to the comment. This will send a report to our moderation team, who will review the comment and take appropriate action.
                </div>
            </div>
        </div>
    </div>
@endsection
