@extends('email.main.layout')
@section('title'){{ __('email.Payment Thank You Title') }} @endsection
@section('content')
    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;" >
        <!-- lotus-header-18-->
        <tr>
            <td align="center"  bgcolor="#343e9e" class="container-padding">
                
                <!-- Content -->
                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="580" style="width:580px;max-width:580px;">
                    <tr>
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td align="center" class="center-text">
                            <img style="width:190px;border:0px;display: inline!important;" src="{{ asset('assets/img/emails/Email-18_Intro.png') }}" width="190" border="0"       alt="intro">
                        </td>
                    </tr>
                    <tr  >
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td class="center-text"  align="center" style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:42px;line-height:52px;font-weight:400;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;">
                            
                            <div  >
                                {{ __('email.Thanks for your payment') }}
                            </div>
                        
                        </td>
                    </tr>
                    <tr  >
                        <td height="10" style="font-size:10px;line-height:10px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td class="center-text"  align="center" style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:26px;line-height:36px;font-weight:400;font-style:normal;color:#d7e057;text-decoration:none;letter-spacing:0px;">
                            
                            <div  >
                                {{ __('email.Attached your receipt') }}.
                            </div>
                        
                        </td>
                    </tr>
                    <tr  >
                        <td height="20" style="font-size:20px;line-height:20px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:16px;line-height:26px;font-weight:300;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;">
                            
                            <div  >
                                {{ __('email.Thank you paragraph') }}
                            </div>
                        
                        </td>
                    </tr>
                    <tr>
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                </table>
                <!-- Content -->
            
            </td>
        </tr>
    </table>
    
    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;" >
        <!-- lotus-arrow-divider -->
        <tr  >
            <td align="center"  bgcolor="#FFFFFF">
                <img style="width:50px;border:0px;display: inline!important;" src="{{ asset('assets/img/emails/Arrow.png') }}" width="50" border="0"       alt="arrow">
            </td>
        </tr>
    </table>
    
    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;" >
        <!-- lotus-content-18 -->
        <tr>
            <td align="center"  bgcolor="#FFFFFF" class="container-padding">
                
                <!-- Content -->
                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="580" style="width:580px;max-width:580px;">
                    <tr>
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td align="center"  bgcolor="#f4f5fa">
                            <!-- Content -->
                            <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="480" style="width:480px;max-width:480px;">
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td><![endif]-->
                                        <!-- Column -->
                                        <table border="0" align="left" cellpadding="0" cellspacing="0" role="presentation" class="row" width="225" style="width:225px;max-width:225px;">
                                            <tr  >
                                                <td class="center-text"  align="left" style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:20px;line-height:26px;font-weight:400;font-style:normal;color:#343e9e;text-decoration:none;letter-spacing:0px;">
                                                    
                                                    <div  >
                                                        {{ __('email.Invoice ID') }}:
                                                    </div>
                                                
                                                </td>
                                            </tr>
                                            <tr  >
                                                <td height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
                                            </tr>
                                            <tr  >
                                                <td class="center-text"  align="left" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:16px;line-height:24px;font-weight:400;font-style:normal;color:#282828;text-decoration:none;letter-spacing:0px;">
                                                    
                                                    <div  >
                                                        {{ $options['invoice_id'] }}
                                                    </div>
                                                
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- Column -->
                                        <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->
                                        <!-- gap -->
                                        <table border="0" align="left" cellpadding="0" cellspacing="0" role="presentation" width="30" style="width:30px;max-width:30px;">
                                            <tr>
                                                <td height="20" style="font-size:20px;line-height:20px;">&nbsp;</td>
                                            </tr>
                                        </table>
                                        <!-- gap -->
                                        <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->
                                        <!-- Column -->
                                        <table border="0" align="left" cellpadding="0" cellspacing="0" role="presentation" class="row" width="225" style="width:225px;max-width:225px;">
                                            <tr  >
                                                <td class="center-text"  align="left" style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:20px;line-height:26px;font-weight:400;font-style:normal;color:#343e9e;text-decoration:none;letter-spacing:0px;">
                                                    
                                                    <div  >
                                                        {{ __('email.Total') }}:
                                                    </div>
                                                
                                                </td>
                                            </tr>
                                            <tr  >
                                                <td height="10" style="font-size:10px;line-height:10px;">&nbsp;</td>
                                            </tr>
                                            <tr  >
                                                <td class="center-text"  align="left" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:16px;line-height:24px;font-weight:400;font-style:normal;color:#282828;text-decoration:none;letter-spacing:0px;">
                                                    
                                                    <div  >
                                                        {{ $options['invoice_total'] }}
                                                    </div>
                                                
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- Column -->
                                        <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                    </td>
                                </tr>
                                <tr>
                                    <td height="40" style="font-size:40px;line-height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                            <!-- Content -->
                        </td>
                    </tr>
                    <tr  >
                        <td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td align="center">
                            <!-- Paragraphs -->
                            <table border="0" cellspacing="0" cellpadding="0" role="presentation" align="center" class="row" width="480" style="width:480px;max-width:480px;">
                                <tr>
                                    <td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:26px;font-weight:400;font-style:italic;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">
                                        
                                        <div  >
                                            ({{ __('If you have any questions or feedback, just') }} <a href="mailto:{{ config('email-template.info_email') }}" style="color:#ed6e7a;text-decoration: underline;">{{ __('reply to this email') }}</a>)
                                        </div>
                                    
                                    </td>
                                </tr>
                            </table>
                            <!-- Paragraphs -->
                        </td>
                    </tr>
                    <tr  >
                        <td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td align="center">
                            @if($options['download_link'])
                                <!-- Buttons -->
                                <table border="0" cellspacing="0" cellpadding="0" role="presentation" align="center" class="center-float">
                                    <tr>
                                        <td align="center"    bgcolor="#d6df58" style="border-radius: 6px;">
                                            <!--[if (gte mso 9)|(IE)]>
                                            <table border="0" cellpadding="0" cellspacing="0" align="center">
                                                <tr>
                                                    <td align="center" width="50"></td>
                                                    <td align="center" height="50" style="height:50px;">
                                            <![endif]-->
                                            
                                            <a href="{{ $options['download_link'] }}" target="_blank"    style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:16px;line-height:19px;font-weight:700;font-style:normal;color:#000000;text-decoration:none;letter-spacing:0px;padding: 20px 50px 20px 50px;display: inline-block;"><span>{{ __('email.Download Now') }}</span></a>
                                            
                                            <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                            <td align="center" width="50"></td>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                        </td>
                                    </tr>
                                </table>
                                <!-- Buttons -->
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                </table>
                <!-- Content -->
            
            </td>
        </tr>
    </table>
@endsection
