
<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;" >
	<!-- lotus-footer -->
	<tr>
		<td align="center"  bgcolor="#f0f0f0" class="container-padding">
			<!-- Content -->
			<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="580" style="width:580px;max-width:580px;">
				<tr>
					<td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
				</tr>
				<tr  >
					<td align="center">
						<!-- Social Icons -->
						<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;">
							<tr>
								<td align="center">
									<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
										<tr>
											<td   class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
												@if( config('email-template.instagram_url') != '')
													<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
														<tr>
															<td width="10"></td>
															<td align="center">
																<a href="{{ config('email-template.facebook_url') }}"><img style="width:36px;border:0px;display: inline!important;" src="{{ asset('assets/img/emails/Facebook.png') }}" width="36" border="0"       alt="icon"></a>
															</td>
															<td width="10"></td>
														</tr>
													</table>
												@endif
											</td>
											<td   class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
												@if( config('email-template.instagram_url') != '')
													<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
														<tr>
															<td width="10"></td>
															<td align="center">
																<a href="{{ config('email-template.instagram_url') }}"><img style="width:36px;border:0px;display: inline!important;" src="{{ asset('assets/img/emails/Instagram.png') }}" width="36" border="0"       alt="icon"></a>
															</td>
															<td width="10"></td>
														</tr>
													</table>
												@endif
											</td>
											<td   class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
												@if( config('email-template.twitter_url') != '')
													<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
														<tr>
															<td width="10"></td>
															<td align="center">
																<a href="{{ config('email-template.twitter_url') }}"><img style="width:36px;border:0px;display: inline!important;" src="{{ asset('assets/img/emails/Twitter.png') }}" width="36" border="0"       alt="icon"></a>
															</td>
															<td width="10"></td>
														</tr>
													</table>
												@endif
											</td>
											<td   class="rwd-on-mobile" align="center" valign="middle" height="36" style="height: 36px;">
												@if( config('email-template.pinterest_url') != '')
													<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
														<tr>
															<td width="10"></td>
															<td align="center">
																<a href="{{ config('email-template.pinterest_url') }}"><img style="width:36px;border:0px;display: inline!important;" src="{{ asset('assets/img/emails/Pinterest.png') }}" width="36" border="0"       alt="icon"></a>
															</td>
															<td width="10"></td>
														</tr>
													</table>
												@endif
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- Social Icons -->
					</td>
				</tr>
				<tr  >
					<td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
				</tr>
				<tr  >
					<td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">
						<div  >
							{{ config('email-template.street_address') }}
						</div>
					</td>
				</tr>
				<tr  >
					<td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">
						<a href="{{ url('/') }}" style="color:#6e6e6e;margin-right: 30px"><span>&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</span></a>
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