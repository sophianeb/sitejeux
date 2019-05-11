<?php if($_SESSION['admin'] == 1){?>

<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							
							<th class="column-2">Nom</th>
							<th class="column-3">Telephone</th>
							<th class="column-5">Email</th>
							<th class="column-4 p-l-70">Message</th>
							<th class="column-1">Le</th>

<img src="">
						</tr>
<?php 

$total = 0;

$lire3 = read($connexion,'contact','*', [1=>1],' ORDER BY id DSC');




foreach ($lire3 as $uneligne ) {
	
{
	
	echo '
						<tr class="table-row">
							
							<td class="column-2">'.$uneligne->nom_contact.'</td>
							<td class="column-3">'.$uneligne->tel_contact.'</td>
							<td class="column-5">'.$uneligne->mail_contact.'€</td>
							<td class="column-4 p-l-70">'.$uneligne->message.'</td>
								
								<td class="column-1">'.$uneligne->date_contact.'</td>
								
						</tr>
						';

					
				}}
						?>

						
					</table>
					<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						
					</span>
				</div>


				</div>
			</div>
<?php } ?>