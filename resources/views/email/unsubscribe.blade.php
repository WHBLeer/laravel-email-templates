<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="width:100%;max-width:100%;" >
	<!-- lotus-footer-2 -->
	<tr>
		<td align="center"  bgcolor="#f0f0f0" class="container-padding">
			
			<!-- Content -->
			<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="580" style="width:580px;max-width:580px;">
				<tr>
					<td height="50" style="font-size:50px;line-height:50px;" >&nbsp;</td>
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
						
						<a href="tel:{{ config('email-template.phone_number') }}"    style="color:#6e6e6e;"><span>{{ config('email-template.phone_number') }}</span></a>
					
					</td>
				</tr>
				<tr  >
					<td class="center-text"  align="center" style="font-family:'Poppins',Arial,Helvetica,sans-serif;font-size:14px;line-height:24px;font-weight:400;font-style:normal;color:#6e6e6e;text-decoration:none;letter-spacing:0px;">
						
						<a href="mailto:{{ config('email-template.info_email') }}"    style="color:#6e6e6e;"><span>{{ config('email-template.info_email') }}</span></a> - <a href="{{ url('/') }}"    style="color:#6e6e6e;"><span>{{ config('app.name') }}</span></a>
					
					</td>
				</tr>
				<tr>
					<td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
				</tr>
				<tr  >
					<td align="center">
						@if( config('email-template.play_url') != '' || config('email-template.ios_url') != '' )
							<!-- Buttons -->
							<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation" class="row" width="100%" style="width:100%;max-width:100%;">
								<tr>
									<td align="center">
										<!-- column -->
										<table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
											<tr  >
												<td align="center">
													<a href="{{config('email-template.ios_url')}}"><img style="display:block;width:100%;max-width:117px;border:0px;"    width="117" src="{{ asset('assets/img/emails/App-Store.png') }}" border="0"  alt="icon"></a>
												</td>
												<td width="10" style="width: 10px;"></td>
												<td align="center">
													<a href="{{config('email-template.play_url')}}"><img style="display:block;width:100%;max-width:117px;border:0px;"    width="117" src="{{ asset('assets/img/emails/Google-play.png') }}" border="0"  alt="icon"></a>
												</td>
											</tr>
										</table>
										<!-- column -->
									</td>
								</tr>
							</table>
							<!-- Buttons -->
						@endif
					</td>
				</tr>
				<tr  >
					<td height="30" style="font-size:30px;line-height:30px;" >&nbsp;</td>
				</tr>
				<tr  >
					<td align="center">
					
					</td>
				</tr>
				<tr>
					<td height="50" style="font-size:50px;line-height:50px;" >&nbsp;</td>
				</tr>
			</table>
			<!-- Content -->
		
		</td>
	</tr>
</table>