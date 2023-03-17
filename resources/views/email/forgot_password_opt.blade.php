@extends('email.main.layout')
@section('title'){{ __('email.Forgot Password Title') }} @endsection
@section('content')
    <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;" >
        <!-- lotus-header-4 -->
        <tr>
            <td align="center"  bgcolor="#343e9e" class="container-padding">
                
                <!-- Content -->
                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="580" style="width:580px;max-width:580px;">
                    <tr>
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td align="center" class="center-text">
                            <img style="width:190px;border:0px;display: inline!important;" src="{{ asset('assets/img/emails/Email-4_Intro.png') }}" width="190" border="0"       alt="intro">
                        </td>
                    </tr>
                    <tr  >
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td class="center-text"  align="center" style="font-family:'Roboto Slab',Arial,Helvetica,sans-serif;font-size:42px;line-height:52px;font-weight:400;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;">
                            
                            <div  >
                                {{ __('email.Forgot your password') }}?
                            </div>
                        
                        </td>
                    </tr>
                    <tr  >
                        <td height="20" style="font-size:20px;line-height:20px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:16px;line-height:26px;font-weight:300;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;">
                            
                            <div  >
                                {{ __('email.Forgot Paragraph') }}
                            </div>
                        
                        </td>
                    </tr>
                    <tr  >
                        <td height="40" style="font-size:40px;line-height:40px;" >&nbsp;</td>
                    </tr>
                    <tr  >
                        <td align="center">
                            <!-- Header Button -->
                            <table border="0" cellspacing="0" cellpadding="0" role="presentation" align="center" class="center-float">
                                <tr>
                                    <td align="center"    bgcolor="#d6df58" style="border-radius: 6px;">
                                        <!--[if (gte mso 9)|(IE)]>
                                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tr>
                                                <td align="center" width="50"></td>
                                                <td align="center" height="50" style="height:50px;">
                                        <![endif]-->
                                        
                                        <span style="font-family: 'Roboto Slab',Arial,Helvetica,sans-serif;font-size: 25px;line-height: 25px;font-weight: 700;font-style: normal;color: #333333;text-decoration: none;letter-spacing: 0px;padding: 15px 50px 15px 50px;display: inline-block;">{{ $options['opt'] }}</span>
                                        
                                        <!--[if (gte mso 9)|(IE)]>
                                        </td>
                                        <td align="center" width="50"></td>
                                        </tr>
                                        </table>
                                        <![endif]-->
                                    </td>
                                </tr>
                            </table>
                            <!-- Header Button -->
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