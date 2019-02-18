<?php

function checkCurrentUserRoles($roles = []) {
  $current_user = wp_get_current_user();
  $current_user_roles = (array) $current_user->roles;
  foreach($roles as $role) {
    if(in_array($role, $current_user_roles)) {
      return true;
    }
  }
  return false;
}