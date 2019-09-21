
@component('mail::message')
 <?php echo html_entity_decode($name);?>
@component('mail::button', ['url' => $link])
Go to your inbox
@endcomponent
Sincerely,  <br>
Tworeports Team.
@endcomponent