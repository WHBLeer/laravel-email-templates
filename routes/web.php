<?php


/**
 * Used to preview the Pleb email templates
 * @todo remove these routes before going live
 */
Route::get('email_template/welcome_member', function () {

    $member = App\User::find(1);
    return new App\Mail\WelcomeMember($member);
});

Route::get('email_template/verify_email', function () {

    $member = App\User::find(1);
    $options = array(
        'verify_url' => 'http://gotohere.com',
    );
    return new App\Mail\VerifyEmail($member, $options);
});

Route::get('email_template/forgot_password', function () {

    $member = App\User::find(1);
    $options = array(
        'reset_link' => 'http://gotohere.com',
    );
    return new App\Mail\ForgotPassword($member, $options);
});

Route::get('email_template/thanks_payment', function () {

    $member = App\User::find(1);
    $options = array(
        'invoice_id' => '10087866', 'invoice_total' => '100.07', 'download_link' => 'http://gotohere.com',
    );
    return new App\Mail\PaymentSuccess($member, $options);
});






