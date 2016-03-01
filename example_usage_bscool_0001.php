<?php
// ========== START masquerade ========

/**
 * 1.) You need a "Region" to put your Masquerade block in. In your:
 *     /layouts/<LAYOUT NAME>.info
 *     file add a "region" like this:
 *     regions[masquerade] = Masquerade
 *     Once you added it to <LAYOUT NAME>.info and saved, clear your caches.
 * 2.) Enable the Masquerade Module
 * 2.) Add the code below to your "Layout" page.  I put it at the very bottom
 *     of my page.
 * 3.) Go to "Layouts",
 *     "Structure > Layouts", "edit" your Default Layout (the one where you
 *     just added the Masquerade Region), click "ADD BLOCK" in the "Masquerade"
 *		 region, and select the "Masquerade" block.
 * 4.) Go to the config screen of Masquerade, "Configuration > User accounts > Masquerade"
 *   A.) "Roles that are considered "administrators" for masquerading "
 *       for now you can just select "Administrator"
 *   B.) "Menu Quick Switch user"
 *       I just leave this empty
 *   C.) "Masquerade Block Quick Switch users"
 *       Start typing the user names (separated by comma) of the users you want to
 *       Masquerade as.
 *   D.) "SAVE CONFIGURATION"
 * 5.) Now (if you have the code below on your layout page) go to your front page
 *     and at the very bottom you can easily switch to the users you want to
 *     Masquerade as.

*/
?>

<?php
/*
Why the "$bs_example_users" variable?? because... when you "switch" to
Masquerade as that user, normally that user CANNOT see or use the Masquerade block.
By adding this code, even when Masquerading as that user I can easily
"switch back" to Admin.
The "Array" I manually added UIDs of those users that I added in 4. > C. above.
*/
$bs_example_users = array(1,2,3);
if($user->uid && in_array($user->uid,$bs_example_users)){
//if($user->uid == 1){
?>
<div style="background-color:white;border:1px solid red;margin:20px;padding:20px;">
<div class="container">
<div class="row">
<div class="col-xs-6">

<?php
// ========== START masquerade ========
if($page['masquerade']){print render($page['masquerade']);}
// ========== END masquerade ==========
?>
</div>
<div class="col-xs-6">
<p>Example User UIDs</p>
<p>
BillyBoy (uid = 2)<br />
JohnBoy BV (uid = 3)<br />
</p>
</div>
</div><!-- row -->
</div>
</div>
<?php } ?>