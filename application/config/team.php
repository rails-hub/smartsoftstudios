<?php defined('SYSPATH') OR die('No direct access allowed.');
$user = Auth::instance()->get_user();
$teamuser = ORM::factory('teamuser')->where('user_id', '=', $user->id)->and_where('selected', '=', true)->order_by('id', 'DESC')->limit(1)->find();

return array(
    'options' => array(
        'team_id' => $teamuser->team_id
    )
);

?>
